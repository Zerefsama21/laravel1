@include ('partials.header')

    <main class="bg-white max-w-lg mx-auto p-8 my-10 rounded-lg shadow-2x1">
        <section>
            <h3 class="text-2xl font-bold">Input</h3>
        </section>
        <section class="mt-10">
            <form action="/add/weapon" method="POST" class="flex flex-col w-full" style="border: 2px solid black;">
                @csrf <!-- {{ csrf_field() }} -->
                <div class="mb-6 pt-3 rounded  px-5">
                    <label for="weapon_name" class="block text-gray-700 
                    text-sm font-bold mb-2 ml-3">Weapon Name</label>
                    <input type="text" name="weapon_name" class="bg-gray-200 rounded w-full text-gray-700 
                    focus:outline-none w-full border-b-4 border-gray-400 px-3" autocomplete="off" value={{old('weapon_name')}}>
                    @error('weapon_name')
                    <p class="text-red-500 text-xs mt-2 p-1">
                        {{$message}}
                    </p>
                    @enderror
                </div>

                <div class="mb-6 pt-3 rounded  px-5">
                    <label for="last_name" class="block text-gray-700 
                    text-sm font-bold mb-2 ml-3">Weapon Type</label>
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
                    text-sm font-bold mb-2 ml-3">Rarity</label>
                    <select type="text" name="gender" class="bg-gray-200 rounded w-full text-gray-700 
                    focus:outline-none w-full border-b-4 border-gray-400 px-3" autocomplete="off" >
                    <option value="" {{old('gender') == "" ? 'selected' : ''}}></option>
                    <option value="Male" {{old('gender') == "Common" ? 'selected' : ''}}>Male</option>
                    <option value="Female" {{old('gender') == "Rare" ? 'selected' : ''}}>Female</option>
                    </select>
                    @error('gender')
                    <p class="text-red-500 text-xs mt-2 p-1">
                        {{$message}}
                    </p>
                    @enderror
                </div>
                <button class="bg-purple-600 hover:bg-purple-700 text-white font-bold py-2 rounded shadow-lg hover:shadow-x1
                transition duration-200" type="submit">Add</button>
            </form>
        </section>
        <button class="bg-pink-500 text-white active:bg-pink-600 font-bold uppercase text-sm px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button" onclick="toggleModal('modal-id')">
            Open regular modal
          </button>
          <div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center" id="modal-id">
            <div class="relative w-auto my-6 mx-auto max-w-3xl">
              <!--content-->
              <div class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
                <!--header-->
                <div class="flex items-start justify-between p-5 border-b border-solid border-blueGray-200 rounded-t">
                  <h3 class="text-3xl font-semibold">
                    Edit
                  </h3>
                  <button class="p-1 ml-auto bg-transparent border-0 text-black opacity-5 float-right text-3xl leading-none font-semibold outline-none focus:outline-none" onclick="toggleModal('modal-id')">
                    <span class="bg-transparent text-black opacity-5 h-6 w-6 text-2xl block outline-none focus:outline-none">
                      ×
                    </span>
                  </button>
                </div>
                <!--body-->
                <div class="relative p-6 flex-auto"
                    style="padding-left: 200px; padding-right: 200px;">
                    <form action="/add/weapon" method="POST" class="flex flex-col w-full" style="border: 2px solid black;">
                        @csrf <!-- {{ csrf_field() }} -->
                        <div class="mb-6 pt-3 rounded  px-5">
                            <label for="weapon_name" class="block text-gray-700 
                            text-sm font-bold mb-2 ml-3">Weapon Name</label>
                            <input type="text" name="weapon_name" class="bg-gray-200 rounded w-full text-gray-700 
                            focus:outline-none w-full border-b-4 border-gray-400 px-3" autocomplete="off" value={{old('weapon_name')}}>
                            @error('weapon_name')
                            <p class="text-red-500 text-xs mt-2 p-1">
                                {{$message}}
                            </p>
                            @enderror
                        </div>
    
                        <div class="mb-6 pt-3 rounded  px-5">
                            <label for="last_name" class="block text-gray-700 
                            text-sm font-bold mb-2 ml-3">Weapon Type</label>
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
                            text-sm font-bold mb-2 ml-3">Rarity</label>
                            <select type="text" name="gender" class="bg-gray-200 rounded w-full text-gray-700 
                            focus:outline-none w-full border-b-4 border-gray-400 px-3" autocomplete="off" >
                            <option value="" {{old('gender') == "" ? 'selected' : ''}}></option>
                            <option value="Male" {{old('gender') == "Common" ? 'selected' : ''}}>Male</option>
                            <option value="Female" {{old('gender') == "Rare" ? 'selected' : ''}}>Female</option>
                            </select>
                            @error('gender')
                            <p class="text-red-500 text-xs mt-2 p-1">
                                {{$message}}
                            </p>
                            @enderror
                        </div>
                        <button class="bg-purple-600 hover:bg-purple-700 text-white font-bold py-2 rounded shadow-lg hover:shadow-x1
                        transition duration-200" type="submit">Add</button>
                    </form>
                </div>
                <!--footer-->
                <div class="flex items-center justify-end p-6 border-t border-solid border-blueGray-200 rounded-b">
                  <button class="text-red-500 background-transparent font-bold uppercase px-6 py-2 text-sm outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button" onclick="toggleModal('modal-id')">
                    Close
                  </button>
                  <button class="bg-emerald-500 text-white active:bg-emerald-600 font-bold uppercase text-sm px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button" onclick="toggleModal('modal-id')">
                    Save Changes
                  </button>
                  <button class="bg-purple-600 hover:bg-purple-700 text-white font-bold py-2 rounded shadow-lg hover:shadow-x1
                  transition duration-200" type="submit">Add</button>
                </div>
              </div>
            </div>
          </div>
          <div class="hidden opacity-25 fixed inset-0 z-40 bg-black" id="modal-id-backdrop"></div>
    </main>
@include('partials.footer')