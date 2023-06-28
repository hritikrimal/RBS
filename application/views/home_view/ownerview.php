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
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="#"> List Your Property
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active me-2" aria-current="page" href="#">Home</a>
                    </li>
                </ul> -->
            <div class="d-flex justify-content-end">
                <button type="button" id="logout_button" class="btn btn-outline-dark shadow-none me-lg-3 me-2">
                    Logout
                </button>
            </div>
            <!-- </div> -->
        </div>
    </nav>

    <div class="container">



        <div class="modal" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Modal body text goes here.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mt-3">
            <div class="card-header">
                Property Information
            </div>
            <div class="card-body">
                <form class="row g-3 needs-validation " novalidate>
                    <div class="col-md-3">
                        <label for="propertytypes" class="form-label">Property Types</label>
                        <select class="form-select" id="propertytypes" required>
                            <option selected disabled value="">Choose...</option>
                            <option>Hotel</option>

                            <option>Home Stay</option>
                        </select>

                    </div>

                    <div class="col-md-4">
                        <label for="propertyname" class="form-label">Property Name</label>
                        <input type="text" class="form-control" id="propertyname" aria-describedby="inputGroupPrepend" required>

                    </div>

                    <div class="col-md-3">
                        <label for="validationCustom04" class="form-label">city</label>
                        <select class="form-select" id="validationCustom04" required>
                            <option selected disabled value="">Choose...</option>
                            <option>...</option>
                        </select>

                    </div>
                    <div class="col-md-4">
                        <label for="propertyaddress" class="form-label">Address</label>
                        <input type="text" class="form-control" id="propertyaddress" required>

                    </div>
                    <div class="col-md-3">
                        <label for="validationCustom05" class="form-label">Street Name</label>
                        <input type="text" class="form-control" id="validationCustom05" required>

                    </div>
            </div>
            </form>
        </div>
        <div class="card mt-3">
            <div class="card-header">
                Property Details
            </div>
            <div class="card-body">
                <form class="row g-3 needs-validation " novalidate>
                    <div class="col-md-3">
                        <label for="bedtypes" class="form-label">Bed Room Types</label>
                        <select class="form-select" id="bedtypes" required>
                            <option selected disabled value="">Choose...</option>
                            <option>Twin Bed</option>
                            <option>Full Bed</option>
                            <option>Queen Bed</option>
                            <option>King Bed</option>

                        </select>

                    </div>

                    <div class="col-md-3">
                        <label for="livingroom" class="form-label">Living Room</label>
                        <input type="text" class="form-control" id="livingroom" aria-describedby="inputGroupPrepend" required>

                    </div>
                    <div class="col-md-3">
                        <label for="numberofguest" class="form-label">Number of Guest</label>
                        <input type="text" class="form-control" id="numberofguest" required>

                    </div>
                    <div class="col-md-3">
                        <label for="numberofbed" class="form-label">Number of Bed</label>
                        <input type="text" class="form-control" id="numberofbed" required>

                    </div>
                    <div class="col-md-12">
                        <label for="numberofbed" class="form-label">Number of Bed</label><br>
                        <input type="checkbox" name="garden" value="garden" id="numberofbed"><span class="pl-1">
                            garden
                        </span> &nbsp;

                        <input type="checkbox" name="bar" value=" bar" id="numberofbed"><span class="pl-1">
                            bar
                        </span> &nbsp;
                        <input type="checkbox" name="terrace" value="terrace" id="numberofbed"><span class="pl-1">
                            terrace
                        </span> &nbsp;
                        <input type="checkbox" name="hottub" value="hottub" id="numberofbed"><span class="pl-1">
                            hottub
                        </span> &nbsp;
                        <input type="checkbox" name="heating" value="heating" id="numberofbed"><span class="pl-1">
                            heating
                        </span> &nbsp;
                        <input type="checkbox" name="freewifi" value="freewifi" id="numberofbed"><span class="pl-1">
                            freewifi
                        </span> &nbsp;
                        <input type="checkbox" name="airconditioning" value="airconditioning" id="numberofbed"><span class="pl-1">
                            airconditioning
                        </span> &nbsp;
                        <input type="checkbox" name="swimmingpool" value="swimmingpool" id="numberofbed"><span class="pl-1">
                            swimmingpool
                        </span> &nbsp;
                        <input type="checkbox" name="electricvechiclecharging" value="electricvechiclecharging" id="numberofbed"><span class="pl-1">
                            electricvechiclecharging
                        </span> &nbsp;

                    </div>
                    <div class="col-md-12">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                            <label class="form-check-label" for="flexSwitchCheckChecked">Checked switch checkbox input</label>
                        </div>
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


        <!-- script for this page -->
        <script>
            $(document).ready(function() {

            });
        </script>


</body>



</html>