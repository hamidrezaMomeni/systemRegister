<?php session_start(); if(isset($_SESSION['userLogedIn'])) {header("Location: /khateroshan/Views/login/panel/");} ?>
<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="../../src/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="../../src/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="../../src/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../src/css/signup.css">
</head>
<body>
    


<div class="container register">
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                        <h3>Welcome</h3>
                        <p>You are 30 seconds away from earning your own money!</p>
                        <!-- <input type="submit" name="" value="Login"/><br/> -->
                    </div>


                    <div class="col-md-9 register-right">

                        <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Signup</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Login</a>
                            </li>
                        </ul>


                        <div class="tab-content" id="myTabContent">
                        <!-- start tab signup -->
                        
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <form action="/khateroshan/auth/signup" method="POST">
                                <h3 class="register-heading">Signup</h3>
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="firstName" class="form-control" placeholder="First Name *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="lastName" class="form-control" placeholder="Last Name *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control" placeholder="Password *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="repassword" class="form-control"  placeholder="Confirm Password *" value="" />
                                        </div>    
                                    </div>


                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control" placeholder="Your Email *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" minlength="11" maxlength="11" name="phoneNumber" class="form-control" placeholder="Your Phone *" value="" />
                                        </div>
                                        <input type="submit" class="btnRegister" name="submit" value="Register"/>
                                    </div>
                                </div>
                            </form>
                        </div>
                            <!-- end tab signup -->

                            <!-- start tab login -->
                            <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <form action="/khateroshan/auth/login" method="POST">
                                    <h3  class="register-heading">Login</h3>
                                    <div class="row register-form">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="email" name="email" class="form-control" placeholder="Email *" value="" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="password" name="password" class="form-control" placeholder="Password *" value="" />
                                            </div>
                                            <input type="submit" class="btnRegister" name="submit" value="Login"/>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- end tab login -->
                        </div>
                    </div>
                </div>

            </div>




    <!-- js files importing here -->
    <script src="../../src/js/jquery.min.js"></script>
    <script src="../../src/js/bootstrap.min.js"></script>
</body>
</html>