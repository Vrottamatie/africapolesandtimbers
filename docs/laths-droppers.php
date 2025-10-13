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
    <!-- Bootstrap 5.3.6 CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

     <!-- featured section-->
         <div class= "col-md-8 mx-auto">
            <div class= "row justify-content-center mt-4">
                <div class= "col-md-3 mx-auto">
                    <h4> Laths </h4>
                    <img src="img/lathsresize.jpg" alt=" CCA Treated Poles" id="images"/>
                    <button type= "button" class= "btn btn-primary" data-bs-toggle= "modal" data-bs-target= "#detailsModal">
                        Details </button>
                </div>

                        <!-- the modal structure -->
                         <div class="modal fade" id="detailsModal" tabindex="-1" aria-labelledby="detailsModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="detailsModalLabel">CCA Treated Poles</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <h4> Diameter: 20mm-32mm<h4>
                                        <p>The thickness of each pole (measured at<br>
                                           the widest part) is between 2cm & 3.2cm.<br>
                                           Since wood is a natural material, not<br>
                                           every pole will be exactly the same<br>
                                           thickness - they fall within that range.</p>
                                        <h4> Length:<h4>
                                            <ul>
                                                <li> 3.0m</li>
                                                <li> 3.6m</li>
                                                <li> 4.5m</li>
                                            </ul>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                         </div>

                <div class= "col-md-3 mx-auto">
                    <h4> Droppers </h4>
                    <img src="img/lathsresize.jpg" alt="Laths/Droppers" id="images"/>
                    <button type= "button" class= "btn btn-primary" data-bs-toggle= "modal" data-bs-target= "#detailsModal-1">
                        Details </button>
                </div>
                  <!-- the modal structure -->
                         <div class="modal fade" id="detailsModal-1" tabindex="-1" aria-labelledby="detailsModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="detailsModalLabel">CCA Treated Poles</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <h4> Diameter: 32mm-50mm<h4>
                                        <p>The thickness of each pole (measured at<br>
                                           the widest part) is between 3.2cm & 5cm.<br>
                                           Since wood is a natural material, not<br>
                                           every pole will be exactly the same<br>
                                           thickness - they fall within that range.</p>
                                        <h4> Length:<h4>
                                            <ul>
                                                <li> 1.2m</li>
                                                <li> 1.5m</li>
                                                <li> 1.8m</li>
                                                <li> 2.1m</li>
                                                <li> 2.4m</li>
                                            </ul>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                         </div>
              
    <!-- Bootstrap 5.3.6 JS Bundle (with Popper) -->
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
