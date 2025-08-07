  
<article class="flex bg-white border border-gray-200 rounded-lg p-6 space-x-4 shadow-sm">
    <!-- Avatar image -->
    <div class="flex-shrink-0">
        <img src="https://i.pravatar.cc/60?u={{$comment->author->id}}" alt="User avatar" 
             class="rounded-full h-12 w-12 object-cover border border-gray-200">
    </div>
    
    <!-- Content -->
    <div class="flex-1">
        <header class="mb-3">
            <h3 class="font-semibold text-gray-900">{{$comment->author->username}}</h3>
            <span class="block text-xs text-gray-500 mt-1">{{$comment->created_at->diffForHumans()}}</span>
        </header>
        
        <div class="text-gray-700 space-y-2">
            <p>{{$comment->body}}</p>
        </div>
    </div>
</article>


