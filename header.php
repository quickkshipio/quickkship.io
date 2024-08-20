<header id="header" style="background-color: white;">
  <div class="header navbar">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header pull-left">
        <a class="navbar-brand" href="index.html">
          <img src="jobado/layout/images/png-03.png" alt="QuickkShip Logo" style="height: 60px">
        </a>
      </div>
      <!-- Collection of nav links, forms, and other content for toggling -->
      <div id="navbarCollapse" class="navbar-collapse navbar-right">
        <nav id="menu" class="collapse">
          <!-- Navigation Menu -->
          <ul class="nav">
            <li class="active">
              <a href="index.html" style="color:black;">Home</a>
            </li>
            <li>
              <a href="https://quickkship.com/about.html" style="color: black;">About</a>
            </li>
            <li>
              <a href="https://quickkship.com/tracking" style="color: black;">Tracking</a>
            </li>
            <li>
              <a href="https://quickkship.com/packages" style="color: black;">Packages</a>
            </li>
            <li>
              <a href="https://quickkship.com/contact.html" style="color: black;">Contact</a>
            </li>
            <?php if(empty($_SESSION)) { ?>
            <li>
              <a href="https://quickkship.com/login" style="color: black;">Login</a>
            </li>
            <li>
              <a href="https://quickkship.com/register" style="color: black;">Register</a>
            </li>
            <li>
              <a href="https://quickkship.com/forgot-password" style="color: black;">Forgot Password?</a>
            </li>
            <?php } else { ?>
            <li>
              <a href="https://quickkship.com/dashboard" style="color: black;">Dashboard</a>
            </li>
            <?php } ?>
          </ul>
          <!-- End Navigation Menu -->
        </nav>
      </div>
    </div>
  </div>
</header>
