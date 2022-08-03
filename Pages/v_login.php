<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Inventaris</title>
    <style>
        .gradient-custom {
            /* fallback for old browsers */
            background: #6a11cb;

            /* Chrome 10-25, Safari 5.1-6 */
            background: -webkit-linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1));

            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            background: linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1))
        }
    </style>
</head>
<body>
    <!-- Section: Design Block -->
    <section class="vh-100">
        <!-- Jumbotron -->
        <div class="px-4 py-5 px-md-5 text-center text-lg-start vh-100" style="background-color: hsl(0, 0%, 96%)">
        <div class="container mt-5">
            <div class="row gx-lg-5 align-items-center mt-5">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <h1 class="my-5 display-3 fw-bold ls-tight">
                The best offer <br />
                <span class="text-primary">for your business</span>
                </h1>
                <p style="color: hsl(217, 10%, 50.8%)">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Eveniet, itaque accusantium odio, soluta, corrupti aliquam
                quibusdam tempora at cupiditate quis eum maiores libero
                veritatis? Dicta facilis sint aliquid ipsum atque?
                </p>
            </div>
    
            <div class="col-lg-6 mb-5 mb-lg-0">
                <div class="card">
                <div class="card-body py-5 px-md-5">
                    <form action="../Models/login.php" method="POST">
                    <!-- 2 column grid layout with text inputs for the first and last names -->
                    <div class="row">
                        <h2 class="fw-bold mb-2 text-uppercase text-center">Login</h2>
                        <?php 
                        if(isset($_GET['pesan'])){
                            if($_GET['pesan'] == "gagal"){
                                ?><p class="mb-5 text-center text-danger">Wrong Username and Password!</p><?php
                            }else if($_GET['pesan'] == "logout"){
                                ?><p class="mb-5 text-center">You have made it out</p><?php
                            }else if($_GET['pesan'] == "belum_login"){
                                ?><p class="mb-5 text-center text-danger">Please enter your login and password!</p><?php
                            }
                        }
                        ?>
                        
                    </div>
    
                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form3Example3">Email address :</label>
                        <input name="email" type="email" id="form3Example3" class="form-control" />
                    </div>
    
                    <!-- Password input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form3Example4">Password :</label>
                        <input name="password" type="password" id="form3Example4" class="form-control" />
                    </div>
    
                    <!-- Checkbox -->
                    <div class="form-check d-flex justify-content-center mb-4">
                        <input class="form-check-input me-2" type="checkbox" value="" id="form2Example33" checked />
                        <label class="form-check-label" for="form2Example33">
                        Subscribe to our newsletter
                        </label>
                    </div>
    
                    <!-- Submit button -->
                    <div class="d-grid gap-2">
                        <!-- <a href="v_register.php" type="button" class="btn btn-danger">Sign in</a> -->
                        <button class="btn btn-primary" type="submit">Sign up</button>
                      </div>
                    </form>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
        <!-- Jumbotron -->
    </section>
    <!-- Section: Design Block -->
</body>
</html>