<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <!-- Job -->
        <div class="mt-4">
            <x-input-label for="job" :value="__('Job')" />
            <x-text-input id="job" class="block mt-1 w-full" type="text" name="job" :value="old('job')" required />
            <x-input-error :messages="$errors->get('job')" class="mt-2" />
        </div>

        <!-- Job Description -->
        <div class="mt-4">
            <x-input-label for="job_description" :value="__('Job Description')" />
            <x-textarea id="job_description" class="block mt-1 w-full" name="job_description" required>{{ old('job_description') }}</x-textarea>
            <x-input-error :messages="$errors->get('job_description')" class="mt-2" />
        </div>

        <!-- Years Worked -->
        <div class="mt-4">
            <x-input-label for="years_worked" :value="__('Years Worked')" />
            <x-text-input id="years_worked" class="block mt-1 w-full" type="number" name="years_worked" :value="old('years_worked')" required />
            <x-input-error :messages="$errors->get('years_worked')" class="mt-2" />
        </div>

        <!-- Age -->
        <div class="mt-4">
            <x-input-label for="age" :value="__('Age')" />
            <x-text-input id="age" class="block mt-1 w-full" type="number" name="age" :value="old('age')" required />
            <x-input-error :messages="$errors->get('age')" class="mt-2" />
        </div>

        <!-- References -->
        <div class="mt-4">
            <x-input-label for="references" :value="__('References')" />

            <!-- Reference Name -->
            <x-input-label for="reference_name" :value="__('Reference Name')" class="mt-2" />
            <x-text-input id="reference_name" class="block mt-1 w-full" type="text" name="reference_name" :value="old('reference_name')" required />

            <!-- Reference Number -->
            <x-input-label for="reference_number" :value="__('Reference Number')" class="mt-2" />
            <x-text-input id="reference_number" class="block mt-1 w-full" type="text" name="reference_number" :value="old('reference_number')" required />

            <!-- Reference Job Title -->
            <x-input-label for="reference_job_title" :value="__('Reference Job Title')" class="mt-2" />
            <x-text-input id="reference_job_title" class="block mt-1 w-full" type="text" name="reference_job_title" :value="old('reference_job_title')" required />

            <x-input-error :messages="$errors->get('references')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
