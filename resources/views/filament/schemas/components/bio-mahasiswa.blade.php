<div class="flex gap-6 p-2">

    {{-- Foto / Avatar --}}
    <div class="shrink-0">
        @if ($getFoto())
            <img src="{{ $getFoto() }}" alt="Foto Mahasiswa"
                class="w-30 h-40 object-cover
                           ring-4 ring-primary-100 dark:ring-primary-900 shadow" />
        @else
            <div
                class="w-30 h-40
                            bg-primary-100 dark:bg-primary-900
                            ring-4 ring-primary-200 dark:ring-primary-800
                            shadow flex items-center justify-center">
                <span
                    class="text-3xl font-bold
                                 text-primary-600 dark:text-primary-300
                                 select-none">
                    {{ $getInitials() }}
                </span>
            </div>
        @endif
    </div>

    {{-- Biodata --}}
    <div class="grid grid-rows-2 text-sm">
        <div>
            <p class="text-xs text-gray-400 dark:text-gray-500">Nama Lengkap</p>
            <p class="font-medium text-gray-800 dark:text-gray-200">{{ $getNama() }}</p>
        </div>
        <div>
            <p class="text-xs text-gray-400 dark:text-gray-500">Angkatan</p>
            <p class="font-medium text-gray-800 dark:text-gray-200">{{ $getAngkatan() }}</p>
        </div>
    </div>

</div>
