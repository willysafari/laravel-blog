<x-layout>
    <section class="px-6 py-6">
        <main class="max-w-4xl mx-auto">
            <h1 class="text-center font-bold mb-6">Register</h1>
            {{-- create registration form --}}
            <form method="POST" action="/register">
                {{-- CSRF token for security --}}
                @csrf
                <div class="mb-6">
                    <label for="name" class="block mb-2 uppercase font-bold text-xs text-gray-700">Name</label>
                    <input type="text" name="name" id="name" placeholder="Your Name" {{-- old() function retrieves the old input value --}}
                        {{-- value attribute is set to old('name') to retain the input after validation failure --}} value="{{ old('name') }}" {{-- old() function retrieves the old input value --}} {{-- required attribute ensures the field is not empty --}}
                        required class="border border-gray-400 p-2 w-full">
                    {{-- impleemnet error --}}
                    @error('name')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>
                {{-- username --}}
                <div class="mb-6">
                    <label for="username" class="block mb-2 uppercase font-bold text-xs text-gray-700">Username</label>
                    <input type="text" name="username" id="username" placeholder="Your Username"
                        value="{{ old('username') }}" required class="border border-gray-400 p-2 w-full">
                    @error('username')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

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
                        class="bg-blue-500 text-white rounded py-2 px-4 hover:bg-blue-600">Register</button>
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
