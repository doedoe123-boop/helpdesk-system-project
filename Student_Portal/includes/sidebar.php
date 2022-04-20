<!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="index.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#clearance-students-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-person-lines-fill"></i><span>Clearance For Students</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="clearance-students-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
          <li>
            <a href="clearance-status.php">
              <i class="bi bi-circle"></i><span>Clearance Status</span>
            </a>
          </li>
        </ul>
      </li><!-- End clearance-students Nav -->

      <li class="nav-item">
          <a href="tracking_docs.php" class="<?php if($page=='track'){echo 'nav-link';}else{echo 'nav-link collapsed';}?>" >
            <i class="bi bi-geo"></i>
            <span>Track Douments</span>
          </a>
        </li><!-- tracking item Nav -->
    </ul>

  </aside><!-- End Sidebar-->