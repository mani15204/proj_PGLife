<?php  include_once 'header.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="./CSS/index.css" />
</head>
<body>
    
</body>
</html>

<!-- fixed background-->
<div>
    <div class="background row mx-auto" style="width: 100%; background-color: #EAE5E4;">
        <img class="col-12 pic-front" src="./img/bg.png"/>
    </div>
</div> 


<div style="width: 100%;">
    <div class="background-grey">    
        <div> 
            <p class="heading-grey"> In cozy rooms, friendships bloom, </p>
            <p class="heading-grey"> A place to call home, for the hearts that roam. </p> 
        </div>
       
        <form action="./property_list.php" method="get" style="width: 100%; display: flex; justify-content:center">
            <div style="display: flex; justify-content:center; width: 70%;">
                    <div style="width:90%"><input type="text" class="input-grey" name="city" placeholder="  Enter city to search for PGs"/></div> 
                    <button class="search-grey" type="submit" name="submit"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                    </svg> </button>
            </div>
        </form>
        
        
    </div>

    <div class="major-cities">
        <p class="major-cities-text"> Major Cities</p>
        <div class="major-cities-listing">
            <div class="major-cities-pics-div text-center"> <a href="./property_list.php?city=delhi"><img class="major-cities-pics" src="./img/delhi.png" /></a> </div>
            <div class="major-cities-pics-div text-center"> <a href="./property_list.php?city=mumbai"><img class="major-cities-pics" src="./img/mumbai.png" /></a> </div>
            <div class="major-cities-pics-div text-center"> <a href="./property_list.php?city=bangalore"><img class="major-cities-pics" src="./img/bangalore.png" /></a> </div>
            <div class="major-cities-pics-div text-center"> <a href="./property_list.php?city=hyderabad"><img class="major-cities-pics" src="./img/hyderabad.png" /></a> </div>
        </div>
    </div>

    
    <?php  include_once('footer.php') ?>
    
</div>




    
    
</body>

</html>

<!--

    <input type="text" id="fname" name="fname" placeholder=" Enter your city to search for PGs" style="height: 40px">
                <div class="col-4">
                    <svg class="display: inline-block" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16" style="color: white; background-color: rgb(27,20,20,0.5); height: 40px; width: 40px; padding: 10px; ">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                    </svg>
                </div>


-->