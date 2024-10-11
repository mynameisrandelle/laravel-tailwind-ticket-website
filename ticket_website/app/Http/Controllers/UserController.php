<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    
    public function loginView() {
        return view('users.loginPage');
    }

    public function registerView() {
        return view('users.registerPage');
    }

    public function ticketDashboard() {
        return view('dashboard.ticketSection');
    }

    public function registerValidate(Request $request) {
        // Validate the form data

        $request->validate([

            'username' => 'required|string|max:255',

            'email' => 'required|string|email|max:255|unique:users',

            'password' => 'required|string|min:8|confirmed',

            'password_confirmation' => 'required|string|min:8',

        ]);
    }

    public function loginValidate(Request $request) {
        // Validate the form data

        $request->validate([

            'email' => 'required|string|email|max:255|unique:users',

            'password' => 'required|string|min:8',

        ]);
    }

}
