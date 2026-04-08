<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class ProfileController extends Controller
{
    // DASHBOARD PAGE
    public function index()
    {
        if (!Session::has('user')) {
            return redirect('/');
        }

        // ✅ Force session user to object (fixes your error permanently)
        $sessionUser = (object) Session::get('user');

        $user = DB::table('users')
            ->where('id', $sessionUser->id)
            ->first();

        return view('dashboard.index', compact('user'));
    }

    // UPDATE PROFILE
    public function update(Request $req)
    {
        if (!Session::has('user')) {
            return redirect('/');
        }

        // ✅ Force object again
        $user = (object) Session::get('user');

        DB::table('users')
            ->where('id', $user->id) // ✅ FIXED (was wrong before)
            ->update([
                'first_name' => $req->first_name,
                'last_name' => $req->last_name,
                'course' => $req->course,
                'year_level' => $req->year_level,
                'contact_number' => $req->contact_number,
                'address' => $req->address,
                'updated_at' => now()
            ]);

        // LOG EVENT
        $this->log("UPDATE", "User {$user->email} updated profile");

        // ✅ Refresh session (always store as object)
        $updatedUser = DB::table('users')
            ->where('id', $user->id)
            ->first();

        Session::put('user', $updatedUser);

        return redirect('/dashboard')->with('success', 'Profile updated!');
    }

    // LOG FUNCTION
    private function log($event, $description)
    {
        DB::table('logs')->insert([
            'event' => $event,
            'description' => $description,
            'created_at' => now()
        ]);
    }
}
