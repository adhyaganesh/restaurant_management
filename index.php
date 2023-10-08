<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My hotel-home</title>
  <?php require('include/links.php');?>
  <style>
    .availability-form {
      margin-top: -50px;
      z-index: 2;
      position: relative;
    }

    .bi-wifi {
      font-size: 4rem;
    }
  </style>
</head>

<body class="bg-light">
  <?php require('include/header.php');?>

  <!-- slider -->
  <div class="container-fluid px-lg-4 mt-4">
    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="images/carousel/IMG_15372.png" alt="" class="w-100 d-block">
        </div>
        <div class="swiper-slide">
          <img src="images/carousel/IMG_40905.png" alt="" class="w-100 d-block">
        </div>
        <div class="swiper-slide">
          <img src="images/carousel/IMG_55677.png" alt="" class="w-100 d-block">
        </div>
        <div class="swiper-slide">
          <img src="images/carousel/IMG_62045.png" alt="" class="w-100 d-block">
        </div>
        <div class="swiper-slide">
          <img src="images/carousel/IMG_93127.png" alt="" class="w-100 d-block">
        </div>
        <div class="swiper-slide">
          <img src="images/carousel/IMG_99736.png" alt="" class="w-100 d-block">
        </div>

      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
    </div>
  </div>

  <!-- <--availability-->

  <div class="container">
    <div class="row">
      <div class="col-lg-12 bg-white shadow p-4 rounded">
        <h5>Check booking Availability</h5>
        <form action="">
          <div class="row align-items-end">
            <div class="col-lg-3">
              <label class="form-label" style="font-weight:500">Check-in</label>
              <input type="date" class="form-control shadow-none">
            </div>
            <div class="col-lg-3">
              <label class="form-label" style="font-weight:500">Check-Out</label>
              <input type="date" class="form-control shadow-none">
            </div>
            <div class="col-lg-3">
              <label class="form-label" style="font-weight:500">Number of adults</label>
              <select class="form-select shadow-none" aria-label="Default select example">
                <option selected>Open this select menu</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>
            <div class="col-lg-2">
              <label class="form-label" style="font-weight:500">Number of childern</label>
              <select class="form-select shadow-none" aria-label="Default select example">
                <option selected>Open this select menu</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>
            <div class="col-lg-1">
              <button type="submit" class="btn text-black shadow-none custom-bg mt-2">Submit</button>
            </div>
        </form>
      </div>
    </div>
  </div>

  <!-- rooms -->

  <h2 class="h-font fw-bold mt-5 text-center pt-4">Rooms</h2>
  <div class="container ">
    <div class="row">
      <div class="col-lg-4 col-md-6 my-3">
        <div class="card border-0 shadow ml-4" style="max-width: 350px; margin: auto;">
          <img src="images/rooms/IMG_11892.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <h6>₹200 per night</h6>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
              content.</p>
            <div class="features mb-4">
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
            <div class="ratings">
              <h6 class="mb-1">Ratings</h6>
              <span class="badge text-bg-light text-wrap mb-2">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
              </span>
            </div>
            <div class="d-flex justify-content-between">
              <a href="#" class="btn btn-sm custom-bg">Book Now</a>
              <a href="#" class="btn btn-outline-dark btn-sm">More details</a>

            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 my-3">
        <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
          <img src="images/rooms/IMG_11892.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <h6>₹200 per night</h6>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
              content.</p>
            <div class="features mb-4">
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
            <div class="ratings">
              <h6 class="mb-1">Ratings</h6>
              <span class="badge text-bg-light text-wrap mb-2">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
              </span>
            </div>
            <div class="d-flex justify-content-between">
              <a href="#" class="btn btn-sm custom-bg">Book Now</a>
              <a href="#" class="btn btn-outline-dark btn-sm">More details</a>

            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 my-3">
        <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
          <img src="images/rooms/IMG_11892.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <h6>₹200 per night</h6>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
              content.</p>
            <div class="features mb-4">
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
            <div class="ratings">
              <h6 class="mb-1">Ratings</h6>
              <span class="badge text-bg-light text-wrap mb-2">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
              </span>
            </div>
            <div class="d-flex justify-content-between">
              <a href="#" class="btn btn-sm custom-bg">Book Now</a>
              <a href="#" class="btn btn-outline-dark btn-sm">More details</a>

            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-12 text-center mt-5">
        <a href="#" class="btn btn-dark">See More</a>
      </div>

    </div>
  </div>


  <!-- facilities -->
  <h2 class="h-font fw-bold mt-5 text-center pt-4">Facilities</h2>
  <div class="container ">
    <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
      <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
        <i class="bi bi-wifi font-size"></i>
        <h5>wifi</h5>
      </div>
      <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
        <i class="bi bi-wifi font-size"></i>
        <h5>wifi</h5>
      </div>
      <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
        <i class="bi bi-wifi font-size"></i>
        <h5>wifi</h5>
      </div>
      <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
        <i class="bi bi-wifi font-size"></i>
        <h5>wifi</h5>
      </div>
      <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
        <i class="bi bi-wifi font-size"></i>
        <h5>wifi</h5>
      </div>
      <div class="col-lg-12 text-center mt-5">
        <a href="#" class="btn btn-dark">See More</a>
      </div>
    </div>
  </div>

  <!-- testimonuls -->
  <h2 class="h-font fw-bold mt-5 text-center pt-4">Test</h2>
  <div class="container">
    <div class="swiper mySwiper">
      <div class="swiper-wrapper mb-1">

        <div class="swiper-slide bg-white p-4">
          <div class="profile d-flex align-items-center p-4">
            <i class="bi bi-star-fill"></i>
            <h1 class="ms-2 m-0">Random User</h1>
          </div>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis, culpa nesciunt? Nulla corporis odit
            tenetur officiis, consequatur ducimus! Fugiat, beatae!</p>
          <div class="ratings">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
          </div>
        </div>
        <div class="swiper-slide bg-white p-4">
          <div class="profile d-flex align-items-center p-4">
            <i class="bi bi-star-fill"></i>
            <h1 class="ms-2 m-0">Random User</h1>
          </div>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis, culpa nesciunt? Nulla corporis odit
            tenetur officiis, consequatur ducimus! Fugiat, beatae!</p>
          <div class="ratings">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
          </div>
        </div>
        <div class="swiper-slide bg-white p-4">
          <div class="profile d-flex align-items-center p-4">
            <i class="bi bi-star-fill"></i>
            <h1 class="ms-2 m-0">Random User</h1>
          </div>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis, culpa nesciunt? Nulla corporis odit
            tenetur officiis, consequatur ducimus! Fugiat, beatae!</p>
          <div class="ratings">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
          </div>
        </div>

        <div class="swiper-pagination"></div>
      </div>
    </div>



    <!-- reach us -->
    <h2 class="h-font fw-bold mt-2 text-center pt-3 ">Reach us</h2>
    <di class="container">
      <div class="row">
        <div class="col-lg-8 col-md-8 p-4 bg-white rounded">
          <iframe class="w-100 rounded" height="350" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15549.372798517963!2d77.539951877811!3d13.013803303250103!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae3d7115e2a667%3A0xf3f2ccdee4063552!2sMahalakshmi%20Layout%2C%20Bengaluru%2C%20Karnataka!5e0!3m2!1sen!2sin!4v1688360707433!5m2!1sen!2sin"style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="col-lg-4 col-md-4">
          <div class="bg-white rounded mb-4">
            <h5>Call us</h5>
            <i class="bi bi-telephone-plus-fill"></i><a href="tel : +91987654321"
              class="d-inline-block mb-2 text-decoration-none text-dark">+91987654321</a>
          </div>
          <div class="bg-white rounded mb-4">
            <h5>Follow us</h5>
            <a href="#" class="d-inline-block mb-2 text-decoration-none text-dark">
              <span class="badge bg-light text-dark fs-6 p-2">
                <i class="bi bi-twitter me-1"></i>Twitter</span>
            </a>
            <br>
            <a href="#" class="d-inline-block mb-2 text-decoration-none text-dark">
              <span class="badge bg-light text-dark fs-6 p-2">
                <i class="bi bi-instagram me-1"></i>Instagram</span>
            </a>
            <br>
            <a href="#" class="d-inline-block mb-2 text-decoration-none text-dark">
              <span class="badge bg-light text-dark fs-6 p-2">
                <i class="bi bi-facebook me-1"></i>Facebook</span>
            </a>
            <br>
          </div>
          <!-- <div class="bg-white rounded mb-4">
            <h5>Call us</h5>
            <i class="bi bi-telephone-plus-fill"></i><a href="#"
              class="d-inline-block mb-2 text-decoration-none text-dark">+91987654321</a>
          </div> -->

        </div>
      </div>
    </di>
    <?php require('include/footer.php');?>

    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
      crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
      var swiperCarousel = new Swiper(".mySwiper", {
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: {
          delay: 2500,
          disableOnInteraction: false,
        },
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });


      var swiperTestimonials = new Swiper(".swiper-testimonials", {
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: "auto",
        loop: true,
        coverflowEffect: {
          rotate: 50,
          stretch: 0,
          depth: 100,
          modifier: 1,
          slideShadows: true,
        },
        pagination: {
          el: ".swiper-pagination",
        },

      });
    </script>




</body>

</html>



