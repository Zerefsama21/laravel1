@include('partials.header')
@include('naavbar')

<div class="homesection1">
  <div class="navbar navbar-light bg-light flex flex-row " 
       style="padding-top: 20px; padding-left: 20px;" >
   
  </div>
    
  <section class="mt-10 pt-10">
      <div class="overflow-x-auto relative ">
          <table class="w-100 mx-auto text-sm text-left text-gray-500 ">
              <thead class="text-xs text-slate-50 uppercase bg-stone-700"
              style="border-bottom: 2px solid white">
              <tr>
                  <th scope="col" class="py-3 px-6 text-center">
                    ID
                  </th>
                  <th scope="col" class="py-3 px-6 text-center">
                    Description
                  </th>
                  <th scope="col" class="py-3 px-6 text-center">
                    Event
                  </th>
                  <th scope="col" class="py-3 px-6 text-center">
                    User
                  </th>
                  <th scope="col" class="py-3 px-6 text-center">
                    Time
                 </th>
              </tr>
             </thead>
             <tbody>
              @foreach ($activity_log as $weapon)
              <tr class="bg-stone-900 text-white"
                  style="border-bottom: 2px solid white">

                  <td class="py-4 px-6 text-center"> {{$weapon -> id }} </td>
                  <td class="py-4 px-6 text-center"> {{$weapon -> subject_id }} </td>
                  <td class="py-4 px-6 text-center"> {{$weapon -> description }} </td>
                  <td class="py-4 px-6 text-center"> {{$weapon -> causer_id }} </td>
                  <td class="py-4 px-6 text-center"> {{$weapon -> created_at }} </td>
              </tr>
              @endforeach
             </tbody>
          </table>
          <div class=" mx-auto max-w-96 pt-6 p-4">
              {{$activity_log->links()}}
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
@include ('partials.footer')