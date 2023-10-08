<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My hotel-rooms</title>
    <?php require('include/links.php'); ?>
</head>

<body class="bg-light">
    <?php require('include/header.php'); ?>

    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">Our rooms</h2>
        <div class="h-line bg-dark"></div>

    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-mid-12 mb-4 mb-lg-0">
            <nav class="navbar navbar-expand-lg  rounded shadow navbar-light ">
                <div class="container-fluid flex-lg-column align-items-stretch d-inline">
                    <h4 class="mt-2">Filters</h4>
                    <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse"
                        data-bs-target="#filterDropdown" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse align-items-stretch flex-column mt-2" id="filterDropdown">
                        <div class="border p-3 rounded mb-3 bg-light">
                            <h5 class="mb-3">Check Availability</h5>
                            <label class="form-label" style="font-weight:500">Check-in</label>
                            <input type="date" class="form-control shadow-none mb-3">
                            <label class="form-label" style="font-weight:500">Check-out</label>
                            <input type="date" class="form-control shadow-none">
                        </div>
                        <div class="border p-3 rounded mb-3">
                            <h5>Facilities</h5>
                            <div class="mb-2">
                                <input type="checkbox" id="f1" class="form-check-input shadow-none">
                                <label class="form-check-label" style="font-weight:500">F-1</label>
                           </div>
                            <div class="mb-2">
                                <input type="checkbox" id="f2" class="form-check-input shadow-none">
                                <label class="form-check-label" style="font-weight:500">F-2</label>
                           </div>
                            <div class="mb-2">
                                <input type="checkbox" id="f3" class="form-check-input shadow-none">
                                <label class="form-check-label" style="font-weight:500">F-3</label>
                           </div>
                             
                        </div>
                        <div class="border p-3 rounded mb-3">
                            <h5 class="mb-3" style="font-size: 18px;">Guests</h5>
                            <div class="d-flex">
                                <div class="me-3">
                                    <label class="form-label" style="font-weight:500">Adults</label>
                                    <input type="numbers" class="form-control shadow-none mb-3">
                                </div>
                                <div>
                                    <label class="form-label" style="font-weight:500">Children</label>
                                    <input type="numbers" class="form-control shadow-none mb-3">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
</div>
            <div class="col-lg-9 col-md-12 px-4">
                <div class="card mb-4 border-0 shadow" >
                    <div class="row g-0 p-3 align-items-center">
                        <div class="col-md-5 px-lg-3 px-md-3 px">
                            <img src="images/rooms/1.jpg" class="img-fluid rounded" alt="...">
                        </div>
                        <div class="col-md-5">
                            <h5>Simple Room Name</h5>
                            <div class="features mb-3">
                                <h6 class="mb-1">Features</h6>
                                <span class="badge text-bg-light text-wrap">2 rooms</span>
                                <span class="badge text-bg-light text-wrap">1 bathroom</span>
                                <span class="badge text-bg-light text-wrap">1 balcony</span>
                            </div>
                            <div class="facilities mb-4">
                                <h6 class="mb-1">Facilities</h6>
                                <span class="badge text-bg-light text-wrap">Wifi</span>

                                <span class="badge text-bg-light text-wrap">Pool</span>

                                <span class="badge text-bg-light text-wrap">Ac</span>

                            </div>
                        </div>
                        <div class="col-md-2 text-center">
                            <h6 class="mb-4">₹200 per night</h6>
                            <a href="#" class="btn btn-sm custom-bg mb-2 w-100">Book Now</a>
                            <a href="#" class="btn btn-outline-dark btn-sm w-100">More details</a>

                        </div>
                    </div>
                </div>
                <div class="card mb-4 border-0 shadow" >
                    <div class="row g-0 p-3 align-items-center">
                        <div class="col-md-5 px-lg-3 px-md-3 px">
                            <img src="images/rooms/1.jpg" class="img-fluid rounded" alt="...">
                        </div>
                        <div class="col-md-5">
                            <h5>Simple Room Name</h5>
                            <div class="features mb-3">
                                <h6 class="mb-1">Features</h6>
                                <span class="badge text-bg-light text-wrap">2 rooms</span>
                                <span class="badge text-bg-light text-wrap">1 bathroom</span>
                                <span class="badge text-bg-light text-wrap">1 balcony</span>
                            </div>
                            <div class="facilities mb-4">
                                <h6 class="mb-1">Facilities</h6>
                                <span class="badge text-bg-light text-wrap">Wifi</span>

                                <span class="badge text-bg-light text-wrap">Pool</span>

                                <span class="badge text-bg-light text-wrap">Ac</span>

                            </div>
                        </div>
                        <div class="col-md-2 text-center">
                            <h6 class="mb-4">₹200 per night</h6>
                            <a href="#" class="btn btn-sm custom-bg mb-2 w-100">Book Now</a>
                            <a href="#" class="btn btn-outline-dark btn-sm w-100">More details</a>

                        </div>
                    </div>
                </div>
                <div class="card mb-4 border-0 shadow" >
                    <div class="row g-0 p-3 align-items-center">
                        <div class="col-md-5 px-lg-3 px-md-3 px">
                            <img src="images/rooms/1.jpg" class="img-fluid rounded" alt="...">
                        </div>
                        <div class="col-md-5">
                            <h5>Simple Room Name</h5>
                            <div class="features mb-3">
                                <h6 class="mb-1">Features</h6>
                                <span class="badge text-bg-light text-wrap">2 rooms</span>
                                <span class="badge text-bg-light text-wrap">1 bathroom</span>
                                <span class="badge text-bg-light text-wrap">1 balcony</span>
                            </div>
                            <div class="facilities mb-4">
                                <h6 class="mb-1">Facilities</h6>
                                <span class="badge text-bg-light text-wrap">Wifi</span>

                                <span class="badge text-bg-light text-wrap">Pool</span>

                                <span class="badge text-bg-light text-wrap">Ac</span>

                            </div>
                        </div>
                        <div class="col-md-2 text-center">
                            <h6 class="mb-4">₹200 per night</h6>
                            <a href="#" class="btn btn-sm custom-bg mb-2 w-100">Book Now</a>
                            <a href="#" class="btn btn-outline-dark btn-sm w-100">More details</a>

                        </div>
                    </div>
                </div>
                <div class="card mb-4 border-0 shadow" >
                    <div class="row g-0 p-3 align-items-center">
                        <div class="col-md-5 px-lg-3 px-md-3 px">
                            <img src="images/rooms/1.jpg" class="img-fluid rounded" alt="...">
                        </div>
                        <div class="col-md-5">
                            <h5>Simple Room Name</h5>
                            <div class="features mb-3">
                                <h6 class="mb-1">Features</h6>
                                <span class="badge text-bg-light text-wrap">2 rooms</span>
                                <span class="badge text-bg-light text-wrap">1 bathroom</span>
                                <span class="badge text-bg-light text-wrap">1 balcony</span>
                            </div>
                            <div class="facilities mb-4">
                                <h6 class="mb-1">Facilities</h6>
                                <span class="badge text-bg-light text-wrap">Wifi</span>

                                <span class="badge text-bg-light text-wrap">Pool</span>

                                <span class="badge text-bg-light text-wrap">Ac</span>

                            </div>
                        </div>
                        <div class="col-md-2 text-center">
                            <h6 class="mb-4">₹200 per night</h6>
                            <a href="#" class="btn btn-sm custom-bg mb-2 w-100">Book Now</a>
                            <a href="#" class="btn btn-outline-dark btn-sm w-100">More details</a>

                        </div>
                    </div>
                </div>
                <div class="card mb-4 border-0 shadow" >
                    <div class="row g-0 p-3 align-items-center">
                        <div class="col-md-5 px-lg-3 px-md-3 px">
                            <img src="images/rooms/1.jpg" class="img-fluid rounded" alt="...">
                        </div>
                        <div class="col-md-5">
                            <h5>Simple Room Name</h5>
                            <div class="features mb-3">
                                <h6 class="mb-1">Features</h6>
                                <span class="badge text-bg-light text-wrap">2 rooms</span>
                                <span class="badge text-bg-light text-wrap">1 bathroom</span>
                                <span class="badge text-bg-light text-wrap">1 balcony</span>
                            </div>
                            <div class="facilities mb-4">
                                <h6 class="mb-1">Facilities</h6>
                                <span class="badge text-bg-light text-wrap">Wifi</span>

                                <span class="badge text-bg-light text-wrap">Pool</span>

                                <span class="badge text-bg-light text-wrap">Ac</span>

                            </div>
                        </div>
                        <div class="col-md-2 text-center">
                            <h6 class="mb-4">₹200 per night</h6>
                            <a href="#" class="btn btn-sm custom-bg mb-2 w-100">Book Now</a>
                            <a href="#" class="btn btn-outline-dark btn-sm w-100">More details</a>

                        </div>
                    </div>
                </div>
                <div class="card mb-4 border-0 shadow" >
                    <div class="row g-0 p-3 align-items-center">
                        <div class="col-md-5 px-lg-3 px-md-3 px">
                            <img src="images/rooms/1.jpg" class="img-fluid rounded" alt="...">
                        </div>
                        <div class="col-md-5">
                            <h5>Simple Room Name</h5>
                            <div class="features mb-3">
                                <h6 class="mb-1">Features</h6>
                                <span class="badge text-bg-light text-wrap">2 rooms</span>
                                <span class="badge text-bg-light text-wrap">1 bathroom</span>
                                <span class="badge text-bg-light text-wrap">1 balcony</span>
                            </div>
                            <div class="facilities mb-4">
                                <h6 class="mb-1">Facilities</h6>
                                <span class="badge text-bg-light text-wrap">Wifi</span>

                                <span class="badge text-bg-light text-wrap">Pool</span>

                                <span class="badge text-bg-light text-wrap">Ac</span>

                            </div>
                        </div>
                        <div class="col-md-2 text-center">
                            <h6 class="mb-4">₹200 per night</h6>
                            <a href="#" class="btn btn-sm custom-bg mb-2 w-100">Book Now</a>
                            <a href="#" class="btn btn-outline-dark btn-sm w-100">More details</a>

                        </div>
                    </div>
                </div>
            
            </div>
        </div>
    </div>

    <?php require('include/footer.php'); ?>




</body>

</html>