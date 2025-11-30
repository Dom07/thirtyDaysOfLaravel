@props(['active' => false])

<a {{ $attributes }} class="{{ $active ? 'text-xl text-sm/6 font-semibold text-white' : 'text-sm/6 font-semibold text-white' }}">
    {{$slot}}
</a>