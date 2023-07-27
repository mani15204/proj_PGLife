<?php include_once 'header.php'; /* session_start() available in header.php itself */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="./CSS/dashboard.css" />
</head>
<body>
    
</body>
</html>
    <div class="row">
        <div class="col-8 mx-auto">
            <p class="detail-heading"> My Profile </p>
            <div class="profile-details">
                    <div class="profile-picture">
                        <svg class="profile-pic" xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
                        </svg>
                    </div>
                    <div class="profile-name">
                        <p class="name"> <?php echo $_SESSION['name']; ?> </p>
                        <p> <?php echo $_SESSION['email'] ?></p>
                        <p> +91 <?php echo $_SESSION['no'] ?> </p>
                        <p> <?php echo $_SESSION['clgname'] ?> </p>
                    </div>
                    <a href="#" class="btnEdit">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                            <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
                        </svg> 
                    </a>
            </div>
        </div>
        <div class="row interested-prop">
            <div class="col-9 mx-auto">
                <p class="detail-heading"> My Interested Properties </p>
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
                            <i class="bi bi-heart-fill"></i>
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
                            <i class="bi bi-heart-fill"></i>
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
                            <i class="bi bi-heart-fill"></i>
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
                        <div class="d-flex align-items-center">
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
            
        </div>

        <?php  include_once('footer.php') ?>
    </div>
    
</body>
</html>