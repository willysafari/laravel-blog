<x-layout>
      <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
      {{-- how to add intro from _posts-header.blade.php --}}
        @include('_posts-header')
          @if ($posts->count())
    
            <x-posts-grid :posts="$posts" />
            {{-- write links to paginate --}}
            <div class="mt-8 p-4">
                {{ $posts->links() }}
            </div>
            {{-- Pagination --}} 
          @else
            <p class="text-center">No posts yet. Please check back later.</p>
  
          @endif
        </main>
  </x-layout>





