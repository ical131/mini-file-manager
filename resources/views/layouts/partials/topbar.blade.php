
<header class="h-20 bg-white border-b border-slate-200 flex items-center justify-between px-4 sm:px-6 lg:px-8">

    <!-- Left Section -->
    <div class="flex items-center gap-3">

        <!-- Mobile Menu Button -->
        <button
            id="sidebar-toggle"
            type="button"
            class="lg:hidden p-2 rounded-lg text-slate-600 hover:bg-slate-100 transition"
            aria-label="Open sidebar"
        >
            ☰
        </button>

        <!-- Page Title -->
        <div>
            <h1 class="text-xl font-semibold text-slate-800">
                @yield('page-title', 'Dashboard')
            </h1>

            <p class="text-sm text-slate-400 hidden sm:block">
                Manage your files and folders
            </p>
        </div>

    </div>

    <!-- Right Section -->
    <div class="flex items-center gap-3 sm:gap-5">

        <!-- Search -->
        <div class="relative hidden md:block">
            <input
                type="text"
                placeholder="Search files..."
                class="w-64 pl-10 pr-4 py-2.5 text-sm border border-slate-200 rounded-lg outline-none focus:ring-2 focus:ring-blue-100 focus:border-blue-400"
            >

            <span class="absolute left-3 top-2.5 text-slate-400">
                ⌕
            </span>
        </div>

        <!-- Notification -->
        <button class="relative text-slate-500 hover:text-blue-600">
            ♧
            <span class="absolute -top-1 -right-1 w-2 h-2 bg-red-500 rounded-full"></span>
        </button>

        <!-- Profile -->
        <div class="flex items-center gap-2 sm:gap-3 border-l border-slate-200 pl-3 sm:pl-5">

            <div class="w-9 h-9 rounded-full bg-blue-100 text-blue-600 flex items-center justify-center font-semibold">
                N
            </div>

            <div class="hidden sm:block">
                <p class="text-sm font-medium text-slate-700">
                    Nawwaf
                </p>

                <p class="text-xs text-slate-400">
                    Administrator
                </p>
            </div>

        </div>

    </div>

</header>
