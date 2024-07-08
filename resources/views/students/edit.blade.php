@include ('partials.header')
<header class="max-w-lg mx-auto">
    <a href="#">
        <h1 class="text-orange-500 font-bold text-center">Student Register</h1>
    </a>
</header>
    <main class="bg-white max-w-lg mx-auto p-8 my-10 rounded-lg shadow-2x1">
        <section>
            <h3 class="text-2xl font-bold">Edit now </h3>
        </section>
        <section class="mt-10">
            <form action="/student/{{$student->id}}" method="POST" class="flex flex-col" enctype="multipart/form-data">
                @method('PUT')
                @csrf <!-- {{ csrf_field() }} -->
                <div class="mb-6 pt-3 rounded bg-gray-200">
                    <label for="first_name" class="block text-gray-700 
                    text-sm font-bold mb-2 ml-3">First Name</label>
                    <input type="text" name="first_name" class="bg-gray-200 rounded w-full text-gray-700 
                    focus:outline-none w-full border-b-4 border-gray-400 px-3" autocomplete="off" value={{$student->first_name}} >
                    @error('first_name')
                    <p class="text-red-500 text-xs mt-2 p-1">
                        {{$message}}
                    </p>
                    @enderror
                </div>
                <div class="mb-6 pt-3 rounded bg-gray-200">
                    <label for="last_name" class="block text-gray-700 
                    text-sm font-bold mb-2 ml-3">Last Name</label>
                    <input type="text" name="last_name" class="bg-gray-200 rounded w-full text-gray-700 
                    focus:outline-none w-full border-b-4 border-gray-400 px-3" autocomplete="off" value={{$student->last_name}}>
                    @error('last_name')
                    <p class="text-red-500 text-xs mt-2 p-1">
                        {{$message}}
                    </p>
                    @enderror
                </div>
                <div class="mb-6 pt-3 rounded bg-gray-200">
                    <label for="gender" class="block text-gray-700 
                    text-sm font-bold mb-2 ml-3">Gender</label>
                    <select type="text" name="gender" class="bg-gray-200 rounded w-full text-gray-700 
                    focus:outline-none w-full border-b-4 border-gray-400 px-3" autocomplete="off" >
                    <option value="" {{$student->gender  == "" ? 'selected' : ''}}></option>
                    <option value="Male" {{$student->gender == "Male" ? 'selected' : ''}}>Male</option>
                    <option value="Female" {{$student->gender == "Female" ? 'selected' : ''}}>Female</option>
                    </select>
                    @error('gender')
                    <p class="text-red-500 text-xs mt-2 p-1">
                        {{$message}}
                    </p>
                    @enderror
                </div>
                <div class="mb-6 pt-3 rounded bg-gray-200">
                    <label for="age" class="block text-gray-700 
                    text-sm font-bold mb-2 ml-3">Age</label>
                    <input type="number" name="age" class="bg-gray-200 rounded w-full text-gray-700 
                    focus:outline-none w-full border-b-4 border-gray-400 px-3"value={{$student->age}} >
                    @error('age')
                    <p class="text-red-500 text-xs mt-2 p-1">
                        {{$message}}
                    </p>
                    @enderror
                </div>

                <div class="mb-6 pt-3 rounded bg-gray-200">
                    <label for="email" class="block text-gray-700 
                    text-sm font-bold mb-2 ml-3">Email</label>
                    <input type="email" name="email" class="bg-gray-200 rounded w-full text-gray-700 
                    focus:outline-none w-full border-b-4 border-gray-400 px-3" autocomplete="off" 
                    value={{$student->email}} >
                    @error('email')
                    <p class="text-red-500 text-xs mt-2 p-1">
                        {{$message}}
                    </p>
                    @enderror
                </div>

                <div class="mb-6 pt-3 rounded bg-gray-200">
                    <label for="medicine_image" class="block text-gray-700 
                    text-sm font-bold mb-2 ml-3">Email</label>
                    <input type="file" name="medicine_image" class="bg-gray-200 rounded w-full text-gray-700 
                    focus:outline-none w-full border-b-4 border-gray-400 px-3" autocomplete="off" 
                    value={{$student->medicine_image}} >
                    @error('medicine_image')
                    <p class="text-red-500 text-xs mt-2 p-1">
                        {{$message}}
                    </p>
                    @enderror
                </div>

                <button class="bg-purple-600 hover:bg-purple-700 text-white font-bold py-2 rounded shadow-lg hover:shadow-x1
                transition duration-200" type="submit">update</button>
            </form>

            <form action= "/student/{{$student->id}}" method="POST">
                @method('delete')
                @csrf <!-- {{ csrf_field() }} -->
                <button class="w-full mt-2 bg-red-600 hover:bg-purple-700 text-white font-bold py-2 rounded shadow-lg hover:shadow-x1
                transition duration-200" type="submit">delete</button>
            </form>
        </section>
    </main>
@include('partials.footer')