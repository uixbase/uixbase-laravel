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
    $rounded    = null;
    $widthHeight    = "h-10 w-10";
    $background = "bg-gray-100";
    $textColors = "text-gray-900";
    $ring   = "";
    $ringColor      = "";
    $link   = "#";
@endphp

<div class="flex {{ $spaceX }} items-center">
    @if ($avatars != [])
        @foreach ($avatars as $key => $avatar)

            @php
                switch ($avatar['type']) {
                    case 'squared':
                        $rounded = "rounded-xl";
                        break;
                    case 'circle':
                        $rounded = "rounded-full";
                        break;
                }
                $avatar['size'] == "" ? $widthHeight : $avatar['size'];
                $avatar['color'] == "" ? $background : $avatar['color'];
                $avatar['textColor'] == "" ? $textColors : $avatar['textColor'];
                $avatar['bordered'] == "" ? $ring : $avatar['bordered'];
                $avatar['borderColor'] == "" ? $ringColor : $avatar['borderColor'];
                $avatar['src'] == "" ? $link : $avatar['src'];
            @endphp

            <div {{ 
                    $attributes->merge([
                        'class' => 'overflow-hidden m-1.5 '.$rounded.' '.$avatar['size'].' '.$avatar['color'].' '.$avatar['textColor'].' '.$avatar['bordered'].' '.$avatar['borderColor']
                    ]) 
                }}>
                @if ($avatar['src'] != "")
                    <img {{ $attributes->merge([
                        'class' => 'object-cover '.$avatar['size'],
                        'src' => $avatar['src'],
                        'alt' => $avatar['text'].' profile avartar',
                    ]) }}/>
                @else
                    <h1 {{ $attributes->merge([
                            'class' => 'flex pb-1 items-center text-sm font-medium justify-center '.$avatar['size'].' '.$avatar['color'].' '.$avatar['textColor'],
                            'title' => $avatar['text'].' profile avartar',
                        ]) 
                    }}> 
                        {{ substr($avatar['text'], 0, 3) }} 
                    </h1>
                @endif
            </div>
            @if ($key == $lim) @break @endif
        @endforeach


        @php
            switch ($avatars[0]['type']) {
                case 'squared':
                    $rounded = "rounded-xl";
                    break;
                case 'circle':
                    $rounded = "rounded-full";
                    break;
            }

            $avatars[0]['size'] == "" ? $widthHeight : $avatars[0]['size'];
            $avatars[0]['color'] == "" ? $background : $avatars[0]['color'];
            $avatars[0]['textColor'] == "" ? $textColors : $avatars[0]['textColor'];
            $avatars[0]['bordered'] == "" ? $ring : $avatars[0]['bordered'];
            $avatars[0]['borderColor'] == "" ? $ringColor : $avatars[0]['borderColor'];
            $avatars[0]['src'] == "" ? $link : $avatars[0]['src'];
        @endphp
        
        @if (count($avatars) > $lim)
            <div 
                {{ 
                    $attributes->merge([
                        'class' => 'overflow-hidden m-1.5 '.$rounded.' '.$avatars[0]['size'].' '.$avatars[0]['color'].' '.$avatars[0]['textColor'].' '.$avatars[0]['bordered'].' '.$avatars[0]['borderColor']
                    ]) 
                }}>
                <h1 {{ $attributes->merge([
                        'class' => 'flex pb-1 items-center text-sm font-medium justify-center '.$avatars[0]['size'].' '.$avatars[0]['color'].' '.$avatars[0]['textColor'],
                        'title' => $avatars[0]['text'].' profile avartar',
                    ]) 
                }}> 
                    {{ substr(count($avatars)-$lim, 0, 3) }}+
                </h1>
            </div>
        @endif
    @endif
</div>