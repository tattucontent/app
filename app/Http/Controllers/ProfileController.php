<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;
use App\Models\Profile;


class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    // public function edit(Request $request): View
    // {
    //     return view('profile.edit', [
    //         'user' => $request->user(),
    //     ]);
    // }

    /**
     * Update the user's profile information.
     */
    // public function update(ProfileUpdateRequest $request): RedirectResponse
    // {
    //     $user = $request->user();

    //     // Handle the file upload for the photo
    //     if ($request->hasFile('photo')) {
    //         // Delete the old photo if it exists
    //         if ($user->photo) {
    //             Storage::delete($user->photo);
    //         }
    //         // Store the new photo
    //         $path = $request->file('photo')->store('public/photos');
    //         $user->photo = $path;
    //     }

    //     // Fill other fields
    //     $user->fill($request->validated());

    //     // Handle email verification reset if email is changed
    //     if ($user->isDirty('email')) {
    //         $user->email_verified_at = null;
    //     }

    //     // Handle other profile fields such as job, address, etc.
    //     // $user->address = $request->input('address');
    //     // $user->phone_number = $request->input('phone_number');
    //     // $user->birthdate = $request->input('birthdate');
    //     // $user->job = $request->input('job');
    //     // $user->job_description = $request->input('job_description');
    //     // $user->reference = $request->input('reference');
    //     // $user->reference_title = $request->input('reference_title');

    //     $user->save();

    //     return Redirect::route('profile.edit')->with('status', 'profile-updated');
    // }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        // Delete the user's photo if it exists
        if ($user->photo) {
            Storage::delete($user->photo);
        }

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }

    // public function completeProfile(Request $request)
    // {
    //     $user = Auth::user();

    //     // Validate the input
    //     $request->validate([
    //         'address' => ['required', 'string', 'max:255'],
    //         'phone_number' => ['required', 'string', 'max:20'],
    //         'birthdate' => ['required', 'date'],
    //         'photo' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif', 'max:2048'],
    //         'job' => ['required', 'string', 'max:255'],
    //         'job_description' => ['required', 'string'],
    //         'reference' => ['required', 'string', 'max:255'],
    //         'reference_title' => ['required', 'string', 'max:255'],
    //     ]);

    //     // Handle the file upload for the photo
    //     if ($request->hasFile('photo')) {
    //         // Delete the old photo if it exists
    //         if ($user->photo) {
    //             Storage::delete($user->photo);
    //         }
    //         // Store the new photo
    //         $path = $request->file('photo')->store('public/photos');
    //         $user->photo = $path;
    //     }

    //     // Update the user profile fields
    //     $user->address = $request->input('address');
    //     $user->phone_number = $request->input('phone_number');
    //     $user->birthdate = $request->input('birthdate');
    //     $user->job = $request->input('job');
    //     $user->job_description = $request->input('job_description');
    //     $user->reference = $request->input('reference');
    //     $user->reference_title = $request->input('reference_title');

    //     // Mark the profile as complete
    //     $user->profile_complete = true;

    //     $user->save();

    //     // Redirect to the dashboard or wherever you'd like
    //     return redirect()->route('dashboard')->with('status', 'Profile completed successfully!');
    // }

    public function create()
    {
        return view('profile.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'age' => 'required|integer',
            'email' => 'required|email|unique:profiles',
            'job' => 'required|string|max:255',  // Job title validation
            'job_description' => 'required|string|max:1000',  // Job description validation
            'years_of_experience' => 'required|integer|min:0',  // Years of experience validation
            'reference_name' => 'required|string|max:255',  // Reference name validation
            'reference_details' => 'nullable|string|max:1000',  // Reference details validation
            'contact' => 'required|string|max:255',  // Contact information validation
        ]);

    // Handle photo upload
    if ($request->hasFile('photo')) {
        $file = $request->file('photo');
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('photos'), $filename); // Save to public/photos directory
        $validatedData['photo'] = $filename; // Store the filename in the database
    }

        $profile = Profile::create($validatedData);

        return redirect()->route('profile.show')->with('success', 'Profile created successfully!');
    }
    public function show()
    {
        $profile = Profile::first();  // Or use authentication to get the user's profile
        return view('profile.show', compact('profile'));
    }

    public function edit(Profile $profile)
    {
        return view('profile.edit', compact('profile'));
    }

    public function update(Request $request, Profile $profile)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'age' => 'required|integer',
            'email' => 'required|email|unique:profiles,email,' . $profile->id,
            'bio' => 'nullable',
            'job' => 'required|max:255',
            'job_description' => 'nullable|string',
            'years_worked' => 'required|integer',
            'reference_name' => 'required|max:255',
            'reference_number' => 'required|string',
            'reference_job_title' => 'required|max:255',
        ]);

        $profile->update($validatedData);

        return redirect()->route('profile.show', $profile->id)->with('success', 'Profile updated successfully!');
    }

}


