<div class="h-full min-h-full flex flex-col flex-none border-r border-gray-200 pt-5 pb-4 bg-white overflow-y-auto">
    <div class="flex items-center flex-shrink-0 px-8 py-2">
        Anshin.gg
    </div>
    <div class="mt-5 flex-none flex flex-col">
        <nav class="flex-1 px-2 space-y-8 bg-white" aria-label="Sidebar">
            <div class="space-y-1">
                <a href="{{ route('wowhead') }}" class="{{ Route::currentRouteNamed('wowhead') ? 'bg-gray-100 text-gray-900' : 'text-gray-600 hover:bg-gray-50 hover:text-gray-900'}} group flex items-center px-2 py-2 space-x-2 text-sm font-medium rounded-md">
                    <img class="h-6 w-auto" src="https://wow.zamimg.com/images/logos/wh-logo-thumbnail.png" alt="wowhead">
                    <span>Wowhead</span>
                </a>

                <a href="{{ route('maxroll') }}" class="{{ Route::currentRouteNamed('maxroll') ? 'bg-gray-100 text-gray-900' : 'text-gray-600 hover:bg-gray-50 hover:text-gray-900'}} group flex items-center px-2 py-2 space-x-2 text-sm font-medium rounded-md">
                    <img class="h-6 w-auto" src="https://assets.maxroll.gg/wp-content/assets/img/mxr-logo-1color-01.png" alt="Maxroll.gg">
                    <span>Maxroll</span>
                </a>

                <a href="{{ route('ign') }}" class="{{ Route::currentRouteNamed('ign') ? 'bg-gray-100 text-gray-900' : 'text-gray-600 hover:bg-gray-50 hover:text-gray-900'}} group flex items-center px-2 py-2 space-x-2 text-sm font-medium rounded-md">
                    <img class="h-6 w-auto" src="https://sea.ign.com/s/ign/social_logo.png" alt="IGN">
                    <span>IGN</span>
                </a>
            </div>
            {{-- <div class="space-y-1">
                <h3 class="px-3 text-xs font-semibold text-gray-500 uppercase tracking-wider" id="projects-headline">
                    Projects
                </h3>
                <div class="space-y-1" role="group" aria-labelledby="projects-headline">
                    <a href="#" class="group flex items-center px-3 py-2 text-sm font-medium text-gray-600 rounded-md hover:text-gray-900 hover:bg-gray-50">
                        <span class="truncate">
                            Website redesign
                        </span>
                    </a>

                    <a href="#" class="group flex items-center px-3 py-2 text-sm font-medium text-gray-600 rounded-md hover:text-gray-900 hover:bg-gray-50">
                        <span class="truncate">
                            GraphQL API
                        </span>
                    </a>

                    <a href="#" class="group flex items-center px-3 py-2 text-sm font-medium text-gray-600 rounded-md hover:text-gray-900 hover:bg-gray-50">
                        <span class="truncate">
                            Customer migration guides
                        </span>
                    </a>

                    <a href="#" class="group flex items-center px-3 py-2 text-sm font-medium text-gray-600 rounded-md hover:text-gray-900 hover:bg-gray-50">
                        <span class="truncate">
                            Profit sharing program
                        </span>
                    </a>
                </div>
            </div> --}}
        </nav>
    </div>
</div>