<body class="antialiased w-full h-full min-h-full min-w-full bg-white">
    @include('layouts.meta.header')
    <main class="h-full min-h-full">

        <div class="container mx-auto max-w-6xl">
            <div class="flex flex-row space-x-4">

                @include('layouts.account.sidenav')
                <div class="flex flex-col w-full">
                    @yield('content')
                </div>

            </div>
        </div>
    </main>
    @include('layouts.meta.footer')
</body>