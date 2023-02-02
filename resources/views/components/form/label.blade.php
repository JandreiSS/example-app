@props(['name'])
<label class="block uppercase font-bold text-xs text-gray-700" for="{{ $name }}">
  {{ ucwords($name) }}
</label>