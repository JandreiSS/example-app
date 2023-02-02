@props(['name', 'rows' => 2])
<div class="mb-6">
  <x-form.label name="{{ $name }}" />
  <textarea class="border border-gray-300 p-2 w-full rounded-xl" 
            name="{{ $name }}" 
            id="{{ $name }}"
            rows="{{ $rows }}"
            required
  >{{ old($name) }}</textarea>
  <x-form.error name="{{ $name }}" />
</div>