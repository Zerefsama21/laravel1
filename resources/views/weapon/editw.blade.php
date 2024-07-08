@include ('partials.header')
<header class="max-w-lg mx-auto">
    <a href="#"> </a>
</header>
    <main class="bg-white max-w-lg mx-auto p-8 my-10 rounded-lg shadow-2x1">
        <section class="flex flex row justify-between">
            <h3 class="text-2xl font-bold">Edit now </h3>
            <a href="indexw"><i class='bx bx-x text-2xl hover:text-red-700'></i></a>
        </section>
        <section class="mt-10">
            <form action="/weapon/{{$weapon->id}}" method="POST" class="flex flex-col" enctype="multipart/form-data">
                @method('PUT')
                @csrf <!-- {{ csrf_field() }} -->
                <div class="mb-6 pt-3 px-5">
                    <label for="weapon_name" class="block text-gray-700 
                    text-sm font-bold mb-2 ml-3">Weapon Name</label>
                    <input type="text" name="weapon_name" class="bg-gray-200 rounded w-full text-gray-700 
                    focus:outline-none w-full border-b-4 border-gray-400 px-3" autocomplete="off" value={{$weapon->weapon_name}}>
                    @error('weapon_name')
                    <p class="text-red-500 text-xs mt-2 p-1">
                        {{$message}}
                    </p>
                    @enderror
                </div>

                <div class="mb-6 pt-3 px-5">
                    <label for="weapon_type" class="block text-gray-700 
                    text-sm font-bold mb-2 ml-3">Weapon Type</label>
                    <select type="text" name="weapon_type" class="bg-gray-200 rounded w-full text-gray-700 
                    focus:outline-none w-full border-b-4 border-gray-400 px-3" autocomplete="off" >
                    <option value="" {{$weapon->weapon_type == "" ? 'selected' : ''}}></option>
                    <option value="Sword" {{$weapon->weapon_type == "Sword" ? 'selected' : ''}}>Sword</option>
                    <option value="Bow" {{$weapon->rweapon_type == "Bow" ? 'selected' : ''}}>Bow</option>
                    <option value="Polearm" {{$weapon->weapon_type == "Polearm" ? 'selected' : ''}}>Polearm</option>
                    <option value="Claymore" {{$weapon->weapon_type == "Claymore" ? 'selected' : ''}}>Claymore</option>
                    </select>
                    @error('weapon_type')
                    <p class="text-red-500 text-xs mt-2 p-1">
                        {{$message}}
                    </p>
                    @enderror
                </div>

                <div class="mb-6 pt-3 px-5">
                    <label for="rarity" class="block text-gray-700 
                    text-sm font-bold mb-2 ml-3">Rarity</label>
                    <select type="text" name="rarity" class="bg-gray-200 rounded w-full text-gray-700 
                    focus:outline-none w-full border-b-4 border-gray-400 px-3" autocomplete="off" >
                    <option value="" {{$weapon->rarity == "" ? 'selected' : ''}}></option>
                    <option value="Common" {{$weapon->rarity == "Common" ? 'selected' : ''}}>Common</option>
                    <option value="Rare" {{$weapon->rarity == "Rare" ? 'selected' : ''}}>Rare</option>
                    <option value="Unique" {{$weapon->rarity == "Unique" ? 'selected' : ''}}>Unique</option>
                    <option value="Legendary" {{$weapon->rarity == "Legendary" ? 'selected' : ''}}>Legendary</option>
                    <option value="Mythic" {{$weapon->rarity == "Mythic" ? 'selected' : ''}}>Mythic</option>
                    </select>
                      @error('rarity')
                      <p class="text-red-500 text-xs mt-2 p-1">
                          {{$message}}
                      </p>
                      @enderror
                  </div>

                  <div class="mb-6 pt-3 px-5">
                    <label for="quantity" class="block text-gray-700 
                    text-sm font-bold mb-2 ml-3">Quantity</label>
                    <input type="number" name="quantity" class="bg-gray-200 rounded w-full text-gray-700 
                    focus:outline-none w-full border-b-4 border-gray-400 px-3"value={{$weapon->quantity}}>
                    @error('quantity')
                    <p class=" text-red-500 text-xs mt-2 p-1">
                        {{$message}}
                    </p>
                    @enderror
                  </div>

                  <div class="flex flex-row-reverse">
                <button class=" mt-2 mr-2 font-bold uppercase text-base text-blue-700 hover:text-blue-900" type="submit">update</button> </div>
            </form>

            <form action= "/weapon/{{$weapon->id}}" method="POST" class="flex flex-row-reverse ">
                @method('delete')
                @csrf <!-- {{ csrf_field() }} -->
                <button class="mr-4 font-bold uppercase mt-2 text-base text-red-700 hover:text-red-900 " type="submit">delete</button>
            </form>
        </section>
    </main>
@include('partials.footer')