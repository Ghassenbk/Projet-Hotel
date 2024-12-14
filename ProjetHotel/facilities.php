<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,intial-scale=1.0">
    <title>Hotel Manager-Facilities</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <?php  require('inc/links.php')?>
    <style>
        .pop:hover{
            border-top-color:var(--teal) !important;
            transform: scale(1.03);
            transition: all 0.3s;
        }
    </style>

</head>
<body class="bg-light">

<?php require('inc/header.php');  ?>

<div class="my-5 px-4">
    <h2 CLASS="fw-bold   text-center">OUR FACILITIES</h2>
    <div class="h-line bg-dark "></div>
    <p class="text-center mt-3 ">
        Welcome to GM HOTEL here we offer a lot of facilities
        you can check yoursel<br> hope you find what you want

    </p>

</div>

<div class="container">
    <div class="row">
        <?php
            $res=selectAll('facilities');
            $path= FACILITIES_IMG_PATH;

            while($row=mysqli_fetch_assoc($res)){
                echo <<< data
                            <div class="col-lg-4 col-md-6 mb-5 px-4">
                                 <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop" >
                                     <div class="d-flex align-items-center mb-2">
                                         <img src="$path$row[icon]" width="40px">
                                        <h5 class="m-0 ms-3">$row[name]</h5>
                                    </div>
                                    <p>$row[description]</p>
                                </div>
                            </div>
                        data;
            }

        ?>
    </div>
</div>

<?php require('inc/footer.php')?>



</body>
</html>





























