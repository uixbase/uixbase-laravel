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
    'text'          => '',
    'src'           => '#',
    'size'          => 'h-10 w-10',
    'color'         => 'bg-gray-100',
    'textColor'     => 'text-gray-700',
    'borderColor'   => '',
    'bordered'      => '',
])

@php
    $rounded    = null;
    switch ($type) {
        case 'squared':
            $rounded = "rounded-xl";
            break;
        case 'circle':
            $rounded = "rounded-full";
            break;
    }

    $widthHeight    = "h-10 w-10";
    $size == "" ? $widthHeight : $size;

    $background = "bg-gray-100";
    $color == "" ? $background : $color;

    $textColors = "text-gray-900";
    $textColor == "" ? $textColors : $textColor;
    
    $ring   = "";
    $bordered == "" ? $ring : $bordered;

    $ringColor      = "";
    $borderColor == "" ? $ringColor : $borderColor;

    $link   = "#";
    $src == "" ? $link : $src;
@endphp

<div 
    {{ 
        $attributes->merge([
            'class' => 'overflow-hidden m-1.5 '.$rounded.' '.$size.' '.$color.' '.$textColor.' '.$bordered.' '.$borderColor
        ]) 
    }}>
    @if ($src != "#")
        <img {{ $attributes->merge([
            'class' => 'object-cover '.$size,
            'src' => $src,
            'alt' => $text.' profile avartar',
        ]) }}/>
    @else
        <h1 {{ $attributes->merge([
                'class' => 'flex pb-1 items-center text-sm font-medium justify-center '.$size.' '.$color.' '.$textColor,
                'title' => $text.' profile avartar',
            ]) 
        }}> 
            {{ substr($text, 0, 3) }} 
        </h1>
    @endif
</div>