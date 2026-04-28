<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class StudentController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        $students = Student::when($search, function ($query) use ($search) {
            $query->where('name', 'like', "%{$search}%")
                  ->orWhere('student_id', 'like', "%{$search}%")
                  ->orWhere('course', 'like', "%{$search}%");
        })->latest()->get();

        return view('students.index', compact('students'));
    }

    public function create()
    {
        return view('students.create');
    }


    public function show(Student $student)
    {
        $qr = "ID: {$student->student_id}\nName: {$student->name}\nCourse: {$student->course}";
        return view('students.show', compact('student', 'qr'));
    }

    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    public function update(Request $request, Student $student)
    {
        $data = $request->all();
        if ($request->hasFile('profile_picture')) {
            if ($student->profile_picture) Storage::disk('public')->delete($student->profile_picture);
            $data['profile_picture'] = $request->file('profile_picture')->store('students', 'public');
        }
        $student->update($data);
        return redirect()->route('students.index')->with('success', 'Student updated!');
    }

    public function confirmDelete($id)
    {
        $student = Student::findOrFail($id);
        return view('students.delete', compact('student'));
    }

    public function destroy(Student $student)
    {
        if ($student->profile_picture) Storage::disk('public')->delete($student->profile_picture);
        $student->delete();
        return redirect()->route('students.index')->with('success', 'Student deleted.');
    }

    public function store(Request $request)
{
    $request->validate([
        'student_id' => 'required|unique:students',
        'name' => 'required',
        'email' => 'required|email',
        'course' => 'required',
        'birthdate' => 'nullable|date',
        'profile_picture' => 'nullable|image|max:2048'
    ]);

    $data = $request->all();

    if ($request->hasFile('profile_picture')) {
        $data['profile_picture'] = $request->file('profile_picture')->store('students', 'public');
    }

    Student::create($data);
    return redirect()->route('students.index')->with('success', 'Student added!');
}
}
