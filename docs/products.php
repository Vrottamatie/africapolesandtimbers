<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/199e920e4f.js" crossorigin="anonymous"></script>
    
    <link href="styles/nav.css" rel="stylesheet">
    <link href="styles/featured.css" rel="stylesheet">
    <link href="styles/footer.css" rel="stylesheet">
    <link href="styles/about.css" rel="stylesheet">
    <link href="styles/responsive.css" rel="stylesheet">
    <!-- Bootstrap 5.3.6 CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <header class="bg-header">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark">
                <img src="img/Africa Poles Logo B Removed.png" alt="nav-logo" id="logo" class="d-inline-block align-text-top" style="width: 100px; height: 100px;">
                <a class="navbar-brand" href="#">Products</a>

                <!-- ADDED: Bootstrap Toggler Button for Hamburger Menu -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar"
                    aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- menu dropdown -->
                <div class="collapse navbar-collapse justify-content-end" id="navbar">
                    <div class="dropdown show drop ms-auto">
                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="Menu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Menu
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" id="menu-bg" aria-labelledby="Menu">
                            <li><a class="dropdown-item" href="index.php">Home</a></li>
                            <li><a class="dropdown-item" href="about.php">About Us</a></li>
                            <li><a class="dropdown-item" href="products.php">Products</a></li>
                            <li><a class="dropdown-item" href="contact.php">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>

     <!-- featured section-->
         <div class= "col-md-8 mx-auto">
            <div class= "row justify-content-center mt-4">
                <div class= "col-md-3 mx-auto">
                    <h4> CCA Treaed Poles </h4>
                    <img src="img/cca-treated-poles.jpg" alt=" CCA Treated Poles" id="images"/>
                    <a class="cca-treated-poles" href="ccatreatedpoles.php"><button type= "button" class= "btn btn-success" data-toggle= "modal" data-target= "details-1">
                        Details </button></a>
                </div>

                <div class= "col-md-3 mx-auto">
                    <h4> Laths & Droppers </h4>
                    <img src="img/lathsresize.jpg" alt="Laths/Droppers" id="images"/>
                    <a class="laths-droppers" href="laths-droppers.php"><button type= "button" class= "btn btn-success" data-toggle= "modal" data-target= "details-1">
                        Details </button></a>
                </div>

                  <div class= "col-md-3 mx-auto">
                    <h4> Others</h4>
                    <img src="img/others.jpg" alt=" Others" id="images"/>
                   <a class="other" href="other.php"><button type= "button" class= "btn btn-success" data-toggle= "modal" data-target= "details-1">
                        Details </button></a>
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
