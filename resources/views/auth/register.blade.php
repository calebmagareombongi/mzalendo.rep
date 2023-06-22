<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('css/registerstyle.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>


<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}" class="container">
            @csrf
                  <div class="title">Registration</div>

                  <div class="content">
                <div class="user-details">


            <!-- Name -->
            <div class="input-box">
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
             <div class="input-box">
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>
        </div>


             <div class="input-box">
            <!-- Password -->
            <div class="mt-4">
    <x-label for="password" :value="__('Password')" />
    <x-input id="password" class="block mt-1 w-full"
             type="password"
             name="password"
             pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$"
             title="Password must contain at least 8 characters, including at least one letter and one number"
             required
             autocomplete="new-password" />
</div>


             <div class="input-box1">

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>
        </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </div></div>
        </form>
    </x-auth-card>
</x-guest-layout>
</body>
</html>





      