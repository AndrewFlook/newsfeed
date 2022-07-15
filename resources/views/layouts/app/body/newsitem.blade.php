<li class="relative bg-white py-5 px-4 hover:bg-gray-50 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600">
    <div class="flex justify-between space-x-3">
        <div class="min-w-0 flex-1">
            <a href="#" class="block focus:outline-none">
                <span class="absolute inset-0" aria-hidden="true"></span>
                <p class="text-sm font-medium text-gray-900 truncate">
                    {{ $item->get_title() }}
                </p>
                <p class="text-sm text-gray-500 truncate">
                    {{ $item->get_author() }}
                </p>
            </a>
        </div>
        <time datetime="{{ $item->get_date('D, F jS, Y - g:i a') }}" class="flex-shrink-0 whitespace-nowrap text-sm text-gray-500">
            {{ $item->get_date('D, F jS, Y - g:i a') }}
        </time>
    </div>
    <div class="mt-1">
        <p class="line-clamp-2 text-sm text-gray-600">
            {{ $item->get_description() }}
        </p>
    </div>
</li>