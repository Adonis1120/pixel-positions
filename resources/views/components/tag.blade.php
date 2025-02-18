@props(['size' => 'base'])  <!-- make 'base' to be the default 'size' -->

@php
    $classes = 'bg-white/10 hover:bg-white/25 px-3 py-1 rounded-xl text-2xs font-bold transition-colors duration-300';

    if ($size == 'base') {
        $classes .= ' px-5 py-1 text-sm';   // note that add space at the beginning not to merge with the other classes as one with no space
    }

    if ($size == 'small') {
        $classes .= ' px-3 py-1 text-2xs';
    }
@endphp

<a href="#" class="{{ $classes }}">{{ $slot }}</a>