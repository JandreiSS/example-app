@props(['name'])
<label class="block uppercase font-bold text-xs text-gray-700 mb-1 ml-2" for="{{ $name }}">
  {{ ucwords($name) }}
</label>