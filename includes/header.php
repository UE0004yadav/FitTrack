<nav class="navbar navbar-expand-lg navbar-dark  p-2 sticky-top custom-navbar">
  <div class="container-fluid px-lg-5">

    <!-- LOGO -->
    <a class="navbar-brand fw-bolder" href="#">
      <i class="fa-solid fa-dumbbell text-light fs-6 me-2"></i>
      <span class="logo-text">FitTrack</span>
    </a>

    <!-- TOGGLER -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">

  <!-- LEFT (empty but fixed width) -->
  <div class="d-none d-lg-flex flex-grow-1"></div>
<?php $page = basename($_SERVER['PHP_SELF']); ?>
  <!-- CENTER LINKS -->
  <ul class="navbar-nav mx-auto mb-2 mb-lg-0 fs-5 text-center">
    <li class="nav-item"><a class="nav-link <?php if($page=='index.php') echo 'active'; ?>" href="/gym-project/index.php">Home</a></li>
    <li class="nav-item"><a class="nav-link <?php if($page=='plans.php') echo 'active'; ?>" href="/gym-project/plans.php">Plans</a></li>
    <li class="nav-item"><a class="nav-link <?php if($page=='user/dashboard.php') echo 'active'; ?>" href="/gym-project/user/dashboard.php">Dashboard</a></li>
    <li class="nav-item"><a class="nav-link <?php if($page=='admin/dashboard.php') echo 'active'; ?>" href="/gym-project/admin/dashboard.php">Admin</a></li>
  </ul>

  <!-- RIGHT BUTTONS -->
  <div class="d-flex gap-2 flex-grow-1 justify-content-end">
    <a href="auth/login.php" class="btn btn-dark btn-sm login-btn">Login</a>
    <a href="auth/register.php" class="btn btn-sm register-btn">Register</a>
  </div>

</div>
  </div>
</nav>