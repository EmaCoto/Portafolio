@props(['value'])

<label {{ $attributes->merge(['class' => 'text-black ml-1 block font-semibold font-medium text-sm text-left pr-1 text-gray-700']) }}>
    {{ $value ?? $slot }}
</label>


