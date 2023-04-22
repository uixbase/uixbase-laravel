@php
    /*
    |--------------------------------------------------------------------------
    |@name          : <x-avatar>
    |@description   : Customizable Avatar
    |@sources       : https://github.com/uixbase/uixbase-laravel
    |@version       : 1.0.0
    |
    |--------------------------------------------------------------------------
    |@auth 🛠
    |   -> name     : Leat Sophat :(https://github.com/pphatDev)
    |   -> role     : Developer
    |   -> email    : info.sophat@gmail.com
    |
    |--------------------------------------------------------------------------
    |@param  ✨
    |   -> type     : squared, circle
    |   -> text     : image alt, image title
    |   -> src      : image source
    |   -> size     : image size, supported all `TailwindCss` class name [h-n, w-n]: ex {h-10, w-10, etc...}
    |   -> color    : background color for TailwindCss class name: { bg-red-500etc... }
    |   -> textColor: text color for TailwindCss class name: { text-red-500, etc... }
    |   -> borderColor: border color for TailwindCss class name: { ring-red-500 etc... }
    |   -> bordered : for TailwindCss class name: { ring, ring-2, etc... }
    |
    |--------------------------------------------------------------------------
    |@example ✨
    |   <x-avatar 
    |       type="circle"
    |       text="Leat Sophat"
    |       src="https://avatars.githubusercontent.com/u/65520537?v=4"
    |       size="h-14 w-14"
    |       color="bg-slate-500 text-white"
    |       >
    |   </x-avatar>
    |
    */
@endphp

@props([
    'type'          => 'squared',
    'text'          => 'sfsf',
    'src'           => '',
    'size'          => 'h-10 w-10',
    'color'         => 'bg-gray-300',
    'textColor'     => 'text-gray-900',
    'borderColor'   => 'ring-gray-900',
    'bordered'      => 'ring',
])

@php
    $rounded = null;
    switch ($type) {
        case 'squared':
            $rounded = "rounded-xl";
            break;

        case 'circle':
            $rounded = "rounded-full";
            break;
    }
    $sizing = null;
    if ($size == "") {
        $sizing = 'h-10 w-10';
    }

    $colors = null;
    if ($color == "") {
        $colors = "bg-gray-300";
    }

    $textColors = null;
    if ($textColor == "") {
        $textColors = "text-gray-900";
    }

    $borderColors = null;
    if ($borderColor == "") {
        $borderColors = "text-gray-900";
    }
@endphp


<div 
    class="overflow-hidden  {{ $rounded }}  {{ $size }}  {{ $sizing }}  {{ $bordered }} {{ $borderColors }} {{ $borderColor }} m-1.5">
    @if (!$src == "")
        <img 
            class="{{ $size }} {{ $sizing }} object-cover" 
            src="{{ $src }}"
            alt="{{ $text }} profile avartar">
    @else
        <h1 
            class="flex pb-1 items-center text-sm font-medium justify-center  {{ $size }}  {{ $sizing }}  {{ $color }}  {{ $colors }}  {{ $textColor }}  {{ $textColors }}"
            title="{{ $text }}"> 
                {{ substr($text, 0, 3) }} 
        </h1>
    @endif
</div>