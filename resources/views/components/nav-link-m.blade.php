@props(['href', 'current' => false])

@php
    $clasess = $current ? 'bg-gray-900 text-white':'text-gray-300 hover:bg-white/5 hover:text-white';
@endphp
{{-- block rounded-md bg-gray-900 px-3 py-2 text-base font-medium text-white --}}
<a href="{{ $href }}" 
{{ $attributes->merge(['class' => 'block rounded-md px-3 py-2 text-base font-medium ' . $clasess]) }}>
{{ $slot }}</a>