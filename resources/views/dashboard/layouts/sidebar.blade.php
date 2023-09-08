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
          <a class="nav-link {{ Request::is('dashboard/posts*') ? 'active' : '' }}" href="/dashboard/posts">
            <span data-feather="file-text"></span>
            My Posts
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/dashboard/user">
            <span data-feather="user"></span>
            My Profile
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/dashboard/film">
            <span data-feather="film"></span>
            Film
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/dashboard/umbrella">
            <span data-feather="umbrella"></span>
            Umbrella
          </a>
        </li>
      </ul>
    </div>
  </nav>
