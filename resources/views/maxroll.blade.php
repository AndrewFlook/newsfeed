@extends('layouts.app')

@section('content')
    @foreach( $feed->get_items(0, 20) as $item)
        <li class="relative bg-white py-5 px-4 hover:bg-gray-50 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600">
            <div class="flex justify-between space-x-3">
                <div class="min-w-0 flex-1">
                    <a href="{{ $item->get_link() }}" class="block focus:outline-none">
                        <span class="absolute inset-0" aria-hidden="true"></span>
                        <p class="text-sm font-medium text-gray-900 truncate">
                            {{ $item->get_title() }}
                        </p>
                        <div class="">
                            <time datetime="{{ $item->get_date('D, F jS, Y - g:i a') }}" class="flex-shrink-0 whitespace-nowrap text-sm text-gray-500">
                                {{ $item->get_date('D, F jS, Y - g:i a') }}
                            </time>
                        </div>
                    </a>
                </div>
            </div>
            <div class="mt-1">
                <p class="line-clamp-2 text-sm text-gray-600 prose">
                    {{ $item->get_description() }}
                </p>
            </div>
        </li>
    @endforeach
@endsection