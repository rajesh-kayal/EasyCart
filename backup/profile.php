<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

    <title>Profile</title>

    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="../assets/css/fontawesome.css">
    <link rel="stylesheet" href="../assets/css/tooplate-main.css">
    <link rel="stylesheet" href="../assets/css/owl.css">
    <link rel="stylesheet" href="../assets/css/flex-slider.css">
<!--
Tooplate 2114 Pixie
https://www.tooplate.com/view/2114-pixie
-->
  </head>

  <body class='bg-light'>


    <!-- Pre Header -->
 <?php  include('navbar2.php') ?>

    <!-- Page Content -->
    <!-- About Page Starts Here -->
    <div class="contact-page">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <div class="line-dec"></div>
              <h1>Profile</h1>
            </div>
          </div>
<?php
include("connection.php");

$id=$_GET['id'];


$sql = "SELECT `id`, `name`, `email`, `phone`, `gender`, `city`, `dob`, `language`, `picture` FROM `user` WHERE `id`='$id'";
$data = mysqli_query($conn, $sql);
// $result = mysqli_fetch_assoc($data);

    while($result=mysqli_fetch_assoc($data))
    {

?>

        
            
<div class="container">
  <div class="row justify-content-center mt-5">
    <div class="col-lg-8 col-md-10 col-sm-12">
      <div class="card shadow-sm">
        <div class="card-body">
          <div class="row">
            <div class="col-md-4">

              <!-- image part start -->
              <form method='post' enctype="multipart/form-data" action="pictureaction.php">
                <input type="text" name="id" value="<?php echo $id;?>" hidden>

                <input type="file" name="uploadimage" >
                <div id="imgerror"></div>
               <input type="submit" name="add" value="Add Picture">
              </form>


<!-- display user data here -->


              
               <img src="<?php echo $result['picture']; ?>" alt="Profile Picture" class="img-fluid rounded mb-3">

              <!-- image part end -->
              <hr>
              <h5 class="text-center"><?php echo $result['name'] ?></h5>
              <p class="text-muted text-center"><?php echo $result['city'] ?></p>
              
             
            </div>
            <div class="col-md-8">
              <h5 class='text-primary'>Profile</h5>
              <p></p>
              <hr>
              <div class="row">
                <div class="col-md-6">
                  <h6>Email</h6>
                  <p><?php echo $result['email'] ?></p>
                </div>
                <div class="col-md-6">
                  <h6>Phone</h6>
                  <p><?php echo $result['phone'] ?></p>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <h6>Gender</h6>
                  <p><?php echo $result['gender'] ?></p>
                </div>
                <div class="col-md-6">
                  <h6>Language</h6>
                  <p><?php echo $result['language'] ?></p>
                </div>
                <?php
              }
              ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


          </div>
        </div>
      </div>
    </div>
    <!-- About Page Ends Here -->

    <!-- Subscribe Form Starts Here -->
    <div class="subscribe-form">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <div class="line-dec"></div>
              <h1>Subscribe on PIXIE now!</h1>
            </div>
          </div>
          <div class="col-md-8 offset-md-2">
            <div class="main-content">
              <p>Godard four dollar toast prism, authentic heirloom raw denim messenger bag gochujang put a bird on it celiac readymade vice.</p>
              <div class="container">
                <form id="subscribe" action="" method="get">
                  <div class="row">
                    <div class="col-md-7">
                      <fieldset>
                        <input name="email" type="text" class="form-control" id="email" 
                        onfocus="if(this.value == 'Your Email...') { this.value = ''; }" 
                    	onBlur="if(this.value == '') { this.value = 'Your Email...';}"
                    	value="Your Email..." required="">
                      </fieldset>
                    </div>
                    <div class="col-md-5">
                      <fieldset>
                        <button type="submit" id="form-submit" class="button">Subscribe Now!</button>
                      </fieldset>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Subscribe Form Ends Here -->


    
    <!-- Footer Starts Here -->
    <div class="footer">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="logo">
              <img src="assets/images/header-logo.png" alt="">
            </div>
          </div>
          <div class="col-md-12">
            <div class="footer-menu">
              <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Help</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">How It Works ?</a></li>
                <li><a href="#">Contact Us</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-12">
            <div class="social-icons">
              <ul>
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa fa-rss"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer Ends Here -->


    <!-- Sub Footer Starts Here -->
    <div class="sub-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="copyright-text">
              <p>Copyright &copy; 2019 Company Name 
                
                - Design: <a rel="nofollow" href="https://www.facebook.com/tooplate">Tooplate</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Sub Footer Ends Here -->


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/flex-slider.js"></script>


    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>


  </body>

</html>
