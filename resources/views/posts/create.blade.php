<x-layout>
  <section class="px-6 py-8">
    <x-panel class="max-w-lg mx-auto">
      <form action="/admin/posts" method="post">
        @csrf
  
        <!-- Title -->
        <div class="mb-0">
          <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="title">
            Title
          </label>
          <input  class="border border-gray-400 p-2 w-full mb-6" 
                  type="text" 
                  name="title" 
                  id="title" 
                  value="{{ old('title') }}"
                  required
          >
          @error('title')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
          @enderror
        </div>

        <!-- Slug -->
        <div class="mb-0">
          <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="slug">
            Slug
          </label>
          <input  class="border border-gray-400 p-2 w-full mb-6" 
                  type="text" 
                  name="slug" 
                  id="slug" 
                  value="{{ old('slug') }}"
                  required
          >
          @error('slug')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
          @enderror
        </div>

          <!-- Excerpt -->
        <div class="mb-0">
          <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="excerpt">
            Excerpt
          </label>
          <textarea class="border border-gray-400 p-2 w-full mb-6" 
                    name="excerpt" 
                    id="excerpt" 
                    required
          >{{ old('excerpt') }}</textarea>
          @error('excerpt')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
          @enderror
        </div>

          <!-- Body -->
        <div class="mb-0">
          <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="body">
            Body
          </label>
          <textarea class="border border-gray-400 p-2 w-full mb-6"
                    name="body"
                    id="body"
                    rows="5"
                    required
          >{{ old('body') }}</textarea>
          @error('body')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
          @enderror
        </div>

          <!-- Category -->
        <div class="mb-0">
          <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="category_id">
            Category
          </label>

          <select name="category_id" id="category_id">
            @foreach (\App\Models\Category::all() as $category)
              <option 
                value="{{ $category->id }}" 
                {{ old('category_id') == $category->id ? 'selected' : '' }}
              >{{ ucwords($category->name) }}</option>
            @endforeach
          </select>

          @error('category_id')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
          @enderror
        </div>

        <x-submit-button class="mt-6">Publish</x-submit-button>
      </form>
    </x-panel>
  </section>
</x-layout>