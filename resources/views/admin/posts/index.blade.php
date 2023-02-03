<x-layout>
  <x-setting heading="Manage Posts">
    <div class="overflow-hidden rounded-lg border border-gray-200 shadow-md m-5">
      @if ($posts->count())
        <table class="min-w-full divide-y divide-gray-300">
          <tbody class="bg-white divide-y divide-gray-300">
            <tr>
              <!-- <th class="px-6 py-4 text-md text-gray-900">Título</th>
              <th>Status</th>
              <th>Criado</th>
              <th></th>
            </tr> -->

            @foreach ($posts as $post)
              <tr>
                <td class="px-6 py-4">
                  <div class="flex items-center">
                    <div class="text-sm font-medium text-gray-900">
                      <a href="/posts/{{ $post->slug }}" class="hover:text-blue-600">
                        {{ $post->title }}
                      </a>
                    </div>
                  </div>
                </td>
                <!-- <td class="px-6 py-4 whitespace-nowrap">
                  <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                    Published
                  </span>
                </td> -->
                <td class="px-6 py-4 whitespace-nowrap">
                  <div class="text-sm font-medium text-gray-900">
                    {{ $post->created_at->diffForHumans() }}
                  </div>
                </td>

                <td class="px-6 py-4">
                  <div class="flex justify-end gap-4">
                    <a x-data="{ tooltip: 'Edite' }" href="/admin/posts/{{ $post->id }}/edit">
                      <x-icon name="edit" />
                    </a>
                    <form action="/admin/posts/{{ $post->id }}" method="POST">
                      @csrf
                      @method('DELETE')
                      <button type="submit">
                        <x-icon name="delete" />
                      </button>
                    </form>
                  </div>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>

        <div class="mt-5">
          {{ $posts->links() }}
        </div>
      @else
        <p class="text-center">No posts yet. Please check back later.</p>
      @endif
    </div>
  </x-setting>
</x-layout>