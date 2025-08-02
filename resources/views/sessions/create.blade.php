<x-layout>
    <section class="px-6 py-6">
        <main class="max-w-4xl mx-auto bg-grey-200 border border-gray-200 p-6 rounded-lg">
            {{-- display success message --}}
            <h1 class="text-center font-bold mb-6">Login Page</h1>
            {{-- create registration form --}}
            <form method="POST" action="/login">
                {{-- CSRF token for security --}}
                @csrf
              
                {{-- username --}}
               

                <div class="mb-6">
                    <label for="email" class="block mb-2 uppercase font-bold text-xs text-gray-700">Email</label>

                    <input type="email" name="email" id="email" placeholder="Your Email example @example.com"
                        value="{{ old('email') }}" required class="border border-gray-400 p-2 w-full">
                    @error('email')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="password"
                        class="block mb-2 upper
                    case font-bold text-xs text-gray-700">Password</label>
                    <input type="password" placeholder="Your Password" name="password" id="password" required
                        class="border border-gray-400 p-2 w-full">

                    @error('password')
                        <p class="text-red-500 text-xs mt-2">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div>
                    <button type="submit"
                        class="bg-blue-500 text-white rounded py-2 px-4 hover:bg-blue-600">login</button>
                </div>
                @if($errors->any())
                    <ul>
                    @foreach ($errors->all() as $error)
                        <li class="text-red-500 text-xs">{{ $error }}</li>
                    @endforeach
                </ul>
                
                @endif
                
            </form>
        </main>
    </section>
</x-layout>
