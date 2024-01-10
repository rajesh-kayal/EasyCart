<!-- Pre Header -->
<div id="pre-header">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <span><?php session_start();
             echo $_SESSION['message']; ?></span>
      </div>
    </div>
  </div>
</div>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
  <div class="container">
    <a class="navbar-brand" href="#"><img src="assets/images/header-logo.png" alt=""></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Home
            <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../products.php">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../about.php">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../contact.php">Contact Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../register.php">Account</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="#">Profile</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
