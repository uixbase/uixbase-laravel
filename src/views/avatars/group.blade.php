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
    'rounded'   => 'squared',
    'bordered'  => 'ring',
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
            @php

                $rounded = null;
                switch ($avatar['type']) {
                    case 'squared':
                        $rounded = "rounded-xl";
                        break;

                    case 'circle':
                        $rounded = "rounded-full";
                        break;
                }

                $textColors = null;
                if ($avatar['textColor'] == "") {
                    $textColors = "text-gray-900";
                }

                $borderColors = null;
                if ($avatar['borderColor'] == "") {
                    $borderColors = "text-gray-900";
                }

            @endphp

            <div {{ 
                    $attributes->merge([
                        'class' => 'overflow-hidden '.$rounded.' '.$avatar['size'].' '.$avatar['color'].' '.$textColors.' '.$borderColors.' '.$bordered
                    ]) 
                }}>

                @isset($avatar['src'])
                    <img {{ 
                            $attributes->merge([
                                "class" => $avatar['size'].' object-cover'
                            ]) 
                        }}
                        src="{{ $avatar['src'] }}" 
                        alt="{{ $avatar['text'] }} profile avartar">
                @else
                    <h1 {{ 
                            $attributes->merge([
                                "class" => 'flex pb-1 items-center text-sm font-medium justify-center  '.$avatar['color'].$textColors
                            ]) 
                        }}
                        title="{{ $avatar['text'] }}"> {{ substr($avatar['text'], 0, 3) }} 
                    </h1>
                @endisset
            </div>
        @endforeach

        {{-- @if (count($avatars['avatars']) > $lim)
            <x-avatar 
                type="{{ $avatars[0]['type'] }}"
                text="{{ count($avatars)-$lim }}+"
                size="{{ $avatars[0]['size'] }}"
                color="{{ $avatars[0]['color'] }}"
                textColor="{{ $avatars[0]['textColor'] }}"
                bordered="{{ $avatars[0]['bordered'] }}"
                borderColor="{{ $avatars[0]['borderColor'] }}">
            </x-avatar>
        @endif --}}
    @endif
</div>