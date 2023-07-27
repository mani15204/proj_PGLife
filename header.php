<?php session_start(); require_once './includes/dbh.inc.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./CSS/common.css" />
    
</head>
<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-md navbar-light bg-light">
        <div class="container-fluid">
            <a href="./index.php" class="navbar-brand"> <img src="./img/logo.png" height="40px"; /> <span class="visually-hidden"> Logo </span> </a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-label="Toggle navigation"> 
                <span class="navbar-toggler-icon"> </span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarContent">
            <ul class="navbar-nav">
                <?php if (isset($_SESSION['email'])) { ?>
                    <li class="nav-item">
                        <a href="./dashboard.php" class="nav-link">
                            <svg class="svg-inline--fa fa-user fa-w-14" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm89.6 32h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-41.6c0-74.2-60.2-134.4-134.4-134.4z"></path></svg>
                            <!-- <i class="fas fa-user"> </i> Font Awesome fontawesome.com --> 
                            Profile 
                            <span class="visually-hidden">Profile</span> 
                        </a>
                    </li>
                    
                    <div class="nav-vl"></div> 
                    
                    <li class="nav-item">
                        <a href="./includes/logout.inc.php" class="nav-link">
                            <svg class="svg-inline--fa fa-sign-in-alt fa-w-16" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="sign-in-alt" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M416 448h-84c-6.6 0-12-5.4-12-12v-40c0-6.6 5.4-12 12-12h84c17.7 0 32-14.3 32-32V160c0-17.7-14.3-32-32-32h-84c-6.6 0-12-5.4-12-12V76c0-6.6 5.4-12 12-12h84c53 0 96 43 96 96v192c0 53-43 96-96 96zm-47-201L201 79c-15-15-41-4.5-41 17v96H24c-13.3 0-24 10.7-24 24v96c0 13.3 10.7 24 24 24h136v96c0 21.5 26 32 41 17l168-168c9.3-9.4 9.3-24.6 0-34z"></path></svg>
                            <!-- <i class="fas fa-sign-in-alt"></i> Font Awesome fontawesome.com --> 
                            Logout 
                            <span class="visually-hidden">Logout</span>  
                        </a>
                    </li>
                <?php } else { ?>
                    <li class="nav-item">
                        <button class="nav-link" data-bs-toggle="modal" data-bs-target="#signup_modal">
                            <svg class="svg-inline--fa fa-user fa-w-14" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm89.6 32h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-41.6c0-74.2-60.2-134.4-134.4-134.4z"></path></svg>
                            <!-- <i class="fas fa-user"> </i> Font Awesome fontawesome.com --> 
                            Signup 
                            <span class="visually-hidden">Signup</span> 
                        </button>
                    </li>
                    <div class="nav-vl"></div> 
                    <li class="nav-item">
                        <button class="nav-link" data-bs-toggle="modal" data-bs-target="#login_modal">
                            <svg class="svg-inline--fa fa-sign-in-alt fa-w-16" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="sign-in-alt" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M416 448h-84c-6.6 0-12-5.4-12-12v-40c0-6.6 5.4-12 12-12h84c17.7 0 32-14.3 32-32V160c0-17.7-14.3-32-32-32h-84c-6.6 0-12-5.4-12-12V76c0-6.6 5.4-12 12-12h84c53 0 96 43 96 96v192c0 53-43 96-96 96zm-47-201L201 79c-15-15-41-4.5-41 17v96H24c-13.3 0-24 10.7-24 24v96c0 13.3 10.7 24 24 24h136v96c0 21.5 26 32 41 17l168-168c9.3-9.4 9.3-24.6 0-34z"></path></svg>
                            <!-- <i class="fas fa-sign-in-alt"></i> Font Awesome fontawesome.com --> 
                            Login 
                            <span class="visually-hidden">Login</span>  
                        </button>
                    </li>
                <?php } ?>
            </ul>

                
            </div>
        </div>
    </nav>

    <div class="modal fade" id="signup_modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"> Signup with PGLife </h5>
                    <button type="button" class="btn btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body row" style="display: flex; flex-direction: column; gap: 20px;">
                    <div class="col-11 mx-auto">
                        <form action="./includes/signup.inc.php" method="post" class="d-flex flex-column gap-3">
                            <div style="display: flex;">
                                <div class="signup-icon"> <i class="fas fa-user"> </i></div>
                                <input class="signup-input" type="text" id="name" name="name" placeholder="  Full Name">
                            </div>
                            <div style="display: flex;">
                                <div class="signup-icon"> <i class="bi bi-telephone-fill"></i></div>
                                <input class="signup-input" type="text" id="no" name="no" placeholder="  Phone Number">
                            </div>
                            <div style="display: flex;">
                                <div class="signup-icon"> <h5> <i class="bi bi-envelope-fill"> </i> </h5></div>
                                <input class="signup-input" type="text" id="email" name="email" placeholder="  Email">
                            </div>
                            <div style="display: flex;">
                                <div class="signup-icon"> <i class="bi bi-lock-fill"> </i></div>
                                <input class="signup-input" type="password" id="passwd" name="password" placeholder="  Password">
                            </div>
                            <div style="display: flex;">
                                <div class="signup-icon"> <img src="./img/Downloaded/institution.svg" width="20px" /> </i></div>
                                <input class="signup-input" type="text" id="clgname" name="clgname" placeholder="  College Name">
                            </div>
                            <div class="signup-gender">
                                <p style="margin: 0px"> I am a &emsp; </p>
                                <div>
                                    <input type="radio" value="male" name="gender"> &nbsp; Male  &emsp;
                                    <input type="radio" value="female" name="gender"> &nbsp; Female
                                </div>
                                
                            </div>
                            
                            <button class="signup-submit" type="submit" name="submit" value="Create Account"> Create Account </button>
                          </form>
                    </div>
                </div>
                <div class="modal-footer" style="background-color: rgb(245, 242, 239);">
                    <p style=" width: 100%; text-align: center" > Already having an account? <button type="button" class="btn btn-link" style="text-decoration: none;" data-bs-toggle="modal" data-bs-target="#login_modal"> Login </button> </p>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal fade" id="login_modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"> Login with PGLife </h5>
                    <button type="button" class="btn btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body row" style="display: flex; flex-direction: column; gap: 20px;">
                    <div class="col-11 mx-auto">
                        <form action="./includes/login.inc.php" method="post" class="d-flex flex-column gap-3">
                            <div style="display: flex;">
                                <div class="signup-icon"> <h5> <i class="bi bi-envelope-fill"> </i> </h5></div>
                                <input class="signup-input" type="text" id="email" name="email" placeholder="  Email">
                            </div>
                            <div style="display: flex;">
                                <div class="signup-icon"> <i class="bi bi-lock-fill"> </i></div>
                                <input class="signup-input" type="password" id="passwd" name="passwd" placeholder="  Password">
                            </div>
                            <button class="signup-submit" type="submit" name="submit" value="Login"> Login </button>
                        </form>
                    </div>
                    <div class="modal-footer" style="background-color: rgb(245, 242, 239);">
                        <p style=" width: 100%; text-align: center" > Don't have an account? <button type="button" class="btn btn-link" style="text-decoration: none;" data-bs-toggle="modal" data-bs-target="#signup_modal"> Register </button> </p>
                    </div>
                </div>
                
            </div>
        </div>
    </div>