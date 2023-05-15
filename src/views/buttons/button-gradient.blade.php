@php
    /*
    |--------------------------------------------------------------------------
    |@name          : <x-button:gradient>
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
    |   -> colorDirection    : background color direction `tailwindcss`
    |   -> from     : from bg color `tailwindcss`
    |   -> to       : to bg color `tailwindcss`
    |   -> rounded  : rounded sizing `tailwindcss`
    |
    |--------------------------------------------------------------------------
    |@example ✨
    |   <x-button:gradient 
    |       type="button"
    |       size="text-sm"
    |       color="text-white"
    |       colorDirection="bg-gradient-to-tr"
    |       from="from-primary"
    |       to="to-secondary"
    |       rounded="rounded-full">
    |       Button
    |   </x-button:gradient>
    |
    */
@endphp

@props([
    'type'      => 'button',
    'size'      => 'text-sm',
    'color'     => 'text-white',
    'from'      => 'from-primary',
    'to'        => 'to-secondary',
    'rounded'   => 'rounded',
    'colorDirection'   => 'bg-gradient-to-tr',
])

<button
    type="{{ $type }}"
    class="{{ $size }} px-3 py-1 {{ $color }} {{ $rounded }} {{ $colorDirection }} {{ $from }} {{ $to }}">
    {{ $slot }}
</button>