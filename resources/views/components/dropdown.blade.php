 @props(['trigger'])
 
 <div x-data="{ show: false }">


    {{-- trigger --}}
    {{ $trigger }}

     {{-- links  --}}

     <div x-show="show" class="py-2 absolute bg-gray-100 w-full mt-2 rounded-xl z-50 max-h-52 overflow-y-auto"
         x-transition:enter="transition ease-out duration-100"
         x-transition:enter-start="opacity-0 translate-y-1"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-75"
         x-transition:leave-start="opacity-100 translate-y-0"
         x-transition:leave-end="opacity-0 translate-y-1"
      style="display: none"
         @click.away="show = false" @keydown.escape.window="show = false">

        {{$slot}}

    

     </div>

 </div>
