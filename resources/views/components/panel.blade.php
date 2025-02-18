@php
    $classes = 'p-4 bg-white/5 rounded-xl border border-transparent hover:border-purple-800 group transition-colors duration-1000';
@endphp

<div {{ $attributes(['class' => $classes]) }}>
    {{ $slot }}
</div>

<!--
It could also be in one line; $attributes is also a short for $attributes->merge()
-->