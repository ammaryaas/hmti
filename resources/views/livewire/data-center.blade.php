<div class="bg-[#f8f9fa] p-8 md:p-12 shadow-xl rounded-none w-full max-w-5xl mx-auto">
    <h2 class="text-3xl md:text-4xl font-bold italic text-black mb-8 font-serif" style="font-family: 'Times New Roman', Times, serif;">
        DATA CENTER
    </h2>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        @forelse ($dataCenters as $item)
            @php
                $iconName = $item->icon;
                $isHex = str_starts_with($item->color ?? '', '#');
            @endphp
            <a href="{{ route('data-center.visit', $item->id) }}"
               target="_blank"
               class="group bg-white rounded-lg p-6 flex flex-col items-center justify-center min-h-[250px] shadow-[0_4px_10px_rgba(0,0,0,0.1)] transition-all duration-300 hover:-translate-y-1 hover:shadow-xl relative overflow-hidden text-center">
                
                <div class="w-20 h-20 mb-5 transition-transform duration-300 group-hover:scale-110 flex items-center justify-center"
                     style="{{ $isHex ? 'color: ' . $item->color : '' }}">
                    @if (str_contains($iconName, 'document-duplicate'))
                        <x-heroicon-o-document-duplicate class="w-full h-full" />
                    @elseif (str_contains($iconName, 'calendar'))
                        <x-heroicon-o-calendar class="w-full h-full" />
                    @elseif (str_contains($iconName, 'academic-cap'))
                        <x-heroicon-o-academic-cap class="w-full h-full" />
                    @elseif (str_contains($iconName, 'book-open'))
                        <x-heroicon-o-book-open class="w-full h-full" />
                    @elseif (str_contains($iconName, 'folder'))
                        <x-heroicon-o-folder class="w-full h-full" />
                    @elseif (str_contains($iconName, 'link'))
                        <x-heroicon-o-link class="w-full h-full" />
                    @elseif (str_contains($iconName, 'chart-bar'))
                        <x-heroicon-o-chart-bar class="w-full h-full" />
                    @elseif (str_contains($iconName, 'circle-stack'))
                        <x-heroicon-o-circle-stack class="w-full h-full" />
                    @else
                        <x-heroicon-o-document-text class="w-full h-full" />
                    @endif
                </div>

                <h3 class="text-lg font-bold italic text-black text-center leading-snug group-hover:text-[#B53737] transition-colors" style="font-family: 'Times New Roman', Times, serif;">
                    {{ $item->name }}
                </h3>

                @if($item->description)
                    <p class="text-xs text-gray-500 text-center mt-2 line-clamp-2">
                        {{ $item->description }}
                    </p>
                @endif
            </a>
        @empty
            <div class="col-span-full text-center py-16 bg-white rounded-lg border border-dashed border-gray-300">
                <x-heroicon-o-circle-stack class="w-12 h-12 text-gray-400 mx-auto mb-3" />
                <p class="text-base text-gray-500 font-medium">Belum ada data center yang ditambahkan.</p>
            </div>
        @endforelse
    </div>
</div>
