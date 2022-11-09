<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-input-label for="name" :value="__('Name')" />
                
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus placeholder="Enter your name..." />

                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div class="mt-7">
                <x-input-label for="email" :value="__('Email')" />

                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required  placeholder="Enter your email address..."/>

                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-7">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" placeholder="Enter your password..."/>

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-7">
                <x-input-label for="password_confirmation" :value="__('Repeat Password')" />

                <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required placeholder="Repeat Password..." />

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>
    
            <div class="flex items-center justify-end mt-9">
                <x-primary-button>
                    {{ __('Sign Up') }}
                </x-primary-button>
            </div>
            
             <div class="w-auto p-2">
                <span class="text-sm text-black font-extrabold text-indigo-600"> {{ __('Already registered?') }}</span>
                <a class="text-sm text-black font-extrabold text-indigo-500 hover:text-blue-700 font-medium" href="{{ route('login') }}">{{ __('Login') }}</a>
            </div>

        </form>
    </x-auth-card>
</x-guest-layout>
