@php
    $items = ['name' => 'Adı','sur_name' => 'Soyadı','full_name' => 'Tam Adı','email' => 'E-Posta Adresi'];
@endphp
<div
    x-data="{}"
    class="relative"
>
    <a href="javascript:;" @click="$refs.panel.toggle">
        User Modeli
    </a>
    <div
        x-ref="panel"
        x-float.placement.bottom-start.flip
        x-cloak
        class="absolute z-30 overflow-y-scroll text-white bg-gray-800 rounded-md shadow-md max-h-48 top-full"
    >
        <ul class="text-sm divide-y divide-gray-700 min-w-[144px]">

            @foreach($items as $index => $item)
                <x-filament-tiptap-editor::dropdown-button-item action="editor().chain().focus().insertContent('{user::{{$index}}}').run()">
                    {{ $item }}
                </x-filament-tiptap-editor::dropdown-button-item>
            @endforeach
        </ul>
    </div>
</div>
