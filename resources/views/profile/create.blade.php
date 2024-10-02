<!-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="{{ route('profile.store') }}">
    @csrf
    <div>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
    </div>
    <div>
        <label for="age">Age:</label>
        <input type="number" id="age" name="age" required>
    </div>
    <div>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
    </div>
    <div>
        <label for="job">Job:</label>
        <input type="text" id="job" name="job" required>
    </div>
    <div>
        <label for="job_description">Job Description:</label>
        <textarea id="job_description" name="job_description" required></textarea>
    </div>
    <div>
        <label for="years_of_experience">Years of Experience:</label>
        <input type="number" id="years_of_experience" name="years_of_experience" required>
    </div>
    <div>
        <label for="reference_name">Reference Name:</label>
        <input type="text" id="reference_name" name="reference_name" required>
    </div>
    <div>
        <label for="reference_details">Reference Details:</label>
        <textarea id="reference_details" name="reference_details"></textarea>
    </div>
    <div>
        <label for="contact">Contact Information:</label>
        <input type="text" id="contact" name="contact" required>
    </div>
    <div>
        <label for="bio">Bio:</label>
        <textarea id="bio" name="bio"></textarea>
    </div>
    <button type="submit">Submit</button>
</form> -->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                @if ($errors->any())
                    <div class="bg-red-500 text-white p-4 rounded-md mb-4">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="POST" action="{{ route('profile.store') }}" class="space-y-6">
                    @csrf
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Name:</label>
                        <input type="text" id="name" name="name" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md dark:bg-gray-900 dark:border-gray-700 dark:text-gray-300">
                    </div>

                    <div>
                        <label for="age" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Age:</label>
                        <input type="number" id="age" name="age" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md dark:bg-gray-900 dark:border-gray-700 dark:text-gray-300">
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Email:</label>
                        <input type="email" id="email" name="email" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md dark:bg-gray-900 dark:border-gray-700 dark:text-gray-300">
                    </div>

                    <div>
                        <label for="job" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Job:</label>
                        <input type="text" id="job" name="job" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md dark:bg-gray-900 dark:border-gray-700 dark:text-gray-300">
                    </div>

                    <div>
                        <label for="job_description" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Job Description:</label>
                        <textarea id="job_description" name="job_description" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md dark:bg-gray-900 dark:border-gray-700 dark:text-gray-300"></textarea>
                    </div>

                    <div>
                        <label for="years_of_experience" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Years of Experience:</label>
                        <input type="number" id="years_of_experience" name="years_of_experience" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md dark:bg-gray-900 dark:border-gray-700 dark:text-gray-300">
                    </div>

                    <div>
                        <label for="reference_name" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Reference Name:</label>
                        <input type="text" id="reference_name" name="reference_name" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md dark:bg-gray-900 dark:border-gray-700 dark:text-gray-300">
                    </div>

                    <div>
                        <label for="reference_details" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Reference Details:</label>
                        <textarea id="reference_details" name="reference_details" class="mt-1 block w-full p-2 border border-gray-300 rounded-md dark:bg-gray-900 dark:border-gray-700 dark:text-gray-300"></textarea>
                    </div>

                    <div>
                        <label for="contact" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Contact Information:</label>
                        <input type="text" id="contact" name="contact" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md dark:bg-gray-900 dark:border-gray-700 dark:text-gray-300">
                    </div>

                    <div>
                        <label for="bio" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Bio:</label>
                        <textarea id="bio" name="bio" class="mt-1 block w-full p-2 border border-gray-300 rounded-md dark:bg-gray-900 dark:border-gray-700 dark:text-gray-300"></textarea>
                    </div>
                    <div class="mb-4">
                        <label for="photo" class="block text-gray-700">Photo</label>
                        <input type="file" name="photo" id="photo" class="mt-1 block w-full" accept="image/*">
                   </div>

                    <div>
                        <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600">
                            Submit
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>

