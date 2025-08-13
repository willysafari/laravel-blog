


    {{-- <img src="{{asset('storage/'. $post->thumbnail)}}" alt="" class="rounded-xl"> --}}
    <img src="{{ Storage::url($post->thumbnail) }}" alt="" class="rounded-xl">


{{-- <x-layout>


    <body style="font-family: Open Sans, sans-serif">

        <section class="px-6 py-8 >


        <main class="max-w-6xl mx-auto mt-10 lg:mt-20 space-y-6 bg-amber-300">
            <article class="max-w-4xl mx-auto lg:grid lg:grid-cols-12 gap-x-10">
                <div class="col-span-4 lg:text-center lg:pt-14 mb-10">

            <img src="{{asset('storage/'. $post->thumbnail)}}" alt="" class="rounded-xl">

                    <p class="mt-4 block text-gray-400 text-xs">
                        Published <time>{{ $post->created_at->diffForHumans() }}</time>
                    </p>

                    <div class="flex items-center lg:justify-center text-sm mt-4">
                        <img src="/images/lary-avatar.svg" alt="Lary avatar">
                        <div class="ml-3 text-left">
                            <h5 class="font-bold">{{ $post->author->name }}</h5>
                            <h6>Mascot at Laracasts</h6>
                        </div>
                    </div>
                </div>

                <div class="col-span-8">
                    <div class="hidden lg:flex justify-between mb-6">
                        <a href="/"
                            class="transition-colors duration-300 relative inline-flex items-center text-lg hover:text-blue-500">
                            <svg width="22" height="22" viewBox="0 0 22 22" class="mr-2">
                                <g fill="none" fill-rule="evenodd">
                                    <path stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84V1z">
                                    </path>
                                    <path class="fill-current"
                                        d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z">
                                    </path>
                                </g>
                            </svg>

                            Back to Posts
                        </a>

                        <div class="space-x-2">

                            <x-category-button :category="$post->category" />

                        </div>


                    </div>

                    <h1 class="font-bold text-3xl lg:text-4xl mb-10">
                        {{ $post->title }}
                    </h1>

                    <div class="space-y-4 lg:text-lg leading-loose">
                        {!! $post->body !!}

                    </div>
                </div>

                {{-- input comments sections with avatar textarea --}}
                {{-- @auth
                <section class="col-span-8 col-start-5 space-y-6 mt-10">
                    <form method="POST" action="/post/{{ $post->slug }}/comments">
                        @csrf
                        <header class="flex items-center space-x-4">
                            <img src="https://i.pravatar.cc/60?u={{ auth()->id() }}" alt="User avatar"
                                class="rounded-full h-12 w-12 object-cover border border-gray-200">
                            <h2 class="text-lg">Leave a comment</h2>
                        </header>

                        <div class="mt-6">
                            <textarea name="body" rows="5" placeholder="Write your comment here..."
                                class="w-full border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring focus:ring-blue-500"></textarea>
                        </div>

                        <div class="flex justify-end mt-4">
                            <button type="submit"
                                class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition-colors">Post
                                Comment
                            </button>
                        </div>
                    </form>
                </section>
                @else
                <section class="col-span-8 col-start-5 space-y-6 mt-10">
                    <p class="text-gray-500">Please <a href="/register" class="text-blue-500 hover:underline">create account</a> or <a href="/login" class="text-blue-500 hover:underline">Login</a> to leave comments</p>
                </section>

                @endauth
                {{-- sections of comments --}}

                {{-- <section class="col-span-8 col-start-5 space-y-6 mt-10">
                    @if ($post->comments)
                        @foreach ($post->comments as $comment)
                            <x-post-comments :comment="$comment" />
                        @endforeach
                    @else
                        <p class="text-gray-500">No comments yet.</p>
                    @endif
                </section>
            </article>
        </main>
</x-layout> --}}
