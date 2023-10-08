<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My hotel-facilities</title>
    <?php require('include/links.php'); ?>
</head>
<style>
    .bi-wifi {
      font-size: 3rem;
    }
    .pop:hover{
        border-top-color:  rgb(105, 208, 134) !important;
        transform:scale(1.04);
        transition: all 0.3s;
    }
    .box:hover{
        border-top-color: rgb(105, 208, 134) !important;
    }
</style>
<body class="bg-light">
    <?php require('include/header.php'); ?>

    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">About Us</h2>
        <div class="h-line bg-dark"></div>
        <p class="text-center mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati soluta reiciendis velit,<br> voluptates non illum consectetur ipsum asperiores atque? Facere?</p>
    </div>
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-6 col-md-5 mb-4 order-lg-1 order-md-2 order-2">
                <h3 class="mb-3">Lorem ipsum dolor sit.</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Incidunt, alias animi? Molestiae facere expedita magnam, autem dicta possimus accusamus quasi at magni a ea sunt deleniti laborum odio quam quisquam.</p>
            </div>
            <div class="col-lg-5 col-md-5 mb-4 order-lg-2 order-md-2 order-1">
                <img src="images/about/about.jpg" class="w-100" >
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="images/about/hotel.svg" width="70px" alt="">
                    <h4 class="mt-3">50+Rooms</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="images/about/customers.svg" width="70px" alt="">
                    <h4 class="mt-3">5000+Customers</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="images/about/staff.svg" width="70px" alt="">
                    <h4 class="mt-3">300+Staff</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="images/about/rating.svg" width="70px" alt="">
                    <h4 class="mt-3">3000+Ratings</h4>
                </div>
            </div>
        </div>
    </div>
    <h3 class="my-5 fw-bold h-font text-center"></h3>
    <div class="container px-4">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper mb-5">
              <div class="swiper-slide bg-white text-center over-flow-hidden rounded">
                <img src="images/about/IMG_17352.jpg" class="w-100">
                <h5 class="mt-2">Name</h5>
              </div>
              <div class="swiper-slide bg-white text-center over-flow-hidden rounded">
                <img src="images/about/IMG_17352.jpg" class="w-100">
                <h5 class="mt-2">Name</h5>
              </div>
              <div class="swiper-slide bg-white text-center over-flow-hidden rounded">
                <img src="images/about/IMG_17352.jpg" class="w-100">
                <h5 class="mt-2">Name</h5>
              </div>
              <div class="swiper-slide bg-white text-center over-flow-hidden rounded">
                <img src="images/about/IMG_17352.jpg" class="w-100">
                <h5 class="mt-2">Name</h5>
              </div>
              <div class="swiper-slide bg-white text-center over-flow-hidden rounded">
                <img src="images/about/IMG_17352.jpg" class="w-100">
                <h5 class="mt-2">Name</h5>
              </div>
              
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
          </div>

    <?php require('include/footer.php'); ?>

    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script>
       var swiper = new Swiper(".mySwiper", {
        slidesPerView:4,
        spaceBetween:40,
      pagination: {
        el: ".swiper-pagination",
        type: "progressbar",
      },
      breakpoints:{
        320:{
            slidesPerView:1,
            
        },
        640:{
            slidesPerView:1,
        },
        768:{
            slidesPerView:2,
        },
        1024:{
            slidesPerView:3
        }
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
    </script>

</body>

</html>