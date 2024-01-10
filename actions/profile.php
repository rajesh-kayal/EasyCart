<?php include('../private/HTML_head.php')?>

<body>
  <?php include('../private/navbar.php') ?>

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
        $id = $_SESSION['user_id'];
        $sql = "SELECT `id`, `name`, `email`, `phone`, `gender`, `city`, `dob`, `language`, `picture` FROM `user` WHERE `id`='$id'";

        $data = mysqli_query($conn, $sql);
        while ($result = mysqli_fetch_assoc($data)) {
        ?>

          <div class="container bg-dark text-light">
            <div class="row justify-content-center mt-5">
              <div class="col-lg-8 col-md-10 col-sm-12">
                <div class="card shadow-sm">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-4">
                        <!-- Image part start -->
                        <form method='post' enctype="multipart/form-data" action="pictureaction.php">
                          <input type="text" name="id" value="<?php echo $id; ?>" hidden>
                          <input type="file" name="uploadimage">
                          <div id="imgerror"></div>
                          <input type="submit" name="add" value="Add Picture">
                        </form>
                        <img src="<?php echo $result['picture']; ?>" alt="Profile Picture" class="img-fluid rounded mb-3" style="width: 80px; height: 80px; object-fit: cover; border-radius: 50%; box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.5);">
                        <!-- Image part end -->
                        <hr>
                        <h5 class="text-center"><?php echo $result['name'] ?></h5>
                        <p class="text-muted text-center"><?php echo $result['city'] ?></p>
                      </div>
                      <div class="col-md-8">
                        <h5 class='text-primary'>Profile <i class="bi bi-person-circle"></i></h5>
                        <p></p>
                        <hr>
                        <div class="row">
                          <div class="col-md-6">
                            <h6>Email <i class="bi bi-envelope"></i></h6>
                            
                        <p><?php echo $result['email'] ?></p>
                      </div>
                      <div class="col-md-6">
                        <h6>Phone <i class="bi bi-telephone"></i></h6>
                        <p><?php echo $result['phone'] ?></p>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <h6>Gender <i class="bi bi-gender-ambiguous"></i></h6>
                        <p><?php echo $result['gender'] ?></p>
                      </div>
                      <div class="col-md-6">
                        <h6>Date of Birth <i class="bi bi-calendar"></i></h6>
                        <p><?php echo $result['dob'] ?></p>
                      </div>
                    </div>
                    <h6>Language <i class="bi bi-chat-left-dots"></i></h6>
                    <p><?php echo $result['language'] ?></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php } ?>
  </div>
</div>
  </div>
  
  <?php include('../private/footer.php')?>
<?php include('../private/HTML_end.php')?>