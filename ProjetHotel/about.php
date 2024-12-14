<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,intial-scale=1.0">
    <title>Hotel Manager-About</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <?php  require('inc/links.php')?>
    <style>
        .box{ 
            border-top-color:var(--teal) !important;
        }
        .swiper {
            width: auto;       /* Adjust width to content */
            height: auto;      /* Adjust height to content */
        }

        .swiper-slide {

            justify-content: center;
            align-items: center;
            height: auto;      /* Allow Swiper slides to grow to match the image */
        }

        .swiper-slide img {
            display: block;    /* Prevent image collapse */
            width: auto;       /* Maintain the image's original width */
            height: auto;      /* Maintain the image's original height */
        }

    </style>

</head>
<body class="bg-light">

<?php require('inc/header.php');  ?>

<div class="my-5 px-4">
    <h2 CLASS="fw-bold   text-center">ABOUT US</h2>
    <div class="h-line bg-dark "></div>
    <p class="text-center mt-3 ">


    </p>
</div>
<div class="container">
    <div class="row justify-content-between align-items-center">
        <div class="col-lg-6 col-md-5 mb-4  order-lg-1 order-lg-1 order-2">
            <h3 class="mb-3">Welcome to GM Hotel</h3>
            <p>

                GM Hotel offers a welcoming and comfortable stay, combining modern amenities with exceptional service.
                Whether you're visiting for business or leisure, our spacious rooms and attentive staff ensure a relaxing experience.
                Located in a prime area, GM Hotel is your perfect home away from home.
            </p>
        </div>
        <div class="col-lg-5 col-md-5 mb-4  order-lg-2 order-lg-2 order-1">
            <img src="images/about/about.jpg" class="w-100">
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="row"> 
        <div class="col-lg-3 col-md-6 mb-4 px-4">
            <div class="bg-white rounded shadow p-4 border-top border-4 text-center  box">
                <img src="images/about/hotel.svg" width="70px">
                <h4 class="mt-3">100+ ROOMS</h4>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4 px-4">
            <div class="bg-white rounded shadow p-4 border-top border-4 text-center  box">
                <img src="images/about/customers.svg" width="70px">
                <h4 class="mt-3">200+ CUSTOMERS</h4>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4 px-4">
            <div class="bg-white rounded shadow p-4 border-top border-4 text-center  box">
                <img src="images/about/rating.svg" width="70px">
                <h4 class="mt-3">150+ REVIEWS</h4>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4 px-4">
            <div class="bg-white rounded shadow p-4 border-top border-4 text-center  box">
                <img src="images/about/staff.svg" width="70px">
                <h4 class="mt-3">200+ STAFFS</h4>
            </div>
        </div>
    </div>
</div>

<h3 class="my-5 fw-bold text-center">Management Team</h3>
 <div class="container px-4">
     <div class="swiper mySwiper ">
         <div class="swiper-wrapper mb-5">
             <?php
                $about_r=selectAll('team_details');
                $path=ABOUT_IMG_PATH;
                while($row=mysqli_fetch_assoc($about_r)){
                    echo <<< data
                          <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                            <img src="$path$row[picture]" class="w-100">
                             <h5 class="mt-2">$row[name]</h5>
                          </div>
                        data;
                }

             ?>

         </div>
         <div class="swiper-pagination"></div>
     </div>

 </div>


<?php require('inc/footer.php')?>



<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper(".mySwiper", {
        spaceBetween: 40,
        pagination: {
            el: ".swiper-pagination",
        },
        breakpoints:{
            320:{
                slidesPerView:1,
            },
            640:{
                slidesPerView:1,
            },
            768:{
                slidesPerView:3,
            },
            1024:{
                slidesPerView:3,
            },
        }

    });
</script>
</body>
</html>






























