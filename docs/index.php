<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Africa Poles & Timber</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/199e920e4f.js" crossorigin="anonymous"></script>
    
    <link href="styles/nav.css" rel="stylesheet">
    <link href="styles/featured.css" rel="stylesheet">
    <link href="styles/footer.css" rel="stylesheet">
    <link href="styles/responsive.css" rel="stylesheet">

    <!-- Bootstrap 5.3.6 CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <header class="bg-header">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark">
                <img src="img/Africa Poles Logo B Removed.png" alt="nav-logo" id="logo" class="d-inline-block align-text-top" style="width: 100px; height: 100px;">
                <a class="navbar-brand" href="#">Africa Poles & Timber</a>

                <!-- menu dropdown -->
                 <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                         <span class="navbar-toggler-icon"></span>
                 </button>

                <div class="collapse navbar-collapse justify-content-end" id="navbar">
                    <div class="dropdown show drop ms-auto">
                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="Menu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Menu
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" id="menu-bg" aria-labelledby="Menu">
                            <li><a class="dropdown-item" href="/">Home</a></li>
                            <li><a class="dropdown-item" href="about.php">About Us</a></li>
                            <li><a class="dropdown-item" href="products.php">Products</a></li>
                            <li><a class="dropdown-item" href="contact.php">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <!-- we deliver-->
     <div class="delivery-bg">
         <div class="container" id="delivery-section">
            <div class="d-flex align-items-center justify-content-center">
                <i class="fa-solid fa-truck-monster" style="font-size: 1.5rem;"></i>
                <hr class="mx-2" style="width: 50px; height: 2px; background-color: #000;">
                <h2 class="text-center">We Deliver</h2>
                <hr class="mx-2" style="width: 50px; height: 2px; background-color: #000;">
                <i class="fa-solid fa-truck-monster" style="font-size: 1.5rem;"></i>
            </div>
         </div>
     </div>
     <!-- slideshow section -->
      
    <div class="mx-auto p-4 bg-black" id="slide-show">
            <h1 class="text-3xl font-bold text-center mb-6 text-gray-800">

           <div class="my-carousel"data-bs-ride="carousel" id="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/slideshow/compost.jpg" class="d-block w-100" alt="Compost">
                    </div>
                    <div class="carousel-item">
                        <img src="img/slideshow/delivery.jpg" class="d-block w-100" alt="Delivery">
                    </div>
                    <div class="carousel-item">
                        <img src="img/slideshow/lin-tanks.jpg" class="d-block w-100" alt="lin-tanks">
                    </div>
                    <div class="carousel-item">
                        <img src="img/slideshow/pole-yard.jpg" class="d-block w-100" alt="Pole Yard">
                    </div>
                    <div class="carousel-item">
                        <img src="img/slideshow/poles-offload-1.jpg" class="d-block w-100" alt="Poles Offload">
                    </div>
                    <div class="carousel-item">
                        <img src="img/slideshow/poles-offload.jpg" class="d-block w-100" alt="Poles Offload 2">
                    </div>
                    <div class="carousel-item">
                        <img src="img/slideshow/poles-ontruck.jpg" class="d-block w-100" alt="Poles on truck">
                    </div>
                    <div class="carousel-item">
                        <img src="img/slideshow/ridging.jpg" class="d-block w-100" alt="Ridging">
                    </div>
                    <div class="carousel-item">
                        <img src="img/slideshow/roof-tiles.jpg" class="d-block w-100" alt="Harvey Roof Tiles">
                    </div>
                    <div class="carousel-item">
                        <img src="img/slideshow/timber.jpg" class="d-block w-100" alt="Timber">
                    </div>
                    <div class="carousel-item">
                        <img src="img/slideshow/waxol.jpg" class="d-block w-100" alt="Waxol">
                    </div>
                </div>
            </div>
    </div>
    


    <!-- featured section-->
         <div class= "col-md-8 mx-auto">
            <div class= "row justify-content-center mt-4">
                <div class= "col-md-3 mx-auto">
                    <h4> CCA Treaed Poles </h4>
                    <img src="img/cca-treated-poles.jpg" alt=" CCA Treated Poles" id="images"/>
                    <button type= "button" class= "btn btn-success" data-toggle= "modal" data-target= "details-1">
                        Details </button>
                </div>

                <div class= "col-md-3 mx-auto">
                    <h4> Laths & Droppers </h4>
                    <img src="img/lathsresize.jpg" alt="Laths/Droppers" id="images"/>
                    <button type= "button" class= "btn btn-success" data-toggle= "modal" data-target= "details-2">
                        Details </button>
                </div>

                  <div class= "col-md-3 mx-auto">
                    <h4> Others</h4>
                    <img src="img/others.jpg" alt=" Others" id="images"/>
                    <button type= "button" class= "btn btn-success" data-toggle= "modal" data-target= "details-3">
                        Details </button>
                </div>
           </div>
         </div>

         <!-- Footer -->
            <footer class="bg-dark text-white text-center py-3" id="footer">
                <div class="container">
                    <div class="footer-logo mb-3">
                        <img src="img/Africa Poles Logo B Removed.png" alt="footer-logo" id="footer-logo" class="d-inline-block align-text-top" style="width: 80px; height: 80px;">
                        <h5>Africa Poles & Timber</h5>
                    <p>Follow us on:<br>
                    <div class="social-icons">
                        <a href="https://www.facebook.com/houtkraalnigel" class="text-white"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.linkedin.com/in/morne-symington" class="text-white"><i class="fa-brands fa-linkedin"></i></a>
                        <a href="https://wa.me/+27827965072" class="text-white"><i class="fab fa-whatsapp"></i></a>
                        <a href="mailto:africapoles@gmail.com" class="text-white"><i class="fa-solid fa-envelope"></i></a>
                    </div>
                    </p>
                    <p>&copy; 2025 Vrot Tamatie Website Developer All rights reserved</p>
                </div>
                    
    <!-- Bootstrap 5.3.6 JS Bundle (with Popper) -->
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
