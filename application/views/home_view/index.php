<!-- css for this page  -->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale =1.0">
    <title>Room Booking</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merienda&family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <link rel="stylesheet" type="text/css" href="assets/css/welcomepage.css">
    <!-- script for js and jquery -->


</head>

<body>
    <!-- Nab Bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="register.php">Room Booking</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active me-2" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-2" href="#">Rooms</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-2" href="#">Contact us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-2" href="#">About us</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Categories
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                </ul>
                <div class="d-flex">
                    <button type="button" id="property_button" class="btn  btn-outline-dark shadow-none me-lg-3 me-2">
                        List Your Property
                    </button>

                </div>
            </div>
        </div>
    </nav>
    <!-- Login Model -->
    <div class="modal fade" id="propertymodel" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <h5 class="modal-title">
                            <i class="bi bi-person-circle"></i> Login
                        </h5>
                        <button type="button" class="btn-close" id="loin_cross" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">


                        <form>
                            <div class="mb-3">
                                <label for="Email1" class="form-label">Email address</label>
                                <input type="email" class="form-control log_in" id="Email1" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="Password1" class="form-label">Password</label>
                                <input type="password" class="form-control log_in" id="Password1">
                            </div><span>Not Register yet</span>
                            <button type="button" id="register_btn" class="btn "><u>Register Here !</u></button>

                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" id="login_close" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" id="login_btn" class="btn btn-primary">Login</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <!-- register Model-->
    <div class="modal fade" id="registermodel" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <h5 class="modal-title">
                            <i class="bi bi-person-circle"></i> Register
                        </h5>
                        <button type="button" id="reg_cross" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">


                        <form id="save_form">
                            <div class="mb-3">
                                <label for="Name" class="form-label">Name</label>
                                <input type="text" class="form-control register" id="Name" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                <input type="email" class="form-control register" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputContact1" class="form-label">Contact</label>
                                <input type="number" class="form-control register" id="exampleInputContact1" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInpuAddress1" class="form-label">Address</label>
                                <input type="text" class="form-control register" id="exampleInpuAddress1" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input type="password" class="form-control register" id="exampleInputPassword1">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputConfirmPassword1" class="form-label">Confirm Password</label>
                                <input type="password" class="form-control register" id="exampleInputConfirmPassword1">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" id="register_close" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" id="register" class="btn btn-primary">Register</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <!-- slider -->
    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="image/img1.jpg" class="d-block w-100" style="height: 350px !important;" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="image/img1.jpg" class="d-block w-100" style="height: 350px !important;" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="image/img1.jpg" class="d-block w-100" style="height: 350px !important;" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Booking form -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12 bg-white shadow p-4 rounded">
                <h5 class="mb-4">Check Booking Availability</h5>
                <form>
                    <div class="row align-items-end">

                        <div class="row">
                            <div class="col-lg-2 mb-3 mx-auto">
                                <label class="form-label" style="font-weight:500;">Place</label>
                                <input type="text" class="form-control shadow-none">
                            </div>
                            <div class="col-lg-2 mb-3">
                                <label class="form-label" style="font-weight:500;">Check-in</label>
                                <input type="date" class="form-control shadow-none">
                            </div>
                            <div class="col-lg-2 mb-3">
                                <label class="form-label" style="font-weight:500;">Check-out</label>
                                <input type="date" class="form-control shadow-none">
                            </div>
                            <div class="col-lg-2 mb-2">
                                <label class="form-label" style="font-weight:500;">Adult</label>
                                <select class="form-select shadow-none">

                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="col-lg-2 mb-2">
                                <label class="form-label" style="font-weight:500;">Children</label>
                                <select class="form-select shadow-none">

                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="col-lg-1 mt-4">
                                <button type="Submit" class="btn text-white shadow-none custom-bg">Submit</button>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
    <!--Our Rooms-->
    <div class="" <br><br>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.7.0.slim.js" integrity="sha256-7GO+jepT9gJe9LB4XFf8snVOjX3iYNb0FHYr5LI1N5c=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="assets/js/welcomepage.js"></script>

        <!-- script for this page -->



</body>



</html>