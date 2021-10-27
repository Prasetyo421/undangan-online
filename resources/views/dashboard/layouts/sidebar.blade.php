<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
  <div class="position-sticky pt-3">
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
          <span data-feather="home"></span>
          Dashboard
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ Request::is('dashboard/invitation') ? 'active' : '' }}" href="/dashboard/invitation">
          <span data-feather="file"></span>
          Invitation
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ Request::is('dashboard/user') ? 'active' : '' }}" href="#">
          <span data-feather="file"></span>
          User
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{  Request::is('dashboard/design') ? 'active' : '' }}" href="#">
          <span data-feather="file"></span>
          Design
        </a>
      </li>
      
    </ul>

  </div>
</nav>