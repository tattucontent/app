<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <!-- <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">
                <h1 class="text-2xl font-semibold mb-2">{{ __("Welcome to Your Dashboard") }}</h1>
                <p class="mb-4">{{ __("Please Update Your Personal Information") }}</p>
                <a href="{{ route('profile.create') }}" class="text-blue-500 hover:underline">Create New Profile</a>
            </div>
        </div>
    </div>
</div>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">
                <h1 class="text-2xl font-semibold mb-2">{{ __("Welcome to Your Dashboard") }}</h1>
                <p class="mb-4">{{ __("Please Update Your Personal Information") }}</p>
                <a href="{{ route('profile.create') }}" class="text-blue-500 hover:text-blue-700 hover:underline transition-colors duration-200">
                    Create New Profile
                </a>
            </div>
        </div>
    </div>
</div> -->

<style>
    .custom-link {
        color: #3b82f6; /* Tailwind's blue-500 */
        transition: color 0.2s ease-in-out;
    }

    .custom-link:hover {
        color: #1d4ed8; /* Tailwind's blue-700 */
        text-decoration: underline;
    }
</style>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">
                <h1 class="text-2xl font-semibold mb-2">{{ __("Welcome to Your Dashboard") }}</h1>
                <p class="mb-4">{{ __("Please Update Your Personal Information") }}</p>
                <a href="{{ route('profile.create') }}" class="custom-link">
                    Adjust Profile
                </a>
            </div>
        </div>
    </div>
</div>
    <!-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Welcome to Your Dashboard") }}
                    {{ __("Please Update Your Personal Information") }}
                    <a href="{{ route('profile.create') }}">Create New Profile</a>

                </div>
            </div>
        </div>
    </div> -->



</x-app-layout>
