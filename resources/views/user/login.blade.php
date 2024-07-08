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
<div class="body1">
<x-messages /> 
{{-- <header class="max-w-lg mx-auto">
    <a href="#">
        <h1 class="text-orange-500 font-bold text-center">Student Register</h1>
    </a>
</header> --}}
    <div class="kulungan"> 
        <main class="bg-white max-w-lg mx-auto p-8 my-10 rounded-lg shadow-2x1">
            <section>
                <h3 class="text-2xl font-bold">Who are you</h3>
            </section>
            <section class="mt-10">
                <form action="/login/process" method="POST" class="flex flex-col">
                    @csrf <!-- {{ csrf_field() }} -->
                    @error('email')
                    <p class="text-red-500 text-xs mt-2 p-1">
                        {{$message}}
                    </p>
                    @enderror
                    <div class="mb-6 pt-3 rounded bg-gray-200">
                        <label for="email" class="block text-gray-700 
                        text-sm font-bold mb-2 ml-3">Email</label>
                        <input type="email" name="email" class="bg-gray-200 rounded w-full text-gray-700 
                        focus:outline-none w-full border-b-4 border-gray-400 px-3" autocomplete="off">
                    </div>

                    <div class="mb-6 pt-3 rounded bg-gray-200">
                        <label for="email" class="block text-gray-700 
                        text-sm font-bold mb-2 ml-3">Password</label>
                        <input type="password" name="password" class="bg-gray-200 rounded w-full text-gray-700 
                        focus:outline-none w-full border-b-4 border-gray-400 px-3">
                    </div>
                    <button class="bg-purple-600 hover:bg-purple-700 text-white font-bold py-2 rounded shadow-lg hover:shadow-x1
                    transition duration-200" type="submit">Login</button>
                </form>
            </section>
            <section>
                <p class="text-gray-600 pt-2">Sign up to your account <a href="/register" class="font-bold hover:text-yellow-600"> here </a> </p>
                <p class="text-gray-600 pt-2">Forgot Password <a href="/register" class="font-bold hover:text-yellow-600"> here </a> </p>
            </section>
        </main>
    <div> 

@include('partials.footer')
        </div>
    </body>
</html>