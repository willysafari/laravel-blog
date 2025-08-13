{{-- Create Post Page for Blog --}}
<x-layout>
    <main class="max-w-4xl mx-auto border border-gray-300 p-6 rounded-lg shadow-md mt-6">
        <h1 class="text-2xl font-bold text-gray-800 mb-6">Create New Post</h1>
        
        <form method="POST" action="/admin/posts" class="space-y-6" enctype="multipart/form-data">
            @csrf
              {{-- Thumbnail Upload --}}
            <div>
                <label for="thumbnail" class="block text-sm font-medium text-gray-700 mb-1">Thumbnail Image</label>
                <div class="mt-1 flex items-center">
                    <div class="w-full">
                        <input 
                            type="file" 
                            name="thumbnail" 
                            id="thumbnail" 
                            accept="image/*"
                            class="block w-full text-sm text-gray-500
                                   file:mr-4 file:py-2 file:px-4
                                   file:rounded-md file:border-0
                                   file:text-sm file:font-semibold
                                   file:bg-blue-50 file:text-blue-700
                                   hover:file:bg-blue-100"
                        >
                        <p class="mt-1 text-xs text-gray-500">JPEG, PNG, or GIF (Max 2MB)</p>
                    </div>
                </div>
                @error('thumbnail')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

        
            {{-- Title Input --}}
            <div>
                <label for="title" class="block text-sm font-medium text-gray-700 mb-1">Title</label>
                <input 
                    type="text" 
                    name="title" 
                    id="title" 
                    required
                    value="{{ old('title') }}"
                    class="mt-1 block w-full h-10 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 transition duration-150"
                    placeholder="Enter post title"
                >
                @error('title')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            
            {{-- Slug Input --}}
            <div>
                <label for="slug" class="block text-sm font-medium text-gray-700 mb-1">Slug</label>
                <input 
                    type="text" 
                    name="slug" 
                    id="slug" 
                    required
                    value="{{ old('slug') }}"
                    class="mt-1 block w-full h-10 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 transition duration-150"
                    placeholder="Enter URL slug"
                >
                @error('slug')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            
            {{-- Excerpt Input --}}
            <div>
                <label for="excerpt" class="block text-sm font-medium text-gray-700 mb-1">Excerpt</label>
                <textarea 
                    name="excerpt" 
                    id="excerpt" 
                    rows="3" 
                    required
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 transition duration-150"
                    placeholder="Enter a short excerpt"
                >{{ old('excerpt') }}</textarea>
                @error('excerpt')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            
            {{-- Body Input --}}
            <div>
                <label for="body" class="block text-sm font-medium text-gray-700 mb-1">Body Content</label>
                <textarea 
                    name="body" 
                    id="body" 
                    rows="8" 
                    required
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 transition duration-150"
                    placeholder="Write your post content here"
                >{{ old('body') }}</textarea>
                @error('body')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            
            {{-- Category Select --}}
            <div>
                <label for="category_id" class="block text-sm font-medium text-gray-700 mb-1">Category</label>
                <select 
                    name="category_id" 
                    id="category_id" 
                    required
                    class="mt-1 block w-full h-10 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 transition duration-150"
                >
                    <option value="">Select a category</option>
                    @foreach ($categories as $category)
                        <option 
                            value="{{ $category->id }}"
                            {{ old('category_id') == $category->id ? 'selected' : '' }}
                        >
                            {{ ucwords($category->name) }}
                        </option>
                    @endforeach
                </select>
                @error('category_id')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            
            {{-- Submit Button --}}
            <div class="flex justify-end">
                <button 
                    type="submit"
                    class="bg-blue-500 text-white px-6 py-2 rounded-lg hover:bg-blue-600 transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2"
                >
                    Create Post
                </button>
            </div>
        </form>
    </main>
</x-layout>