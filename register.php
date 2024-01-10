<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

  <title>Register</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="assets/css/fontawesome.css">
  <link rel="stylesheet" href="assets/css/tooplate-main.css">
  <link rel="stylesheet" href="assets/css/owl.css">
  <link rel="stylesheet" href="assets/css/flex-slider.css">

  <!-- jqury link -->
  <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
  <script src="validation.js"></script>

  <!--
Tooplate 2114 Pixie
https://www.tooplate.com/view/2114-pixie
-->
</head>

<body class='bg-light'>

  <!-- Pre Header -->
  <?php include('navbar.php') ?>

  <!-- Page Content -->
  <!-- About Page Starts Here -->
  <div class="contact-page">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <div class="line-dec"></div>
            <h1>Register</h1>
          </div>
        </div>
        <!-- <div class="col-md-6">
            <div id="map">
            		

              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1197183.8373802372!2d-1.9415093691103689!3d6.781986417238027!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfdb96f349e85efd%3A0xb8d1e0b88af1f0f5!2sKumasi+Central+Market!5e0!3m2!1sen!2sth!4v1532967884907" width="100%" height="500px" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
          </div> -->
        <div>

          <div class="container">
            <div class="d-flex justify-content-center">
              <form method="post" action="actions/formaction.php">
                <table class='shadow border' cellpadding="20px" cellspacing="1">
                  <th><img src="assets\images\header-logo.png"></th>
                  <tr>
                    <th class='bg-secondary d-flex justify-content-center'>Creat Account</th>
                  <tr>
                    <td>
                      <b>Name</b> <input type="text" name="name" id='name' placeholder="Enter Name">
                      <div class="text-danger" id="nameerror"></div><br>

                      <b>Email</b> <input type="email" name="email" id='email' placeholder="Enter Email">
                      <div class="text-danger" id="emailerror"></div><br>

                      <b>Password</b> <input type="text" name="pass" id='pass' placeholder="Enter Password">
                      <div class="text-danger" id="passerror"></div>
                      <div class="text-success" id="passsuccess"></div><br>

                      <b>Mobile No.</b> <input type="text" name="phn" id='phn' placeholder="Enter Mobile Number"><br>
                      <div class="text-danger" id="phnerror"></div><br>
                      <b>Gender &nbsp</b> <input type="radio" name="gender" value="male">Male
                      <input type="radio" name="gender" value="female">Male
                      <input type="radio" name="gender" value="others">Others
                      <br>

                      <b>City</b> <select name='city'>
                        <option value=''>Select</option>
                        <?php
                        $cities = ['Mumbai', 'Kolkata', 'Delhi', 'Pune', 'Agra', 'Goa'];
                        foreach ($cities as $city) {
                          echo "<option value='$city'>" . $city . "</option>";
                        }
                        ?>
                      </select>
                      <br>

                      <b>DOB</b> <input type="date" name="dob"><br>

                      <b>language</b>
                      <input type="checkbox" name="language[]" value='english'>English
                      <input type="checkbox" name="language[]" value='hindi'>Hindi
                      <input type="checkbox" name="language[]" value='bengali'>Bengali<br>

                      <input type="submit" class='btn btn-md bg-primary mt-4 text-white' name="submit">
                      <div class="text-center mt-3">
                        <span>Already have an account?</span> <a href="login.php">Sign in</a>
                      </div>
                    </td>

                </table>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- About Page Ends Here -->

  

 <?php include('footer.php') ?>


  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


  <!-- Additional Scripts -->
  <script src="assets/js/custom.js"></script>
  <script src="assets/js/owl.js"></script>
  <script src="assets/js/isotope.js"></script>
  <script src="assets/js/flex-slider.js"></script>


  <script language="text/Javascript">
    cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
    function clearField(t) { //declaring the array outside of the
      if (!cleared[t.id]) { // function makes it static and global
        cleared[t.id] = 1; // you could use true and false, but that's more typing
        t.value = ''; // with more chance of typos
        t.style.color = '#fff';
      }
    }
  </script>
</body>

</html>