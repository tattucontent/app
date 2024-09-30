<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Make sure to include the User model


class HomeController extends Controller
{
    //
public function index(){

    // Fetch all users
    $users = User::all();
return view ('admin.index', compact('users'));
}


 // Function to verify a user
 public function verifyUser($userId)
 {
     // Find the user by ID
     $user = User::find($userId);

     // If the user exists, mark them as verified
     if ($user) {
         $user->verified = true;
         $user->save();

         // Redirect back with a success message
         return redirect()->back()->with('message', 'User has been verified successfully.');
     }

     // If user not found, redirect back with an error message
     return redirect()->back()->with('error', 'User not found.');
 }

 public function showUnverifiedUsers()
 {
     $users = User::where('verified', false)->get();
     return view('admin.unverified-users', compact('users'));
 }

}
