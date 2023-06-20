@php
    $items = ['name' => 'Adı','code' => 'Kodu', 'artist_price' => 'Sanatçı Ücreti','project_price' => 'Proje Ücreti'];
@endphp
<div
    x-data="{}"
    class="relative"
>
    <a href="javascript:;" @click="$refs.panel.toggle">
        Proje Modeli
    </a>
    <div
        x-ref="panel"
        x-float.placement.bottom-start.flip
        x-cloak
        class="absolute z-30 overflow-y-scroll text-white bg-gray-800 rounded-md shadow-md max-h-48 top-full"
    >
        <ul class="text-sm divide-y divide-gray-700 min-w-[144px]">

            @foreach($items as $index => $item)
                <x-filament-tiptap-editor::dropdown-button-item action="editor().chain().focus().insertContent('{project::{{$index}}}').run()">
                    {{ $item }}
                </x-filament-tiptap-editor::dropdown-button-item>
            @endforeach
        </ul>
    </div>
</div>
