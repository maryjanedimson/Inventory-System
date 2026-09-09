@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1 border-b-2 border-[#a36e2e] text-sm font-medium leading-5 text-[#2b2118] focus:outline-none focus:border-[#895a23] transition duration-150 ease-in-out'
            : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-[#8b8175] hover:text-[#2b2118] hover:border-[#d8c7ac] focus:outline-none focus:text-[#2b2118] focus:border-[#d8c7ac] transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
