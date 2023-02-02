@props(['name'])
@error($name)
  <p class="text-red-500 text-xs mb-4">{{ $message }}</p>
@enderror