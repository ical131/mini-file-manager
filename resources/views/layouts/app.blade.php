<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Mini File Manager')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-slate-50 text-slate-800 antialiased">

    <div class="min-h-screen flex">

        @include('layouts.partials.sidebar')

        <!-- Mobile Sidebar Overlay -->
        <div
            id="sidebar-overlay"
            class="fixed inset-0 bg-black/40 z-30 hidden lg:hidden">
        </div>

        <main class="flex-1 min-w-0">

            @include('layouts.partials.topbar')

            <div class="p-8">
                @yield('content')
            </div>

        </main>

    </div>

</body>
</html>