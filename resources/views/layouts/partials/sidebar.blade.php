<aside
    id="sidebar"
    class="fixed inset-y-0 left-0 z-40 w-64 h-screen bg-white border-r border-slate-200 flex flex-col transform -translate-x-full transition-transform duration-300 ease-in-out lg:translate-x-0 lg:sticky lg:top-0"
>

    <!-- Logo -->
    <div class="h-20 flex items-center px-6 border-b border-slate-100">
        <h1 class="text-xl font-bold text-blue-600">
            Mini<span class="text-slate-800">Drive</span>
        </h1>
    </div>

    <!-- Navigation -->
    <nav class="flex-1 px-4 py-6">

        <p class="text-xs font-semibold text-slate-400 uppercase tracking-wider mb-4 px-3">
            Workspace
        </p>

        <div class="space-y-1">

            <a href="/"
               class="flex items-center gap-3 px-3 py-2.5 rounded-lg bg-blue-50 text-blue-600 font-medium">
                <span>▦</span>
                Dashboard
            </a>

            <a href="#"
               class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-slate-600 hover:bg-slate-50 transition">
                <span>▤</span>
                My Files
            </a>

            <a href="#"
               class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-slate-600 hover:bg-slate-50 transition">
                <span>↗</span>
                Shared Files
            </a>

            <a href="#"
               class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-slate-600 hover:bg-slate-50 transition">
                <span>◷</span>
                Recent
            </a>

            <a href="#"
               class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-slate-600 hover:bg-slate-50 transition">
                <span>♲</span>
                Trash
            </a>

        </div>

    </nav>

    <!-- Storage Information -->
    <div class="p-4 border-t border-slate-100">

        <p class="text-sm font-semibold text-slate-700 mb-2">
            Storage
        </p>

        <div class="w-full bg-slate-100 rounded-full h-2 mb-2">
            <div class="bg-blue-600 h-2 rounded-full w-1/4"></div>
        </div>

        <p class="text-xs text-slate-500">
            125 MB of 500 MB used
        </p>

    </div>

</aside>