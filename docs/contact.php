<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/199e920e4f.js" crossorigin="anonymous"></script>
    
    <link href="styles/nav.css" rel="stylesheet">
    <link href="styles/featured.css" rel="stylesheet">
    <link href="styles/footer.css" rel="stylesheet">
    <link href="styles/about.css" rel="stylesheet">
    <link href="styles/contact.css" rel="stylesheet">
    <link href="styles/responsive.css" rel="stylesheet">
    <!-- Bootstrap 5.3.6 CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <header class="bg-header">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark">
                <img src="img/Africa Poles Logo B Removed.png" alt="nav-logo" id="logo" class="d-inline-block align-text-top" style="width: 100px; height: 100px;">
                <a class="navbar-brand" href="#">Contact Us</a>

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

    <!--contact form-->

    <section class="contact-section d-flex justify-content-center align-items-center">
        <div class="contact-form-container p-4 rounded shadow-lg">
            <h2 class="text-center mb-4">Get in Touch</h2>
            <form action="mailto:africapoles@gmail.com" method="post" enctype="text/plain">
                <div class="mb-3">
                    <label for="name"class="form-label">Full Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter your name" required>
                </div>

                <div class="mb-3">
                    <label for="subject" class="form-label">Subject</label>
                    <input type="text" class="form-control" id="subject" placeholder="Enter subject">
                </div>

                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" id="message" rows="4" placeholder="Write your message here..." required></textarea>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-dark-blue px-4 py-2">Send Message</button>
               </div>
            </form>
        </div>
    </section>

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
