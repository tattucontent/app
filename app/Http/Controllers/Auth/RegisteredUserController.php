<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'job' => ['required', 'string', 'max:255'],
            'job_description' => ['required', 'string'],
            'years_worked' => ['required', 'integer', 'min:0'],
            'age' => ['required', 'integer', 'min:18'],
            'reference_name' => ['required', 'string', 'max:255'],
            'reference_number' => ['required', 'string'],
            'reference_job_title' => ['required', 'string', 'max:255'],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'job' => $request->job,
            'job_description' => $request->job_description,
            'years_worked' => $request->years_worked,
            'age' => $request->age,
            'reference_name' => $request->reference_name,
            'reference_number' => $request->reference_number,
            'reference_job_title' => $request->reference_job_title,
            'verified' => false, // New users are not verified yet


        ]);

        event(new Registered($user));
        // Flash a message to the session
        session()->flash('message', 'Thank you for registering! Please wait for verification.');

        // Redirect to the welcome page
        return redirect()->route('/'); // Ensure this route is defined



        // Auth::login($user);

        // return redirect(route('dashboard', absolute: false));
    }
}
