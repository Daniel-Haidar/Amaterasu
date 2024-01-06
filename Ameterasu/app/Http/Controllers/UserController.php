<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    // Show Login Page
    public function login() {
        return view('login');
    }

    // Authenticate Log In Credentials
    public function authenticate(Request $request) {
        $formFields = $request->validate([
            'name' => 'required',
            'password' => 'required'
        ]);

        if(auth()->attempt($formFields)) {
            $request->session()->regenerate();

            return redirect('/')->with('message', 'You are now logged in');
        }
        else {
            return back()->withErrors(['name' => 'Invalid credentials'])->onlyInput('name');
        }
    }

    // Log Out User
    public function logout(Request $request) {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'You have been logged out');
    }

    // Set Table Occupied or Unoccupied
    public function occupy(Request $request, User $user) {
        $formFields = $request->validate([
            'id' => 'required',
            'occupancy' => 'required'
        ]);

        if($formFields['occupancy'] == 'true') {
            $user->update(['occupied' => true]);
            return back()->with('message', 'Table occupied');
        }
        else {
            $user->update(['occupied' => false]);
            $orders = DB::table('orders')->where('user_id', '=', $user->id);
            $orders->delete();
            return back()->with('message', 'Table unoccupied');
        }
    }
}
