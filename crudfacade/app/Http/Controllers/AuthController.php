<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // SHOW LOGIN
    public function showLogin() {
        return view('auth.login');
    }

    // SHOW REGISTER
    public function showRegister() {
        return view('auth.register');
    }

    // REGISTER USER
    public function register(Request $req) {

        $req->validate([
            'student_id' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        DB::table('users')->insert([
            'student_id' => $req->student_id,
            'first_name' => $req->first_name,
            'last_name' => $req->last_name,
            'email' => $req->email,
            'password' => Hash::make($req->password),
            'course' => $req->course,
            'year_level' => $req->year_level,
            'contact_number' => $req->contact_number,
            'address' => $req->address,
            'birthdate' => $req->birthdate,
            'created_at' => now()
        ]);

        // LOG EVENT
        $this->log("REGISTER", "User {$req->email} registered");

        return redirect('/')->with('success', 'Registered successfully!');
    }

    // LOGIN
    public function login(Request $req) {

        $user = DB::table('users')
            ->where('email', $req->email)
            ->first();

        if ($user && Hash::check($req->password, $user->password)) {

            Session::put('user', $user);

            // LOG EVENT
            $this->log("LOGIN", "User {$req->email} logged in");

            return redirect('/dashboard');
        }

        return back()->with('error', 'Invalid email or password');
    }

    // LOGOUT
    public function logout() {

        if (Session::has('user')) {
            $user = Session::get('user');

            // LOG EVENT
            $this->log("LOGOUT", "User {$user->email} logged out");
        }

        Session::forget('user');

        return redirect('/');
    }

    // LOG FUNCTION (REQUIRED)
    private function log($event, $description) {
        DB::table('logs')->insert([
            'event' => $event,
            'description' => $description,
            'created_at' => now()
        ]);
    }
}
