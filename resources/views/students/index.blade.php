@include ('partials.header')
<?php $array = array ('title' => 'Student System'); ?>
@include ('naavbar')

<div class="homesection1">
<div class="navbar navbar-light bg-light flex flex-row " 
     style="padding-top: 20px; padding-left: 20px;" >
     <button class="bg-blue-500 text-white active:bg-pink-600 font-bold uppercase text-sm px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button" onclick="toggleModal('modal-id')">
        Add
      </button>
      <div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center" id="modal-id">
        <div class="relative w-auto my-6 mx-auto max-w-3xl">
          <!--content-->
          <div class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
            <!--header-->
            <div class="flex items-start justify-between p-5 border-b border-solid border-blueGray-200 rounded-t">
              <h3 class="text-3xl font-semibold">
                Add
              </h3>
              <button class="p-1 ml-auto bg-transparent border-0 text-black opacity-5 float-right text-3xl leading-none font-semibold outline-none focus:outline-none" onclick="toggleModal('modal-id')">
                <span class="bg-transparent text-black opacity-5 h-6 w-6 text-2xl block outline-none focus:outline-none">
                  ×
                </span>
              </button>
            </div>
            <!--body-->
            <div class="relative flex-auto"
                style="width: 500px;">
                <form action="/add/student" method="POST" class="flex flex-col w-full" style="border: 2px solid black;">
                    @csrf <!-- {{ csrf_field() }} -->
                    <div class="mb-6 pt-3 rounded  px-5">
                        <label for="first_name" class="block text-gray-700 
                        text-sm font-bold mb-2 ml-3">First Name</label>
                        <input type="text" name="first_name" class="bg-gray-200 rounded w-full text-gray-700 
                        focus:outline-none w-full border-b-4 border-gray-400 px-3" autocomplete="off" value={{old('first_name')}}>
                        @error('first_name')
                        <p class="text-red-500 text-xs mt-2 p-1">
                            {{$message}}
                        </p>
                        @enderror
                    </div>

                    <div class="mb-6 pt-3 rounded  px-5">
                        <label for="last_name" class="block text-gray-700 
                        text-sm font-bold mb-2 ml-3">Last Name</label>
                        <input type="text" name="last_name" class="bg-gray-200 rounded w-full text-gray-700 
                        focus:outline-none w-full border-b-4 border-gray-400 px-3" autocomplete="off" value={{old('last_name')}}>
                        @error('last_name')
                        <p class="text-red-500 text-xs mt-2 p-1">
                            {{$message}}
                        </p>
                        @enderror
                    </div>

                    <div class="mb-6 pt-3 rounded  px-5">
                        <label for="gender" class="block text-gray-700 
                        text-sm font-bold mb-2 ml-3">Gender</label>
                        <select type="text" name="gender" class="bg-gray-200 rounded w-full text-gray-700 
                        focus:outline-none w-full border-b-4 border-gray-400 px-3" autocomplete="off" >
                        <option value="" {{old('gender') == "" ? 'selected' : ''}}></option>
                        <option value="Male" {{old('gender') == "Male" ? 'selected' : ''}}>Male</option>
                        <option value="Female" {{old('gender') == "Female" ? 'selected' : ''}}>Female</option>
                        </select>
                        @error('gender')
                        <p class="text-red-500 text-xs mt-2 p-1">
                            {{$message}}
                        </p>
                        @enderror
                    </div>

                    <div class="mb-6 pt-3 rounded  px-5">
                        <label for="age" class="block text-gray-700 
                        text-sm font-bold mb-2 ml-3">Age</label>
                        <input type="number" name="age" class="bg-gray-200 rounded w-full text-gray-700 
                        focus:outline-none w-full border-b-4 border-gray-400 px-3"value={{old('age')}}>
                        @error('age')
                        <p class="text-red-500 text-xs mt-2 p-1">
                            {{$message}}
                        </p>
                        @enderror
                    </div>

                    <div class="mb-6 pt-3 rounded  px-5">
                        <label for="email" class="block text-gray-700 
                        text-sm font-bold mb-2 ml-3">Email</label>
                        <input type="email" name="email" class="bg-gray-200 rounded w-full text-gray-700 
                        focus:outline-none w-full border-b-4 border-gray-400 px-3" autocomplete="off" value={{old('email')}}>
                        @error('email')
                        <p class="text-red-500 text-xs mt-2 p-1">
                            {{$message}}
                        </p>
                        @enderror
                    </div>

                    <div class="flex items-center justify-end p-6 border-t border-solid border-blueGray-200 rounded-b">
                        <button class="text-red-500 background-transparent font-bold uppercase px-6 py-2 text-sm outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="submit">
                            Add</button>
                        <button class="text-red-500 background-transparent font-bold uppercase px-6 py-2 text-sm outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button" onclick="toggleModal('modal-id')">
                          Cancel
                        </button>
                      </div>
                </form>
            </div>
          </div>
        </div>
      </div>
      <div class="hidden opacity-25 fixed inset-0 z-40 bg-black" id="modal-id-backdrop"></div>
      <script type="text/javascript">
        function toggleModal(modalID){
          document.getElementById(modalID).classList.toggle("hidden");
          document.getElementById(modalID + "-backdrop").classList.toggle("hidden");
          document.getElementById(modalID).classList.toggle("flex");
          document.getElementById(modalID + "-backdrop").classList.toggle("flex");
        }
      </script>

    <form class="form-inline" method="GET" action="{{url('/search')}}">

      <button class= "bg-green-500 text-white active:bg-pink-600 font-bold uppercase text-sm px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
              type="submit"
              {{-- style="background-color: green; --}}
                     color: white;
                     ">Search</button>
      <input class="form-control mr-sm-2" 
             name="query"
             type="search" 
             placeholder="Search" 
             aria-label="Search">
    </form>    
</div>


<div style="border: 2px solid white; height:100px; width:100px; color:aqua;">das</div>
<a href="{{ url('pdf_generator')}}" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800"> Download PDF </a>

<section class="mt-10 pt-10">
    <div class="overflow-x-auto relative ">
        <table class="w-100 mx-auto text-sm text-left text-gray-500 ">
            <thead class="text-xs text-slate-50 uppercase bg-stone-700"
            style="border-bottom: 2px solid white">
            <tr>
                <th scope="col" class="py-3 px-6">
                    First Name
                </th>
                <th scope="col" class="py-3 px-6">
                    Last Name
                </th>
                <th scope="col" class="py-3 px-6">
                  Gender
                </th>
                <th scope="col" class="py-3 px-6">
                    Email
                </th>
                <th scope="col" class="py-3 px-6">
                    Age
                </th>
                <th scope="col" class="py-3 px-8 text-center">
                    Action
                </th>
                {{-- <th scope="col" class="py-3 px-6">
                  Image
                </th> --}}
            </tr>
           </thead>
           <tbody>
            @foreach ($students as $student)
            <tr class="bg-stone-900 text-white"
                style="border-bottom: 2px solid white">
                {{-- @php $default_profile = "https://api.dicebear.com/8.x/pixel-art/svg?seed=John".$student-> first_name."-".$student-> last_name.".svg"   
                @endphp
                
                <td> 
                    <img src = "{{$student -> medicine_image ? asset("storage/student/thumbnail/". $student -> medicine_image) :  $default_profile}}" alt="" srcset="">
                 </td> --}}
                <td class="py-4 px-6 "> {{$student -> first_name }} </td>
                <td class="py-4 px-6"> {{$student -> last_name }} </td>
                <td class="py-4 px-6"> {{$student -> gender }} </td>
                <td class="py-4 px-6"> {{$student -> email }} </td>
                <td class="py-4 px-6"> {{$student -> age }} </td>
                <td class="py-4 px-6 flex flex-row">  
                   <a href="/student/{{$student->id}}"> <button class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" type="button" onclick="toggleModal('modal-id1'), /student/{{$student->id}} ">
                        VIEW
                      </button> </a>
                      <div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center" id="modal-id1">
                        <div class="relative w-auto my-6 mx-auto max-w-3xl">
                          <!--content-->
                          <div class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
                            <!--header-->
                            <div class="flex items-start justify-between p-5 border-b border-solid border-blueGray-200 rounded-t">
                              <h3 class="text-3xl font-semibold">
                                Edit
                              </h3>
                              <button class="p-1 ml-auto bg-transparent border-0 text-black opacity-5 float-right text-3xl leading-none font-semibold outline-none focus:outline-none" onclick="toggleModal('modal-id1')">
                                <span class="bg-transparent text-black opacity-5 h-6 w-6 text-2xl block outline-none focus:outline-none">
                                  ×
                                </span>
                              </button>
                            </div>
                            <!--body-->
                            <div class="relative flex-auto w-full"
                                style="width: 500px;">
                            <form action="/student/{{$student->id}}" method="POST" class="flex flex-col w-full" enctype="multipart/form-data">
                                @method('PUT')
                                @csrf <!-- {{ csrf_field() }} -->
                                <div class="mb-6 pt-3 rounded px-5">
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
                                <div class="mb-6 pt-3 rounded px-5">
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
                                <div class="mb-6 pt-3 rounded px-5">
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
                                <div class="mb-6 pt-3 rounded px-5">
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
                
                                <div class="mb-6 pt-3 rounded px-5">
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
                
                                {{-- <div class="mb-6 pt-3 rounded px-5">
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
                                </div> --}}
                                <div class="flex items-center justify-end p-6 border-t border-solid border-blueGray-200 rounded-b">
                                    <button class="text-red-500 background-transparent font-bold uppercase px-6 py-2 text-sm outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="submit">
                                        update</button>
                                    <button class="text-red-500 background-transparent font-bold uppercase px-6 py-2 text-sm outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button" onclick="toggleModal('modal-id1')">
                                        Cancel
                                    </button>
                                </div>
                            </form>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="hidden opacity-25 fixed inset-0 z-40 bg-black" id="modal-id1-backdrop"></div>
                      <script type="text/javascript">
                        function toggleModal(modalID1){
                          document.getElementById(modalID1).classList.toggle("hidden");
                          document.getElementById(modalID1 + "-backdrop").classList.toggle("hidden");
                          document.getElementById(modalID1).classList.toggle("flex");
                          document.getElementById(modalID1 + "-backdrop").classList.toggle("flex");
                        }
                      </script>
                           <button class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900"
                            type="button" 
                            onclick="toggleModal('modal-id2')">
                            DELETE
                          </button>
                          <div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center" id="modal-id2">
                            <div class="relative w-auto my-6 mx-auto max-w-3xl">
                              <!--content-->
                              <div class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
                                <!--header-->
                                <div class="flex items-start justify-between p-5 border-b border-solid border-blueGray-200 rounded-t bg-green-500">
                                  <h3 class="text-2xl font-semibold text-black">
                                    Are you sure about that?
                                  </h3>
                                  <button class="p-1 ml-auto bg-transparent border-0 text-black opacity-5 float-right text-3xl leading-none font-semibold outline-none focus:outline-none" onclick="toggleModal('modal-id2')">
                                    <span class="bg-transparent text-black opacity-5 h-6 w-6 text-2xl block outline-none focus:outline-none">
                                      ×
                                    </span>
                                  </button>
                                </div>
                                <!--body-->
                                <div style="padding-top:100px; padding-bottom:100px; padding-left:20px; padding-right:20px;"> 
                                    <p class="text-black"
                                        style="font-size: 20px"> The data will be completely delete if you choose yes </p> 
                                </div>
                                        <div class="flex items-center justify-end p-3 border-t border-solid border-blueGray-200 rounded-b">
                                            <form action= "/student/{{$student->id}}" method="POST">
                                                @method('delete')
                                                @csrf <!-- {{ csrf_field() }} -->
                                                <button class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900" type="submit"> YES</button>
                                                <button class="focus:outline-none text-white bg-cyan-500 hover:bg-cyan-700 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900" type="button" onclick="toggleModal('modal-id2')">
                                              No
                                            </button>
                                          </div>
                                    </form>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="hidden opacity-25 fixed inset-0 z-40 bg-black" id="modal-id2-backdrop"></div>
                          <script type="text/javascript">
                            function toggleModal(modalID2){
                              document.getElementById(modalID2).classList.toggle("hidden");
                              document.getElementById(modalID2 + "-backdrop").classList.toggle("hidden");
                              document.getElementById(modalID2).classList.toggle("flex");
                              document.getElementById(modalID2 + "-backdrop").classList.toggle("flex");
                            }
                          </script>
                        {{-- <form action= "/student/{{$student->id}}" method="POST">
                            @method('delete')
                            @csrf <!-- {{ csrf_field() }} -->
                            <button class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900" type="submit">DELETE</button>
                        </form> --}}
                    </td>
            </tr>
            @endforeach
           </tbody>
        </table>
        <div class=" mx-auto max-w-96 pt-6 p-4">
            {{$students->links()}}
        </div>
      </div>
    <script>
    let arrow = document.querySelectorAll(".arrow");
    for (var i = 0; i < arrow.length; i++) {
      arrow[i].addEventListener("click", (e)=>{
     let arrowParent = e.target.parentElement.parentElement;//selecting main parent of arrow
     arrowParent.classList.toggle("showMenu");
      });
    }
    let sidebar = document.querySelector(".sidebar");
    let sidebarBtn = document.querySelector(".bxl-sketch");
    console.log(sidebarBtn);
    sidebarBtn.addEventListener("click", ()=>{
      sidebar.classList.toggle("close");
    });
    </script>

@include('partials.footer')

