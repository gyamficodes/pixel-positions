@props(['tag','size' => 'base'])

@php
    $classes = "bg-white/10 rounded-xl hover:bg-white/25 transition-colors duration-200 ease";

    switch ($size) {
        case 'base':
            $classes .= ' px-5 text-sm py-1';
            break;
        case 'small':
            $classes .= ' px-3 text-[12px] py-1';
            break;
        default:
            $classes .= ' px-3 text-sm py-1'; // Default class
            break;
    }
@endphp

<a href="/tags/{{ strtolower($tag->name) }}" class="{{ $classes }}">{{ $tag->name }}</a>

