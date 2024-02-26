<!-- Content Wrapper -->
<div id = "content-wrapper" class = "d-flex flex-column">
  <!-- Main Content -->
  <div id = "content" style = "background-color: #FFFFFF;">
    <!-- Topbar -->
    <nav class = "navbar navbar-expand topbar mb-4 static-top" style = "background-color: #F5F5F5;">
      <!-- Sidebar Toggle (Topbar) -->
      <button id = "sidebarToggleTop" class = "btn btn-link d-md-none rounded-circle mr-3">
        <i class = "fa fa-bars"></i>
      </button>

      <li class = "nav-item btn no-arrow">
        <h1 style = "font-size: 30px; color: #1B1b1B;">
          <img src = "/EmployeeAttendance_CI/images/images/logo.png" style = "width: 40px; height: 40px;">&nbsp; <?= $title; ?>
        </h1>
      </li>

      <!-- Topbar Navbar -->
      <ul class = "navbar-nav ml-auto">
        <li class = "nav-item no-arrow">
          <a
            class = "nav-link"
            style = "height: 40px; top: 15%; color: gray;"
          >
            <?= $account['name']; ?>
          </a>
        </li>

        <!-- Nav Item - Alerts -->
        <div class = "topbar d-none d-sm-block"></div>

        <!-- Nav Item - User Information -->
        <li class = "nav-item btn no-arrow">
          <a
            class = "nav-link btn-toggle"
            href = "<?= base_url('auth/logout') ?>"
            role = "button"
            style = "height: 40px; top: 15%; border: 2px solid black; border-radius: 5px; color: black"
          >
            <i class = "text"></i>Logout
          </a>
        </li>
      </ul>
    </nav>
<!-- End of Topbar -->