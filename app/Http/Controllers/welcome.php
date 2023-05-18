<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class welcome extends Controller
{

    public function index()
    {
        return view('index');
    }

    public function registerUser(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);


        $insertUser = DB::table('users')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'role' => 'user',
            'created_at' => date(now()),
            'updated_at' => date(now())

        ]);

        if ($insertUser) {
            return back()->with('success', 'User has been created successfully.');
        } else {
            return back()->with('fail', 'Something went wrong, try again later.');
        }
    }

    public function preregister(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);

        $insertUser = DB::table('preregister')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'created_at' => date(now()),
            'updated_at' => date(now()),
        ]);

        if ($insertUser) {
            return back()->with('success', 'Anda sudah masuk kedaftar Pre-Register!');
        } else {
            return back()->with('fail', 'Something went wrong, try again later.');
        }
    }
}
