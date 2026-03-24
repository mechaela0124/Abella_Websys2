<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RecitationController extends Controller
{

    public function index()
    {

    }


    public function create()
    {

    }


    public function store(Request $request)
    {

    }


    public function show(string $id)
    {

    }


    public function edit(string $id)
    {

    }


    public function update(Request $request, string $id)
    {

    }


    public function destroy(string $id)
    {

    }

    public function showNumber()
    {
        return view('number');
    }

    public function checkNumber(Request $request)
    {
        $num = $request->number;

        if ($num % 2 == 0) {
            $result = "$num is EVEN number";
        } else {
            $result = "$num is ODD number";
        }

        return view('number', compact('result'));
    }

    public function showTable()
    {
        return view('table');
    }

    public function generateTable(Request $request)
    {
        $row = $request->row;
        $col = $request->col;

        $table = [];

        for ($i = 1; $i <= $row; $i++) {
            for ($j = 1; $j <= $col; $j++) {
                $table[$i][$j] = $i * $j;
            }
        }

        return view('table', compact('table'));
    }

    public function showLogin()
    {
        return view('login');
    }

    public function checkLogin(Request $request)
    {
        $username = $request->username;
        $password = $request->password;

        if ($username == "juan" && $password == "petra") {
            $message = "Login Successful!";
            $color = "green";
        } else {
            $message = "Login Failed!";
            $color = "red";
        }

        return view('login', compact('message','color'));
    }

    public function showRegister()
    {
        return view('register');
    }

    public function submitRegister(Request $request)
    {
        $fname = $request->firstname;
        $mname = $request->middlename;
        $lname = $request->lastname;
        $address = $request->address;
        $birthdate = date("F d, Y", strtotime($request->birthdate));

        return view('register', compact('fname','mname','lname','address','birthdate'));
    }
}
