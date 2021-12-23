<x-guest-layout>
    <x-auth-card>
        {{-- <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot> --}}

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            {{-- <form method="POST" wire:submit.prevent="{{ route('login') }}"> --}}

            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                    autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="current-password" />
                {{-- @error('password')
    <div id="helpId" class="text-danger">{{ $message }}</small>
@enderror --}}
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox"
                        class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex flex-col items-center justify-end mt-4">

                <x-button class="ml-3 w-80 justify-center">
                    {{ __('Log in') }}
                </x-button>
        </form>

        <form method="GET" action="/auth/redirect">
            <x-button class="ml-3 w-80 justify-center bg-gray-200">
                {{ __('Log in with Github') }}
            </x-button>
        </form>

        @if (Route::has('password.request'))
            <a class="underline py-2 text-sm text-gray-600 hover:text-gray-900"
                href="{{ route('password.request') }}">
                {{ __('Forgot your password?') }}
            </a>
        @endif
        @if (Route::has('register'))
            Don't have an account?<a href="{{ route('register') }}" class="link-secondary px-2">Register</a>
        @endif
        </div>
    </x-auth-card>
</x-guest-layout>
