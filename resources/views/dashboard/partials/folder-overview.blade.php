<div class="space-y-4">

    <div class="flex items-center justify-between">
        <h2 class="text-lg font-semibold text-slate-800">
            Your Folders
        </h2>

        <button class="text-sm font-medium text-blue-600 hover:text-blue-700">
            View all
        </button>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">

        @php
            $folders = [
                ['name' => 'Documents', 'files' => 12, 'size' => '24.5 MB', 'icon' => '📁'],
                ['name' => 'Images', 'files' => 48, 'size' => '86.2 MB', 'icon' => '🖼️'],
                ['name' => 'Videos', 'files' => 8, 'size' => '320 MB', 'icon' => '🎬'],
                ['name' => 'Work', 'files' => 24, 'size' => '52.8 MB', 'icon' => '💼'],
            ];
        @endphp

        @foreach ($folders as $folder)
            <div class="bg-white border border-slate-200 rounded-xl p-5 hover:shadow-md transition cursor-pointer">

                <div class="flex items-center justify-between mb-4">
                    <div class="w-11 h-11 flex items-center justify-center rounded-lg bg-blue-50 text-blue-600">
                        <span class="text-xl">{{ $folder['icon'] }}</span>
                    </div>

                    <span class="text-xs text-slate-400">
                        {{ $folder['files'] }} files
                    </span>
                </div>

                <h3 class="font-semibold text-slate-800">
                    {{ $folder['name'] }}
                </h3>

                <p class="text-sm text-slate-500 mt-1">
                    {{ $folder['size'] }}
                </p>

            </div>
        @endforeach

    </div>

</div>