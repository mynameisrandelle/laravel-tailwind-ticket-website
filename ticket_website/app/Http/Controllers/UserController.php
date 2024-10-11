<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        // Validate the register form data
        $request->validate([
            'username' => 'required|string|max:255|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'password_confirmation' => 'required|string|min:8',
        ]);

        // Create a new user
        $user = $this->createUser($request->input());

        // Redirect to the login page
        return redirect()->route('login');
    }

    public function loginValidate(Request $request) {
        // Validate the login form data
        $request->validate([
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:8',
        ]);

        // Attempt to log the user in
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Redirect to the dashboard
            return redirect()->route('dashboard');
        } else {
            // Return an error message
            return back()->withErrors(['Invalid email or password']);
        }
    }

    private function createUser(array $validatedData) {
        return User::create([
            'username' => $validatedData['username'],
            'email' => $validatedData['email'],
            'password' => $validatedData['password'],
        ]);
    }

}
