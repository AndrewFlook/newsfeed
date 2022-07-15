<a href="{{ !empty($url) ? route( $url ) : '#' }}" class="{{ Route::currentRouteNamed(!empty($url) ? $url : '' ) ? 'bg-gray-100 text-gray-900' : 'hover:bg-gray-50 text-gray-600 hover:text-gray-900' }} group flex items-center px-3 py-2 text-sm font-medium rounded-md" aria-current="page">
    <i class="fa-light {{ $icon }} fa-xl mr-2 fa-fw"></i>
    <span class="truncate"> {{ $name }} </span>
</a>