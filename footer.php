<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <style>
        /* Custom styles for the footer */
        .footer {
            background-color: #212529;
            color: #fff;
            padding: 50px 0;
            margin-top: 50px;
        }
        .footer a {
            color: #fff;
        }
        .footer-menu ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
        }
        .footer-menu ul li {
            margin-right: 30px;
        }
        .social-icons ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
        }
        .social-icons ul li {
            margin-right: 15px;
        }
        .sub-footer {
            background-color: #343a40;
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }
        .sub-footer p {
            margin-bottom: 0;
        }
    </style>
</head>
<body>
    <header>
        <!-- Add your header content here -->
    </header>

    <main>
        <!-- Add your main content here -->
    </main>

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                  <h6>About</h6>
                  <p>Welcome to EcomMart – your one-stop destination for all your shopping needs. We are dedicated to providing you with the very best products and services, with a focus on quality, affordability, and exceptional customer service.</p>
                    <div class="footer-menu mt-5">
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Help</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="social-icons">
                        <ul>
                            <li><a href="#"><i class="bi bi-facebook"></i></a></li>
                            <li><a href="#"><i class="bi bi-whatsapp"></i></a></li>
                            <li><a href="#"><i class="bi bi-instagram"></i></a></li>
                            <li><a href="#"><i class="bi bi-twitter"></i></a></li>
                            <li><a href="#"><i class="bi bi-linkedin"></i></a></li>
                            <li><a href="#"><i class="bi bi-github"></i></a></li>
                            <li><a href="#"><i class="bi bi-rss-fill"></i></a></li>
                        </ul>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="sub-footer">
          <p>Thank you for choosing EcomMart. We look forward to serving you and making your shopping experience a memorable one.</p>
            <p>Copyright &copy; <?php echo date('Y') ?> All rights reserved By <a href="#">Rajesh Kayal</a>.
        </div>
    </footer>

    <!-- Bootstrap core JS -->
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
