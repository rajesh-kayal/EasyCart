<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</head>
<nav class="navbar navbar-expand-lg navbar-light fixed-top py-3 d-block" data-navbar-on-scroll="data-navbar-on-scroll">
    <div class="container"><a class="navbar-brand d-inline-flex" href="index.php">
            <h3>🛒E-commerce</h3>
        </a>
        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item px-2"><a class="nav-link fw-medium active" aria-current="page" href="#header">Home</a></li>
                <li class="nav-item px-2"><a class="nav-link fw-medium " href="#exclusive">Exclusive!.</a></li>
                <li class="nav-item px-2"><a class="nav-link fw-medium " href="#newArrive"> New Arrival</a></li>
                <li class="nav-item px-2"><a class="nav-link fw-medium " href="#category">Men</a></li>
                <li class="nav-item px-2"><a class="nav-link fw-medium" href="#category">Women</a></li>
                <li class="nav-item px-2"><a class="nav-link fw-medium" href="#collection">Collection</a></li>
                <li class="nav-item px-2"><a class="nav-link fw-medium" href="#outlet">Outlet</a></li>
            </ul>
            <form class="d-flex">
                <a class="text-1000" href="#!" data-bs-toggle="modal" data-bs-target="#shopping-cart-modal">
                    <svg class="feather feather-shopping-cart me-3" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="9" cy="21" r="1"></circle>
                        <circle cx="20" cy="21" r="1"></circle>
                        <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                    </svg>
                </a>
                <!-- Modal -->
                <div class="modal fade" id="shopping-cart-modal" tabindex="-1" aria-labelledby="shopping-cart-modal-label">
                    <div class="modal-dialog modal-dialog-centered modal-fullscreen-sm-down">
                        <div class="modal-content">
                            <!-- Your shopping cart content here -->
                            <div class="modal-body">
                                <p class="animate__animated animate__fadeIn mb-0">Sign up now to unlock access to your shopping cart.</p>
                                <p class="animate__animated animate__fadeIn">It's quick and easy!</p>
                            </div>
                            <div class="modal-footer">
                                <p class="animate__animated animate__fadeOut mb-0">Need to register first 🙏</p>
                                <p class="animate__animated animate__fadeOut">Reload the page to close this window</p>
                            </div>
                        </div>
                    </div>
                </div>





                <style>
                    .modal-backdrop {
                        background-color: rgba(0, 0, 0, 0.5);
                    }

                    .search-container {
                        display: inline-flex;
                        align-items: center;
                        position: relative;
                    }

                    .search-container input[type="text"] {
                        position: absolute;
                        top: 100%;
                        right: 0;
                        width: 200px;
                        padding: 5px;
                        border: 1px solid #ccc;
                        border-radius: 5px;
                        transition: all 0.3s ease;
                        opacity: 0;
                        pointer-events: none;
                        z-index: 1;
                    }

                    .search-container:hover input[type="text"] {
                        opacity: 1;
                        pointer-events: auto;
                    }

                    .search-icon {
                        position: relative;
                        z-index: 2;
                    }
                </style>

                <span class="search-container">
                    <div class="search-icon feather feather-search me-3" id="search-icon" class="text-info">
                        <svg class="feather feather-search" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="11" cy="11" r="8"></circle>
                            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                        </svg>
                    </div>
                    <input type="text" class="form-control" placeholder="Search">
                </span>

                <div class="dropdown">
                    <a class="text-1000" href="#!" id="account" data-bs-toggle="dropdown" data-bs-hover="dropdown" aria-expanded="false">
                        <svg class="feather feather-user me-3" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                            <circle cx="12" cy="7" r="4"></circle>
                        </svg>
                    </a>
                    <ul class="dropdown-menu" id="item">
                        <li> <a href="account/register.php"><button class="dropdown-item" type="button">Register</button></a></li>
                        <li> <a href="account/login.php"><button class="dropdown-item" type="button">Login</button></a></li>
                    </ul>
                </div>

                <a class="text-1000" href="tel:+91">
                    <svg class="feather feather-phone me-3" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                    </svg></a>
            </form>
        </div>
    </div>
</nav>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        // Add mouseenter event listener to "Account" link
        $("#account").on("mouseenter", function() {
            // Show dropdown menu
            $("#item").show();
        });

        // Add mouseleave event listener to "dropdown-menu" element
        $("#item").on("mouseleave", function() {
            // Hide dropdown menu
            $("#item").hide();
        });

        $("#search-icon").on("mouseenter", function() {
            // Show input field
            $(this).next("input").removeClass("d-none");
        });

        // Add mouseleave event listener to input field
        $("input[type='text']").on("mouseleave", function() {
            // Hide input field
            $(this).addClass("d-none");
        });

        var myModal = new bootstrap.Modal(document.getElementById('shopping-cart-modal'), {
            backdrop: 'static',
            keyboard: false
        });

        $("#close-modal-btn").on("click", function() {
            myModal.hide();
        });
    });
</script>