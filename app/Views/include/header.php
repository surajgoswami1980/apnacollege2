<header class="fixed-top">
  <nav class="navbar navbar-expand-lg navbar-light navbar-custom">
    <div class="container-fluid">
      <a class="navbar-brand" href="<?= base_url() ?>"><img class="logo1" src="<?= base_url('images/apnacollegelogo.png') ?>"></a>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="btn" style="background-color:#505ba0; color:white;" href="<?= base_url("courses/sigma") ?>">New Sigma 4.0</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" href="<?= base_url() ?>">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-dark" href="#" id="servicesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              New Courses
            </a>
            <ul class="dropdown-menu" aria-labelledby="servicesDropdown">
              <li><a class="dropdown-item" href="<?= base_url("courses/sigma") ?>">Sigma 4.0 (Aug Batch)</a></li>
              <li><a class="dropdown-item" href="<?= base_url("courses/delta") ?>">Delta 5.0 (Aug Development Batch)</a></li>
              <li><a class="dropdown-item" href="<?= base_url("courses/cpp-dsa") ?>">C++ DSA</a></li>
            </ul>
          </li>
          <?php if (session()->get('isLoggedIn')): ?>
            <li class="nav-item">
              <a class="nav-link text-dark" href="<?= base_url('homelogin') ?>">My Batch</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark" href="<?= base_url('logout') ?>">Sign Out</a>
            </li>
          <?php else: ?>
            <li class="nav-item">
              <a class="nav-link text-dark" href="#" data-bs-toggle="modal" data-bs-target="#loginModal">Log in</a>
            </li>
            <li class="nav-item">
              <a class="btn btn-primary" href="#" data-bs-toggle="modal" data-bs-target="#SignUpModal">Sign up</a>
            </li>
          <?php endif; ?>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Hamburger Icon for smaller screens -->
  <div class="hamburger-icon d-lg-none" onclick="toggleNav()">&#9776;</div>

  <!-- Overlay Navigation for smaller screens -->
  <div id="myNav" class="overlay d-lg-none">
    <a href="javascript:void(0)" class="closebtn" onclick="toggleNav()">&times;</a>
    <div class="overlay-content">
      <a href="<?= base_url("courses/sigma") ?>">New Sigma 4.0</a>
      <a href="<?= base_url() ?>">Home</a>
      <div class="dropdown">
        <a class="dropdown-toggle" href="#" id="servicesDropdown" onclick="toggleDropdown()">New Courses</a>
        <div class="dropdown-men" id="servicesMenu">
          <a class="dropdown-item" href="<?= base_url("courses/sigma") ?>">Sigma 4.0 (Aug Batch)</a>
          <a class="dropdown-item" href="<?= base_url("courses/delta") ?>">Delta 5.0 (Aug Development Batch)</a>
          <a class="dropdown-item" href="<?= base_url("courses/cpp-dsa") ?>">C++ DSA</a>
        </div>
      </div>
      <?php if (session()->get('isLoggedIn')): ?>
        <a href="<?= base_url('homelogin') ?>">My Batch</a>
        <a href="<?= base_url('logout') ?>">Sign Out</a>
      <?php else: ?>
        <a href="#" data-bs-toggle="modal" data-bs-target="#loginModal">Log in</a>
        <a href="#" data-bs-toggle="modal" data-bs-target="#SignUpModal">Sign Up</a>
      <?php endif; ?>
    </div>
  </div>
</header>


<!-- Login Modal -->
<div class="modal fade" id="loginModal" aria-labelledby="loginModalLabel">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center fw-400 fs-3 mt-5 mx-5" id="loginModalLabel">Login and Sign Up to Start Learning</h5>
        <button type="button" class="btn-close bg-light" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">

        <form action="<?= base_url('login') ?>" method="post">
          <div class="mb-3 mx-3">
            <label for="emailInput" class="form-label">What is your email?</label>
            <input type="email"  name="email" style="background-color: #262626; border:none; color:aliceblue;" class="form-control" id="emailInput" placeholder="Enter your email" required>
          </div>
          <div class="mb-3 mx-3">
            <label for="passwordInput" class="form-label">Enter your password</label>
            <input type="password"  name="password"  required minlength="8" maxlength="20" style="background-color: #262626; border:none; color:aqua;" class="form-control" id="passwordInput" placeholder="Enter your password" required>
          </div>
          <div class="mx-3">
            <button type="submit" class="btn btn-primary w-100 mt-3">Log in</button>
          </div>
        </form>
      </div>
      <div class="py-3 pb-5 mx-5 d-flex justify-content-between">
        <a href="#" class="text-decoration-none" id="createAccountLink" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#SignUpModal">Create account</a>
        <a class="text-decoration-none" href="#" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#forgetModal">Forgot your password?</a>
      </div>
    </div>
  </div>
</div>

<!-- Sign Up Modal -->
<div class="modal fade" id="SignUpModal" tabindex="1" aria-labelledby="signUpModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center fw-400 fs-3 mt-5 mx-5" id="SignUpModalLabel">Sign up to Apna College!</h5>
        <!-- flash -->

        <button type="button" class="btn-close text-light bg-light" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <form action="<?= base_url('register') ?>" method="post">
          <div class="mb-3 mx-3">
            <label for="nameInput" class="form-label">What's your Name?</label>
            <input type="text" name="name" background-color: #262626; border:none; color:aliceblue; class="form-control" id="nameInput" placeholder="Enter your name" required>
          </div>
          <div class="mb-3 mx-3">
            <label for="emailInput" class="form-label">What is your email?</label>
            <input type="email" name="email" style="background-color: #262626; border:none; color:aliceblue;" class="form-control" id="emailInput1" placeholder="Enter your email" required>
          </div>
          <div class="mb-3 mx-3">
            <label for="passwordInput" class="form-label">Enter password</label>
            <input type="password" name="password" minlength="8" maxlength="20" style="background-color: #262626; border:none; color:aqua;" class="form-control" id="passwordInput1" placeholder="Enter your password" required>
          </div>
          <div class="mb-3 mx-3">
            <label for="phoneInput" class="form-label">Phone Number</label>
            <input type="tel" name="phone" pattern="[0-9]{10}" style="background-color: #262626; border:none; color:aqua;" class="form-control" id="phoneInput" placeholder="Enter your phone number" required>
          </div>
          <div class="mx-3">
            <button type="submit" class="btn btn-primary w-100 mt-3">Start your learning Journey</button>
          </div>
        </form>
      </div>
      <div class="py-3 pb-5 mx-5 d-flex justify-content-between">
        <a href="#" class="text-decoration-none" id="signInLink" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#loginModal">Sign in with your account</a>
        <a class="text-decoration-none" href="#" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#forgetModal">Forgot your password?</a>
      </div>
    </div>
  </div>
</div>

<!-- Forget Password Modal -->
<div class="modal fade" id="forgetModal" tabindex="1" aria-labelledby="forgetModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center fw-400 fs-3 mt-5 mx-5" id="forgetModalLabel">GET A BRAND NEW PASSWORD</h5>
        <button type="button" class="btn-close text-light bg-light" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3 mx-3">
            <label for="emailInputForget" class="form-label">What is your email?</label>
            <input type="email" style="background-color: #262626; border:none; color:aliceblue;" class="form-control" id="emailInputForget" placeholder="Enter your email" required>
          </div>
          <div class="mx-3 d-flex justify-content-between">
            <button type="submit" class="btn btn-primary mt-3 col-4">OK</button>
            <button type="button" class="btn btn-secondary col-4 mt-3" data-bs-dismiss="modal">Cancel</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>


<!-- flash message -->
