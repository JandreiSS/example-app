@props(['name', 'type' => 'text'])
<div class="mb-6">
  <x-form.label name="{{ $name }}" />
  <input  class="border border-gray-300 p-2 w-full rounded-xl" 
          type="{{ $type }}" 
          name="{{ $name }}" 
          id="{{ $name }}" 
          {{ $attributes(['value' => old($name)]) }}
  >
  <x-form.error name="{{ $name }}" />
</div>