@include ('partials.header')
<ul class=" flex flex-col md:flex-row px-4">
    @auth
    <li>
        <li>
            {{-- <a href="/add/student" class="block py-2 pr-4 pl-3">Add</a> --}}
        </li>
        <form action="/logout" method="POST">
            @csrf <!-- {{ csrf_field() }} -->
        <!--<a href="#" class="block py-2 pr-4 pl-3">Logout</a>-->
        <button class="py-2 pr-4 pl-3">
            Logout<i class='bx bx-log-out'></i>
        </button>
        {{-- <i class='bx bx-log-out' ></i> --}}
        </form>
    </li>
    @else
    <li>
        <a href="/login" class="block py-2 pr-4 pl-3">Sign in</a>
    </li>
    <li>
        <a href="/register" class="block py-2 pr-4 pl-3">Sign up</a>
    </li>
    @endauth
</ul>