@php
    $colors = ['Sarı' => 'rgb(255, 249, 149)','Kırmızı' => '#f87171'];
@endphp
<div
    x-data="{}"
    class="relative"
>
    <a href="javascript:;" @click="$refs.panel.toggle">
        Colors
    </a>
    <div
        x-ref="panel"
        x-float.placement.bottom-start.flip
        x-cloak
        class="absolute z-30 overflow-y-scroll text-white bg-gray-800 rounded-md shadow-md max-h-48 top-full"
    >
        <ul class="text-sm divide-y divide-gray-700 min-w-[144px]">
            @foreach($colors as $index => $color)
                <li>
                    <button type="button"
                            x-on:click="editor().chain().focus().setColor('{{ $color }}').run(); $refs.panel.close();"
                            class="block w-full px-3 py-2 text-left whitespace-nowrap hover:bg-primary-500 focus:bg-primary-500">
                        {{ $index }}
                    </button>
                </li>
{{--                <x-filament-tiptap-editor::dropdown-button-item--}}
{{--                    action="editor().chain().focus().setColor($event.target.value).run()"--}}
{{--                >--}}
{{--                    {{ $index }}--}}
{{--                </x-filament-tiptap-editor::dropdown-button-item>--}}
            @endforeach
        </ul>
    </div>
</div>
