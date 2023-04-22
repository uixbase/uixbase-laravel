@php
    /*
    |--------------------------------------------------------------------------
    |@name          : <x-group:avatar>
    |@description   : Customizable Group Avatar
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
    |   -> avatars  : include data as <x-avatar>
    |   -> limit    : show avatar amount customizable
    |   -> spaceX   : x spacing for Tailwindcss class name { -space-x-2, -space-x-4, etc... }
    |
    |--------------------------------------------------------------------------
    |@example ✨
    |   <x-group:avatar 
    |       :avatars="$data" 
    |       limit="1" 
    |       spaceX="-space-x-6">
    |   </x-group:avatar>
    |
    */
@endphp

@props([
    'avatars'   => [],
    "limit"     => "3",
    "spaceX"    => "-space-x-6",
])

@php
    $lim = 3;
    if ($limit == "") {
        $lim = 3;
    }
@endphp

<div class="flex {{ $spaceX }} items-center">
    @if ($avatars != [])
        @foreach ($avatars as $key => $avatar)
            <x-avatar 
                type="{{ $avatar['type'] }}"
                text="{{ $avatar['text'] }}"
                src="{{ $avatar['src'] }}"
                size="{{ $avatar['size'] }}"
                color="{{ $avatar['color'] }}"
                textColor="{{ $avatar['textColor'] }}"
                border="{{ $avatar['border'] }}"
                borderColor="{{ $avatar['borderColor'] }}">
                @if ($key == $lim) @break @endif
                {{ $key }}
        </x-avatar>
        @endforeach

        @if (count($avatars) > $lim)
            <x-avatar 
                type="{{ $avatars[0]['type'] }}"
                text="{{ count($avatars)-$lim }}+"
                size="{{ $avatars[0]['size'] }}"
                color="{{ $avatars[0]['color'] }}"
                textColor="{{ $avatars[0]['textColor'] }}"
                border="{{ $avatars[0]['border'] }}"
                borderColor="{{ $avatars[0]['borderColor'] }}">
            </x-avatar>
        @endif
    @endif
</div>