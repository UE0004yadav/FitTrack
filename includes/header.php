<nav class="navbar navbar-expand-lg navbar-dark p-3 sticky-top border border-secondary rounded-4" style="background-color: #000;">
  <div class="container-fluid px-3 px-lg-5">

    <!-- LOGO -->
    <a class="navbar-brand fw-bolder" href="#">
      <i class="fa-solid fa-dumbbell text-light fs-3 me-2"></i>
      FitTrack
    </a>

    <!-- TOGGLER -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- COLLAPSE -->
    <div class="collapse navbar-collapse" id="navbarNav">

      <!-- LINKS -->
      <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
        <li class="nav-item"><a class="nav-link active" href="index.php">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="plans.php">Plans</a></li>
        <li class="nav-item"><a class="nav-link" href="user/dashboard.php">Dashboard</a></li>
        <li class="nav-item"><a class="nav-link" href="admin/dashboard.php">Admin</a></li>
      </ul>

      <!-- BUTTONS -->
      <div class="d-flex flex-column flex-lg-row gap-2 ms-lg-auto mt-3 mt-lg-0">
        <a href="auth/login.php" class="btn btn-dark btn-lg">Login</a>
        <a href="auth/register.php" class="btn btn-danger btn-lg">Register</a>
      </div>

    </div>
  </div>
</nav>