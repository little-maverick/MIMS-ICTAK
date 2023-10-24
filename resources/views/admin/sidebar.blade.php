<!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
           <li class="nav-item">
            <a class="nav-link" href="/activity">
              <i class="ti-star menu-icon"></i>
              <span class="menu-title">Activity</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('members_view')}}">
              <i class="ti-user menu-icon"></i>
              <span class="menu-title">Members</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="">
              <i class="ti-layout-list-post menu-icon"></i>
              <span class="menu-title">Finance</span>
            </a>
          </li>
           <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="" aria-expanded="false" aria-controls="auth">
              <i class="ti-user menu-icon"></i>
              <span class="menu-title">Applications</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href=""> New Applicants </a></li>
                <li class="nav-item"> <a class="nav-link" href=""> Approved Applicants </a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/admin/certificate">
              <i class="ti-pie-chart menu-icon"></i>
              <span class="menu-title">Certification</span>
            </a>
          </li>
        </ul>
      </nav>


  <!-- partial -->