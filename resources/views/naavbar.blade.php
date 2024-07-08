@include('partials.header')
<div class="sidebar close">
    <div class="logo-details">
        <i class='bx bxl-sketch' ></i>

    </div>
    <ul class="nav-links">
      <li>
        <a href="{{ url('/') }}">
          <i class='bx bx-grid-alt' ></i>
          <span class="link_name">wew0</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">wew1</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bx-collection' ></i>
            <span class="link_name">go</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Category</a></li>
          <li><a href="{{ url('/weapon/indexw') }}">go21</a></li>
          <li><a href="{{ url('/actlog/logindex') }}">log</a></li>
          <li><a href="#">wew</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bx-book-alt' ></i>
            <span class="link_name">wew</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Posts</a></li>
          <li><a href="#">wew</a></li>
          <li><a href="#">wew</a></li>
        </ul>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-pie-chart-alt-2' ></i>
          <span class="link_name">wew</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">wew</a></li>
        </ul>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-line-chart' ></i>
          <span class="link_name">wew</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">wew</a></li>
        </ul>
      </li>
      <li>
    <div class="profile-details">
      <div class="profile-content">
        <!--<img src="image/profile.jpg" alt="profileImg">-->
      </div>
      <div class="name-job">
        <div class="profile_name">
        <x-items /> </div>
      </div>
    </div>
  </li>
</ul>
  </div>
