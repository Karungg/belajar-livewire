@props(['id', 'type' => 'text', 'name', 'placeholder' => ''])

<input type="{{ $type }}" id="{{ $id }}" name="{{ $name }}" placeholder="{{ $placeholder }}"
    {{ $attributes->merge(['class' => 'form-control']) }} {{ $attributes->get('wire') }}>
