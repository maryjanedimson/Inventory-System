@props(['disabled' => false])

<input @disabled($disabled) style="color: #000000 !important; caret-color: #000000;" {{ $attributes->merge(['class' => 'border-gray-300 !text-black placeholder:!text-gray-500 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm']) }}>
