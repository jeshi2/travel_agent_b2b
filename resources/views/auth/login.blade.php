<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full"
                type="email" name="email" :value="old('email')" 
                required autofocus autocomplete="username" />

            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" 
                    class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" 
                    name="remember">

                <span class="ms-2 text-sm text-indigo-600 hover:text-indigo-500 font-semibold">
                    {{ __('Remember me') }}
                </span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-indigo-600 hover:text-indigo-500 rounded-md 
                    focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                    href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3 hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 bg-indigo-600 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
    <p class="mt-10 text-center text-sm text-gray-500">
      Not a member?
      <a href="/register" class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">Create a new account</a>
    </p>
</x-guest-layout>
