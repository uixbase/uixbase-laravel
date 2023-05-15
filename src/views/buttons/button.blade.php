@php
    /*
    |--------------------------------------------------------------------------
    |@name          : <x-button>
    |@description   : Customizable Button
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
    |   -> type     : html types
    |   -> size     : text sizing `tailwindcss`
    |   -> color    : text color `tailwindcss`
    |   -> bg       : bg color `tailwindcss`
    |   -> rounded  : rounded sizing `tailwindcss`
    |   -> spacex   : px-n `tailwindcss`
    |
    |--------------------------------------------------------------------------
    |@example ✨
    |   <x-button 
    |       type="button"
    |       size="text-sm"
    |       color="text-white"
    |       from="from-primar"
    |       to="to-secondary"
    |       rounded="rounded-ful">
    |       Button
    |   </x-button>
    |
    */
@endphp

@props([
    'type'      => 'button',
    'size'      => 'text-sm',
    'color'     => 'text-white',
    'bg'        => 'bg-primary',
    'rounded'   => 'rounded',
    'spacex'    => 'px-3'
])

<button
    type="{{ $type }}"
    class="{{ $size }} {{ $spacex }} py-1 {{ $color }} {{ $rounded }} {{ $bg }}">
    {{ $slot }}
</button>