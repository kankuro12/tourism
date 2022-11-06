  <!-- Sidebar -->
  <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">

          <div class="sidebar-brand-text mx-3">{{ env('APP_NAME') }}</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
          <a class="nav-link" href="/">
              <i class="fas fa-fw fa-tachometer-alt"></i>
              <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">
      <li class="nav-item">
          <a class="nav-link" href="{{ route('admin.chapters.index') }}">
              <i class="fas fa-fw fa-tachometer-alt"></i>
              <span>Chapters</span></a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="{{ route('admin.destination.type.index') }}">
              <i class="fas fa-fw fa-tachometer-alt"></i>
              <span>Destinations</span></a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="{{ route('admin.gallery.main.index') }}">
              <i class="fas fa-fw fa-tachometer-alt"></i>
              <span>Galleries</span></a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="{{ route('admin.festivals.index') }}">
              <i class="fas fa-fw fa-tachometer-alt"></i>
              <span>Festivals</span></a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="{{ route('admin.experiences.index') }}">
              <i class="fas fa-fw fa-tachometer-alt"></i>
              <span>Experiences</span></a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="{{ route('admin.events.index') }}">
              <i class="fas fa-fw fa-tachometer-alt"></i>
              <span>Events</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.notices.index') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Notices</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.tourguide.index') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Tour Guides</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.tenders.index') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Tenders</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.hotels.index') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Hotels</span></a>
    </li>
      <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse-Setting"
              aria-expanded="true" aria-controls="collapse-Setting">
              <i class="fas fa-fw fa-user"></i>
              <span>Settings</span>
          </a>
          <div id="collapse-Setting" class="collapse" aria-labelledby="headingUtilities"
              data-parent="#accordionSidebar">
              <div class="bg-white py-2 collapse-inner rounded">
                  {{-- <a class="collapse-item" href="{{ route('admin.setting.front') }}">Front</a> --}}
                  <a class="collapse-item" href="{{ route('admin.setting.footer') }}">Footer</a>
                  <a class="collapse-item" href="{{ route('admin.setting.meta') }}">Meta</a>
                  <a class="collapse-item" href="{{ route('admin.setting.homepage') }}">HomePage</a>
                  <a class="collapse-item" href="{{ route('admin.setting.contact') }}">Contact</a>

              </div>
          </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
          <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>


  </ul>
  <!-- End of Sidebar -->
