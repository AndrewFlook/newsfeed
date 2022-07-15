@extends('layouts.account')

@section('title')
    Profile Settings
@endsection

@section('content')

    <div class="shadow-md sm:rounded-md sm:overflow-hidden border">
        <div class="bg-white py-6 px-4 space-y-6 sm:p-6">
            <div>
                <h3 class="text-lg leading-6 font-medium text-gray-900">
                    Personal Information
                </h3>
                <p class="mt-1 text-sm text-gray-500">
                    Use a permanent address where you can recieve mail.
                </p>
            </div>

            <div class="grid grid-cols-6 gap-6">
                <div class="col-span-6 sm:col-span-3">
                    <label for="name_first" class="block text-sm font-medium text-gray-700">
                        First name
                    </label>
                    <input type="text" name="name_first" id="name_first" autocomplete="name_first" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" value="{{ Auth::user()->name_first }}">
                </div>

                <div class="col-span-6 sm:col-span-3">
                    <label for="name_last" class="block text-sm font-medium text-gray-700">
                        Last name
                    </label>
                    <input type="text" name="name_last" id="name_last" autocomplete="name_last" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" value="{{ Auth::user()->name_last }}">
                </div>

                <div class="col-span-6 sm:col-span-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">
                        Email address
                    </label>
                    <input type="text" name="email" id="email" autocomplete="email" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" value="{{ Auth::user()->email }}">
                </div>
            </div>
        </div>
        <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
            <button type="submit" class="bg-indigo-600 border border-transparent rounded-md shadow-sm py-2 px-4 inline-flex justify-center text-sm font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Save
            </button>
        </div>
    </div>

@endsection