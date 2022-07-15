@extends('layouts.account')

@section('title')
    Security Settings
@endsection

@section('content')

    @if(Session::has('message'))
        <div class="bg-emerald-300 px-3 py-3">
            <h1>{{ Session::get('title') }}</h1>
            <p>{{ Session::get('message') }}</p>
        </div>
    @endif

    <div class="bg-emerald-300 text-emerald-700 px-3 py-3">
        <h1>Success!</h1>
        <p>Your password has been successfully changed.</p>
    </div>

    <div class="shadow-md sm:rounded-md sm:overflow-hidden border">
        <form action="{{ route('account.security.update', Auth::user()) }}" method="POST">
            @method('PUT')
            @csrf
            <div class="bg-white py-6 px-4 space-y-6 sm:p-6">
                <div>
                    <h3 class="text-lg leading-6 font-medium text-gray-900">
                        Security Settings
                    </h3>
                    <p class="mt-1 text-sm text-gray-500">
                        Maintain your account security below.
                    </p>
                </div>
                <div class="flex flex-row space-x-6">
                    <div class="flex flex-col w-1/3 space-y-6">
                        <div class="">
                            <label for="password_old" class="block text-sm font-medium text-gray-700">
                                Current Password
                            </label>
                            <input type="password" name="password_old" id="password_old" autocomplete="password_old" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            @error('password_old')
                            <p class="mt-2 text-sm text-red-600" id="password_old-error">{{ $message }}.</p>
                            @enderror
                        </div>

                        <div class="">
                            <label for="password" class="block text-sm font-medium text-gray-700">
                                New Password
                            </label>
                            <input type="password" name="password" id="password" autocomplete="password" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            @error('password')
                            <p class="mt-2 text-sm text-red-600" id="password-error">{{ $message }}.</p>
                            @enderror
                        </div>

                        <div class="">
                            <label for="password_confirmation" class="block text-sm font-medium text-gray-700">
                                Confirm your new password
                            </label>
                            <input type="text" name="password_confirmation" id="password_confirmation" autocomplete="password_confirmation" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            @error('password_confirmation')
                            <p class="mt-2 text-sm text-red-600" id="password_confirmation-error">{{ $message }}.</p>
                            @enderror
                        </div>
                    </div>
                    <div class="">
                        <p class="mt-1 text-sm text-gray-500">
                            Passwords must contain the following:
                        </p>
                        <ul class="mt-4 space-y-1 text-sm text-gray-500">
                            <li>Must have at least 8 characters.</li>
                            <li>Must have at least 1 uppercase letter.</li>
                            <li>Must have at least 1 lowercase letter.</li>
                            <li>Must have at least 1 special character.</li>
                            <li>Cannot have more than 3 sequential characters in a row.</li>
                            <li class="ml-8">Ex: "abc" or "123"</li>
                            <li>Cannot be found in any known data breach</li>
                            <li class="ml-8">See <a href="https://www.haveibeenpwned.com" class="text-indigo-500">haveibeenpwned.com</a> for more info on data breaches.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                <button type="submit" class="bg-indigo-600 border border-transparent rounded-md shadow-sm py-2 px-4 inline-flex justify-center text-sm font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Save
                </button>
            </div>
        </form>
    </div>

    <!-- This example requires Tailwind CSS v2.0+ -->
    <div class="bg-white shadow sm:rounded-lg border border-red-500 mt-8">
        <div class="px-4 py-5 sm:p-6">
            <h3 class="text-lg leading-6 font-medium text-red-600">
                Delete your account
            </h3>
            <div class="mt-2 max-w-xl text-sm text-gray-500">
                <p>Once you delete your account, you will lose all data associated with it.</p>
            </div>
            <div class="mt-5">
                <button type="button" class="inline-flex items-center justify-center px-4 py-2 border border-transparent font-medium rounded-md text-red-700 bg-red-100 hover:bg-red-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:text-sm">
                    Delete account
                </button>
            </div>
        </div>
    </div>

@endsection