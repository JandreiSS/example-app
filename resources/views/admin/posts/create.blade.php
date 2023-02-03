<x-layout>
  <x-setting heading="Publish New Post">
    <form action="/admin/posts" method="post" enctype="multipart/form-data">
      @csrf

      <!-- Title -->
      <x-form.input name="title" />

      <!-- Slug -->
      <x-form.input name="slug" />

      <!-- Thumbnail -->
      <x-form.input name="thumbnail" type="file" />

      <!-- Excerpt -->
      <x-form.textarea name="excerpt"/>

      <!-- Body -->
      <x-form.textarea name="body" rows=4 />

      <!-- Category -->
      <div class="mb-0">
        <x-form.label name="category" />

        <select name="category_id" id="category_id">
          @foreach (\App\Models\Category::all() as $category)
            <option 
            value="{{ $category->id }}" 
            {{ old('category_id') == $category->id ? 'selected' : '' }}
            >{{ ucwords($category->name) }}</option>
          @endforeach
        </select>
        <x-form.error name="category" />
      </div>
      <div class="mt-4">
        <x-form.submit-button>Publish</x-form.submit-button>
      </div>
    </form>
  </x-setting>
</x-layout>