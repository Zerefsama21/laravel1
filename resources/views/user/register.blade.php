<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Students</title>
    @vite('resources/css/app.css')
    <script src="//unpkg.com/alpinejs" defer></script>
    <link rel="stylesheet" type="text/css" href="/css/login.css">
</head>
<body>
<div class="body2">
<x-messages /> 

{{-- <header class="max-w-lg mx-auto">
    <a href="#">
        <h1 class="text-orange-500 font-bold text-center">Student Register</h1>
    </a>
</header> --}}
<div class="kulungan1"> 
    <main class="bg-white max-w-lg mx-auto p-8 my-10 rounded-lg shadow-2x1">
        <section>
            <h3 class="text-2xl font-bold">Register</h3>
            <p class="text-gray-600 pt-2">Sign in to your account <a href="/login" class="text-purple-300 font-bold">here </a> </p>
        </section>
        <section class="mt-10">

            <form action="/store" method="POST" class="flex flex-col">
                @csrf <!-- {{ csrf_field() }} -->
                <div class="mb-6 pt-3 rounded bg-gray-200">
                    <label for="name" class="block text-gray-700 
                    text-sm font-bold mb-2 ml-3">Name</label>
                    <input type="text" name= "name" class="bg-gray-200 rounded w-full text-gray-700 
                    focus:outline-none w-full border-b-4 border-gray-400 px-3" value={{old('name')}}>
                    @error('name')
                    <p class="text-red-500 text-xs mt-2 p-1">
                        {{$message}}
                    </p>
                    @enderror
                </div>

                <div class="mb-6 pt-3 rounded bg-gray-200">
                    <label for="name" class="block text-gray-700 
                    text-sm font-bold mb-2 ml-3">Email</label>
                    <input type="email" name= "email" class="bg-gray-200 rounded w-full text-gray-700 
                    focus:outline-none w-full border-b-4 border-gray-400 px-3" value={{old('email')}}>
                    @error('email')
                    <p class="text-red-500 text-xs mt-2 p-1">
                        {{$message}}
                    </p>
                    @enderror
                </div>

                <div class="mb-6 pt-3 rounded bg-gray-200">
                    <label for="password" class="block text-gray-700 
                    text-sm font-bold mb-2 ml-3">Password</label>
                    <input type="password" name= "password" class="bg-gray-200 rounded w-full text-gray-700 
                    focus:outline-none w-full border-b-4 border-gray-400 px-3">
                    @error('password')
                    <p class="text-red-500 text-xs mt-2 p-1">
                        {{$message}}
                    </p>
                    @enderror
                </div>

                <div class="mb-6 pt-3 rounded bg-gray-200">
                    <label for="password_confirmation" class="block text-gray-700 
                    text-sm font-bold mb-2 ml-3"> Confirm Password</label>
                    <input type="password" name= "password_confirmation" class="bg-gray-200 rounded w-full text-gray-700 
                    focus:outline-none w-full border-b-4 border-gray-400 px-3">
                    @error('password_confirmation')
                    <p class="text-red-500 text-xs mt-2 p-1">
                        {{$message}}
                    </p>
                    @enderror
                </div>

                <button class="bg-lime-700 hover:bg-lime-800 text-white font-bold py-2 rounded shadow-lg hover:shadow-x1
                transition duration-200" type="submit">Register</button>
            </form>
        </section>
    </main>
    <div> 
    @include('partials.footer')
</div>
</body>