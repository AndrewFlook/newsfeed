@extends('layouts.app')

@section('title')
    Register
@endsection

@section('content')
    <div class="min-h-full flex flex-col justify-center pb-12 sm:px-6 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-md">
            <img class="mx-auto h-11 w-auto" src="https://tailwindui.com/img/logos/workflow-mark.svg?color=emerald&shade=600" alt="Workflow">
            <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">Create an account</h2>
        </div>

        <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
            <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10">
                <form class="space-y-6" action="{{ route('register') }}" method="POST">
                    @csrf
                    <div class="flex flex-row space-x-4">
                        <div>
                            <label for="name_first" class="block text-sm font-medium text-gray-700"> First Name </label>
                            <div class="mt-1">
                            <input id="name_first" name="name_first" type="text" autocomplete="name_first" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-emerald-500 focus:border-emerald-500 sm:text-sm" value="{{ old('name_first') }}">
                            </div>
                        </div>

                        <div>
                            <label for="name_last" class="block text-sm font-medium text-gray-700"> Last Name </label>
                            <div class="mt-1">
                            <input id="name_last" name="name_last" type="text" autocomplete="name_last" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-emerald-500 focus:border-emerald-500 sm:text-sm" value="{{ old('name_last') }}">
                            </div>
                        </div>
                        @error(['name_first', 'name_last'])
                        <p class="mt-2 text-sm text-red-600" id="name_first-error">{{ $message }}.</p>
                        @enderror
                    </div>

                    <div>
                        <label for="username" class="block text-sm font-medium text-gray-700"> Username </label>
                        <div class="mt-1">
                        <input id="username" name="username" type="text" autocomplete="username" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-emerald-500 focus:border-emerald-500 sm:text-sm" value="{{ old('username') }}">
                        </div>
                        @error('username')
                        <p class="mt-2 text-sm text-red-600" id="username">{{ $message }}.</p>
                        @enderror
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700"> Email address </label>
                        <div class="mt-1">
                        <input id="email" name="email" type="email" autocomplete="email" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-emerald-500 focus:border-emerald-500 sm:text-sm" value="{{ old('email') }}">
                        </div>
                        @error('email')
                        <p class="mt-2 text-sm text-red-600" id="email">{{ $message }}.</p>
                        @enderror
                    </div>

                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700"> Password </label>
                        <div class="mt-1">
                        <input id="password" name="password" type="password" autocomplete="password" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-emerald-500 focus:border-emerald-500 sm:text-sm">
                        </div>
                        @error('password')
                        <p class="mt-2 text-sm text-red-600" id="password-error">{{ $message }}.</p>
                        @enderror
                    </div>

                    <div>
                        <label for="password_confirmation" class="block text-sm font-medium text-gray-700"> Confirm Password </label>
                        <div class="mt-1">
                        <input id="password_confirmation" name="password_confirmation" type="password" autocomplete="password" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-emerald-500 focus:border-emerald-500 sm:text-sm">
                        </div>
                        @error('password_confirm')
                        <p class="mt-2 text-sm text-red-600" id="password-error">{{ $message }}.</p>
                        @enderror
                    </div>

                    <div>
                        <button type="submit" class="mt-12 w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-emerald-600 hover:bg-emerald-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-emerald-500">Register</button>
                    </div>
                </form>

                <div class="flex items-center mt-8">
                    <div class="text-sm">
                        <a href="{{ route('login') }}" class="font-medium text-emerald-600 hover:text-emerald-500">
                            Already have an account? Login instead.
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection