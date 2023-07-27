<?php  include_once 'header.php'; include_once './includes/dbh.inc.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Property Detail</title>
    <link rel="stylesheet" href="./CSS/property_detail.css" />
</head>
<body>
    <!-- BREADCRUMB -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <a href="./index.php" class="breadcrumb-item"> Home </a>
            <a href="./property_list.php" class="breadcrumb-item"> Mumbai </a>
            <a href="#" class="breadcrumb-item active"> Ganapati Paying Guest </a>
        </ol>
    </nav>

    <!-- CAROUSEL-->
    <div id="carouselExample4" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExample4" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"> </button>
            <button type="button" data-bs-target="#carouselExample4" data-bs-slide-to="1" aria-label="Slide 2"> </button>
            <button type="button" data-bs-target="#carouselExample4" data-bs-slide-to="2" aria-label="Slide 3"> </button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" >
                <img class="carousel-img" src="./img/properties/1/1d4f0757fdb86d5f.jpg"/>
            </div>
            <div class="carousel-item">
                <img class="carousel-img" src="./img/properties/1/46ebbb537aa9fb0a.jpg" width="100%"/>
            </div>
            <div class="carousel-item">
                <img class="carousel-img" src="./img/properties/1/eace7b9114fd6046.jpg" width="100%"/>
            </div>
            
            <button type="button" class="carousel-control-prev" data-bs-slide="prev" data-bs-target="#carouselExample4"> <span class="carousel-control-prev-icon"> </span> </button>
            <button type="button" class="carousel-control-next" data-bs-slide="next" data-bs-target="#carouselExample4" > <span class="carousel-control-next-icon"> </span> </button>
            
        </div>
    </div>

    <div class="property-card row mx-auto">
        <div class="col-sm-8 mx-auto d-flex flex-column justify-content-center" style="height: 250px;">
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
                    <p style="font-size: 10px;" id="like-count"> 6 interested </p>
                </div>
            </div>
            <div class="d-flex flex-column justify-content-center" style="height: 60%;">
                <div>
                    <h5 class="property-name"> Ganapati Paying Guest </h5>
                    <p class="property-address"> Police Beat, Sainath Complex, Besides, SV Rd, Daulat Nagar, Borivali East, Mumbai - 400066 </p>
                </div>    
                <div> <img class="gender-logo" src="./img/male.png" /><div class="nav-vl" style="display: inline-block; margin: 0px auto; height: 30px;"><img class="gender-logo" src="./img/female.png" /></div> </div>  
            </div>
            <div class="d-flex justify-content-between align-items-center" style="height: 20%">
                <div class="d-flex align-items-center">
                    <div class="rent"> Rs. 8,500/- </div>
                    <div class="rent-unit"> per month </div>
                </div>
                <div>
                    <button type="button" class="btn btn-primary"> Book Now </button> 
                </div>
            </div>
        </div>

        <div class="amenities col-sm-8 mx-auto">
            <p class="detail-heading"> Amenities </p>
            <div class="amenities-listing-div">
                <div>
                    <p class="amenities-listing-heading"> Building </p>
                    <div class="amenities-content">
                        <div class="amenities-content-item">
                            <img src="./img/amenities/powerbackup.svg" />
                            <p style="margin: 0px;"> Power backup </p>
                        </div>
                        <div class="amenities-content-item">
                            <img src="./img/amenities/lift.svg" />
                            <p style="margin: 0px;"> Lift </p>
                        </div>
                    </div>
                </div>
                <div>
                    <p class="amenities-listing-heading"> Common Area </p>
                    <div class="amenities-content">
                        <div class="amenities-content-item">
                            <img src="./img/amenities/wifi.svg" />
                            <p style="margin: 0px;"> Wifi </p>
                        </div>
                        <div class="amenities-content-item">
                            <img src="./img/amenities/tv.svg" />
                            <p style="margin: 0px;"> TV </p>
                        </div>
                        <div class="amenities-content-item">
                            <img src="./img/amenities/rowater.svg" />
                            <p style="margin: 0px;"> Water Purifier </p>
                        </div>
                        <div class="amenities-content-item">
                            <img src="./img/amenities/dining.svg" />
                            <p style="margin: 0px;"> Dining </p>
                        </div>
                        <div class="amenities-content-item">
                            <img src="./img/amenities/washingmachine.svg" />
                            <p style="margin: 0px;"> Washing Machine </p>
                        </div>
                    </div>
                </div>
                <div>
                    <p class="amenities-listing-heading"> Common Area </p>
                    <div class="amenities-content">
                        <div class="amenities-content-item">
                            <img src="./img/amenities/bed.svg" />
                            <p style="margin: 0px;"> Bed with Mattress </p>
                        </div>
                        <div class="amenities-content-item">
                            <img src="./img/amenities/ac.svg" />
                            <p style="margin: 0px;"> Air Conditioner </p>
                        </div>
                    </div>
                </div>
                <div>
                    <p class="amenities-listing-heading"> Washroom </p>
                    <div class="amenities-content-item">
                        <img src="./img/amenities/geyser.svg" />
                        <p style="margin: 0px;"> Geyser </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="about-property col-sm-8 mx-auto">
            <p class="detail-heading"> About the property </p>
            <p> Furnished studio apartment - share it with close friends! Located in posh area of Bijwasan in Delhi, this house is available for both boys and girls. Go for a private room or opt for a shared one and make it your own abode. Go out with your new friends - catch a movie at the nearest cinema hall or just chill in a cafe which is not even 2 kms away. Unwind with your flatmates after a long day at work/college. With a common living area and a shared kitchen, make your own FRIENDS moments. After all, there's always a Joey with unlimited supply of food. Remember, all it needs is one crazy story to convert a roomie into a BFF. What's nearby/Your New Neighborhood 4.0 kms from Dwaraka Sector- 21, Metro Station.</p>
        </div>

        <div class="property-rating col-sm-8 mx-auto">
            <p class="detail-heading"> Property Rating </p>
            <div class="property-rating-content">
                <div style="display: flex; gap:50px;">
                    <div class="amenities-content" style="margin-left: 20px;">
                        <div class="amenities-content-item">
                            <img src="./img/Downloaded/clean.svg" width="20px" height="20px" />
                            <p style="margin: 0px;"> Cleanliness </p>
                        </div>
                        <div class="amenities-content-item">
                            <img src="./img/Downloaded/food.svg" width="20px" height="20px" />
                            <p style="margin: 0px;"> Quality </p>
                        </div>
                        <div class="amenities-content-item">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-lock-fill" viewBox="0 0 16 16">
                                <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z"/>
                              </svg>
                            <p style="margin: 0px;"> Safety </p>
                        </div>
                    </div>
    
                    <div class="stars-div">
                        <div class="amenities-content-item">
                            <div class="star-container-blue">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                            </div>
                        </div>
                        <div class="amenities-content-item">
                            <div class="star-container-blue">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                            </div>
                        </div>
                        <div class="amenities-content-item">
                            <div class="star-container-blue">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="blue-circle">
                    <p style="margin: 0px;"> 4.2 </p>
                    <div style="font-size: 20px;">
                        <i class="bi bi-star-fill"> </i>
                        <i class="bi bi-star-fill"> </i>
                        <i class="bi bi-star-fill"> </i>
                        <i class="bi bi-star-fill"> </i>
                        <i class="bi bi-star"> </i>
                    </div>
                </div>
            </div>

            <div class="comments">
                <p class="detail-heading"> What people say </p>
                <div class="comment-list row">
                    <div class="comment-div col-6 mx-auto">
                        <img class="comment-img" src="./img/man.png"/>
                        <div>
                            <p class="italic-center"> You just have to arrive at the place, it's fully furnished and stocked with all basic amenities and services and even your friends are welcome  </p>
                            <p class="bold-right"> - Ashutosh Gowariker </p>
                        </div>
                    </div>
                    <div class="comment-div col-6 mx-auto">
                        <img class="comment-img" src="./img/man.png"/>
                        <div>
                            <p class="italic-center"> You just have to arrive at the place, it's fully furnished and stocked with all basic amenities and services and even your friends are welcome  </p>
                            <p class="bold-right"> - Ashutosh Gowariker </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
    </div>
    <?php  include_once('footer.php') ?>
    <script src="./JS/common.js"></script>
</body>
</html>