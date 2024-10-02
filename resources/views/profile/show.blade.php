<!-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if($profile)
    <h1>{{ $profile->name }}'s Profile</h1>
    <p>Age: {{ $profile->age }}</p>
    <p>Email: {{ $profile->email }}</p>
    <p>Bio: {{ $profile->bio }}</p>
    <p>Job: {{ $profile->job }}</p>
    <p>Job Description: {{ $profile->job_description }}</p>
    <p>Years of Experience: {{ $profile->years_of_experience }}</p>
    <p>Reference Name: {{ $profile->reference_name }}</p>
    <p>Reference Details: {{ $profile->reference_details }}</p>
    <p>Contact: {{ $profile->contact }}</p>
@else
    <p>No profile found.</p>
@endif -->


<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">

                <!-- Displaying errors if there are any -->
                @if ($errors->any())
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4">
                        <strong class="font-bold">Whoops!</strong>
                        <span class="block sm:inline">There were some problems with your input.</span>
                        <ul class="mt-2">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <!-- Displaying profile information -->
                @if($profile)
                    <h1 class="text-2xl font-bold text-gray-800 dark:text-gray-200 mb-4">{{ $profile->name }}'s Profile</h1>
                    <div class="text-gray-700 dark:text-gray-300">
                        <p><strong>Age:</strong> {{ $profile->age }}</p>
                        <p><strong>Email:</strong> {{ $profile->email }}</p>
                        <p><strong>Bio:</strong> {{ $profile->bio }}</p>
                        <p><strong>Job:</strong> {{ $profile->job }}</p>
                        <p><strong>Job Description:</strong> {{ $profile->job_description }}</p>
                        <p><strong>Years of Experience:</strong> {{ $profile->years_of_experience }}</p>
                        <p><strong>Reference Name:</strong> {{ $profile->reference_name }}</p>
                        <p><strong>Reference Details:</strong> {{ $profile->reference_details }}</p>
                        <p><strong>Contact:</strong> {{ $profile->contact }}</p>

                        @if($profile->photo)
                            <img src="{{ asset('photos/' . $profile->photo) }}" alt="{{ $profile->name }}'s Photo" class="w-32 h-32 rounded-full">
                        @endif <!-- Closing the photo if statement -->


                    </div>
                @else
                    <p class="text-gray-700 dark:text-gray-300">No profile found.</p>
                @endif

            </div>
        </div>
    </div>

    <a href="{{ route('dashboard') }}" class="mt-4 inline-block bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Dashboard</a>

</x-app-layout>
