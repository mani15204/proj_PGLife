<?php  include_once 'header.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="./CSS/property_list.css" />
</head>
<body>
    
</body>
</html>
    <!-- breadcrumb -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <a href="./index.php" class="breadcrumb-item"> Home </a>
            <a href="#" class="breadcrumb-item active"> Mumbai </a>
        </ol>
    </nav>


    <div class="site-content mx-auto" style="max-width: 800px; margin-top: 5rem !important;">
        <!-- PG Filtering features -->
        <div class="col-12  d-flex justify-content-around">
            <a href="#" class="d-md-flex justify-content-center align-items-center filter-button">
                <div style="display: flex; justify-content: center;"> 
                    <img src="./img/filter.png" class="filter-logos"/> 
                </div>
                <p  class="ms-md-2 my-2 filter-word"> Filter </p>
            </a>
            <a href="#" class="d-md-flex justify-content-center align-items-center filter-button">
                <div style="display: flex; justify-content: center;"> 
                    <img src="./img/desc.png" class="filter-logos"/> 
                </div>
                <p  class="ms-md-2 my-2 filter-word"> Highest rent first </p>
            </a>
            <a href="#" class="d-md-flex justify-content-center align-items-center filter-button">
                <div style="display: flex; justify-content: center;"> 
                    <img src="./img/asc.png" class="filter-logos"/> 
                </div>
                <p class="ms-md-2 my-2 filter-word"> Lowest rent first </p>
            </a>
        </div>

        <!-- PG cards -->
        <!--<div class="property-card row col-12 mx-auto mt-3">
            <div class="row">
                <div class="col-4 row-8 mt-2" > 
                    <img class="pg-image" width="100%" src="./img/properties/1/1d4f0757fdb86d5f.jpg" /> 
                </div>
                <div class="col-8" style="height: 220px"> 
                    <div class="row-2">
                        <div class="star-container mt-1 d-flex justify-content-between">
                            <div>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                            </div>
                            <div style="text-align: center;">
                                <i class="far fa-heart"></i>
                                <p style="font-size: 10px;"> 3 interested </p>
                            </div>
                        </div>
                    </div>
                    <div class="row-3">
                        <h5 class="property-name"> Navkar Paying Guest </h5>
                        <p class="property-address"> 44, Juhu Scheme, Juhu, Mumbai, Maharashtra 400058 </p>
                        <img class="gender-logo" src="./img/male.png" />
                    </div>
                    <div class="row-4 d-flex justify-content-between">
                        <div class="d-flex align-items-center">
                            <div class="rent"> Rs. 9,500/- </div>
                            <div class="rent-unit"> per month </div>
                        </div>
                        <div>
                            <button type="button" class="btn btn-primary"> View </button> 
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>-->

        <div class="property-card mt-5 row mx-auto">
            <div class="col-12 col-sm-4 d-flex align-items-center" style="height: 220px;">
                <img class="pg-image" width="100%" src="./img/properties/1/1d4f0757fdb86d5f.jpg" />
            </div>
            <div class="col-sm-8 d-flex flex-column justify-content-center" style="height: 220px;">
                <div class="star-container d-flex justify-content-between mt-2" style="height: 20%">
                    <div style>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-half"></i>
                    </div>
                    <div style="text-align: center;">
                        <i class="heart-icon far fa-heart"></i>
                        <p style="font-size: 10px;"> 3 interested </p>
                    </div>
                </div>
                <div class="d-flex flex-column justify-content-center" style="height: 60%;">
                    <div>
                        <h5 class="property-name"> Navkar Paying Guest </h5>
                        <p class="property-address"> 44, Juhu Scheme, Juhu, Mumbai, Maharashtra 400058 </p>
                    </div>
                    <div> <img class="gender-logo" src="./img/male.png" /> </div>
                    
                </div>
                <div class="d-flex justify-content-between align-items-center flex-column-whensm" style="height: 20%">
                    <div class="d-flex align-items-center">
                        <div class="rent"> Rs. 9,500/- </div>
                        <div class="rent-unit"> per month </div>
                    </div>
                    <div>
                        <a class="btn btn-primary" href="./property_detail.php"> View </a> 
                    </div>
                </div>
            </div>
        </div>


        <div class="property-card mt-5 row mx-auto">
            <div class="col-12 col-sm-4 d-flex align-items-center" style="height: 250px;">
                <img class="pg-image" width="100%" src="./img/properties/1/eace7b9114fd6046.jpg" /> 
            </div>
            <div class="col-sm-8 d-flex flex-column justify-content-center" style="height: 250px;">
                <div class="star-container d-flex justify-content-between mt-2" style="height: 20%">
                    <div>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                    </div>
                    <div style="text-align: center;">
                        <i class="heart-icon far fa-heart"></i>
                        <p style="font-size: 10px;"> 6 interested </p>
                    </div>
                </div>
                <div class="d-flex flex-column justify-content-center" style="height: 60%;">
                    <div>
                        <h5 class="property-name"> Ganapati Paying Guest </h5>
                        <p class="property-address"> Police Beat, Sainath Complex, Besides, SV Rd, Daulat Nagar, Borivali East, Mumbai - 400066 </p>
                    </div>    
                    <div> <img class="gender-logo" src="./img/male.png" /><div class="nav-vl" style="display: inline-block; margin: 0px auto; height: 30px;"><img class="gender-logo" src="./img/female.png" /></div> </div>  
                </div>
                <div class="d-flex justify-content-between align-items-center flex-column-whensm" style="height: 20%">
                    <div class="d-flex align-items-center">
                        <div class="rent"> Rs. 8,500/- </div>
                        <div class="rent-unit"> per month </div>
                    </div>
                    <div>
                        <a class="btn btn-primary" href="./property_detail.php"> View </a> 
                    </div>
                </div>
            </div>
        </div>

        <div class="property-card mt-5 row mx-auto">
            <div class="col-12 col-sm-4 d-flex align-items-center" style="height: 250px;">
                <img class="pg-image" width="100%" src="./img/properties/1/46ebbb537aa9fb0a.jpg" /> 
            </div>
            <div class="col-sm-8 d-flex flex-column justify-content-center" style="height: 250px;">
                <div class="star-container d-flex justify-content-between mt-2" style="height: 20%">
                    <div>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-half"></i>
                        <i class="bi bi-star"></i>
                    </div>
                    <div style="text-align: center;">
                        <i class="heart-icon far fa-heart"></i>
                        <p style="font-size: 10px;"> 2 interested </p>
                    </div>
                </div>
                <div class="d-flex flex-column justify-content-center" style="height: 60%;">
                    <div>
                        <h5 class="property-name"> PG for Girls Borivali West </h5>
                        <p class="property-address"> Plot no.258/D4, Gorai no.2, Borivali West, Mumbai, Maharashtra 400092 </p>
                    </div>    
                    <div> <img class="gender-logo" src="./img/female.png" /> </div>  
                </div>
                <div class="d-flex justify-content-between align-items-center flex-column-whensm" style="height: 20%">
                    <div class="d-flex align-items-center ">
                        <div class="rent"> Rs. 8,000/- </div>
                        <div class="rent-unit"> per month </div>
                    </div>
                    <div>
                        <a class="btn btn-primary" href="./property_detail.php"> View </a> 
                    </div>
                </div>
            </div>
        </div>

        

        



    </div>
    <?php  include_once('footer.php') ?>
    <script src="./JS/common.js"></script>
</body>
</html>