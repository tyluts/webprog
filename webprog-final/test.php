<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'include/head.php'; ?>
    <link rel="stylesheet" href="css/admincss/adminnav.css">
    <title>Home</title>
</head>
<body class="black">
<nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom fixed-top">
  <div class="container-fluid">
    <button class="btn btn-outline-secondary d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar" aria-controls="sidebar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand d-flex align-items-center" href="admin.php">
     
      <span>Admin Panel</span>
    </a>
    <div class="d-flex align-items-center ms-auto">
      <button class="btn btn-secondary rounded-circle p-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
        <img src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" class="rounded-circle" alt="User photo" width="30" height="30">
      </button>
      <ul class="dropdown-menu dropdown-menu-end">
        <li><a class="dropdown-item" href="#">Dashboard</a></li>
        <li><a class="dropdown-item" href="#">Settings</a></li>
        <li><a class="dropdown-item" href="#">Earnings</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="#">Sign out</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Sidebar for larger screens -->
<div class="d-none d-lg-flex flex-column bg-light border-end position-fixed " style="width: 250px; top: 0; bottom: 0; left:0; padding-top: 56px;">
  <ul class="nav flex-column p-3">
    <li class="nav-item">
      <a class="nav-link text-dark" href="#">
        <i class="bi bi-speedometer2 me-2"></i> Dashboard
      </a>
    </li>
   
    <li class="nav-item">
      <a class="nav-link text-dark" href="#">
        <i class="bi bi-inbox me-2"></i> Inbox
        <span class="badge bg-primary ms-2">3</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-dark" href="#">
        <i class="bi bi-people me-2"></i> Users
      </a>
    </li>
   
    <li class="nav-item">
      <a class="nav-link text-dark" href="#">
        <i class="bi bi-box-arrow-in-right me-2"></i> Sign In
      </a>
    </li>
    
  </ul>
</div>

<!-- Sidebar for smaller screens (offcanvas) -->
<div class="offcanvas offcanvas-start bg-light" tabindex="-1" id="sidebar" aria-labelledby="sidebarLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="sidebarLabel">Menu</h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link text-dark" href="#">
          <i class="bi bi-speedometer2 me-2"></i> Dashboard
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="#">
          <i class="bi bi-kanban me-2"></i> Kanban
          <span class="badge bg-secondary ms-2">Pro</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="#">
          <i class="bi bi-inbox me-2"></i> Inbox
          <span class="badge bg-primary ms-2">3</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="#">
          <i class="bi bi-people me-2"></i> Users
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="#">
          <i class="bi bi-box-seam me-2"></i> Products
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="#">
          <i class="bi bi-box-arrow-in-right me-2"></i> Sign In
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="#">
          <i class="bi bi-journal me-2"></i> Documentation
        </a>
      </li>
    </ul>
  </div>
</div>

<!-- Bootstrap JavaScript Bundle (required for dropdown and offcanvas) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<style>
  /* Adjust main content padding to accommodate sidebar */
  @media (min-width: 992px) {
    body {
      padding-left: 250px; /* Sidebar width */
    }
  }
</style>


</body>
</html>


