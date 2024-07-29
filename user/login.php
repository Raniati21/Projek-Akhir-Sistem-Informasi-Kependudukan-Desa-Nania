<?php

session_start();

include ("connection/koneksi.php"); 

if (isset($_SESSION['status']) ) {
    header("Location: dashbord.php");
  
    exit();
  }
    
?>

   <!doctype html>
   <html lang="en">
     <head>
       <!-- Required meta tags -->
       <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
       <!-- Bootstrap CSS -->
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   
       <title>Halaman Login</title>
   
       <!-- link bootstrap -->
       <link rel="stylesheet" type="text/css" href="bootstrap-5.3.0/css/all.min.css">
       <link rel="stylesheet" type="text/css" href="bootstrap-5.3.0/js/all.min.js">
   
       <!-- link fontawesome -->
       <link rel="stylesheet" type="text/css" href="fontawesome-free-6.4.0-web/css/all.min.css">
       
       <link rel="stylesheet" type="text/css" href="login/style.css">
   
       <!-- link google fonts -->
       <link rel="preconnect" href="https://fonts.googleapis.com">
         <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
         <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,400;0,500;1,700&display=swap" rel="stylesheet">
   <style>

    </style>
     </head>

   
     <body class="bg-dark">
      <div class="container fixed-top">
            <div class="row no-gutters ">
                <div class="col-md-5">
                    
                <div class="row text-white">  
            
                    <div class="card" style="width: 30rem;">    
                            <img class="card-img-top" src="asset/2mhMRJvqNiOtG-FaRhBrL-transformed.png" alt=""style="width: 10rem;">  
                            <div class="card-block">
                            <h4 class="text-center">LOGIN</h4>
                            <h4 class="text-center mb-4">Desa Nania, Kec Baguala, Kota Ambon</h4>

                            <form action="login_cek.php" method="POST" >
                                
                                <div class="form-grup ">
                                    <label for="username">Username</label>
                                    <input type="text" id="username" name="username" class="input-box form-control" placeholder=" Username "  autofocus autocomplete="off" required>
                                    <i class="fa-solid fa-user"></i>
                                </div>
                                
                                <div class="form-grup">
                                    <label for="password">Password</label>
                                    <input type="password" id="password" name="password" class="input-box form-control text-black" placeholder="Password"  autofocus autocomplete="off" required> 
                                    <i class="fa-solid fa-lock"></i>
                                </div>
                                                                                           
                                <button type="submit" name="login" class="btn btn-block btn-primary ms-5 m-3"style="width: 18rem; position: center;">Login</button>
                                <p class="text-meted text-center mt-3 mb-5">&copy; Desa Nania, kec. Baguala, Kota Ambon 2024-<?= date('Y') ?></p>
                            </form>
                        </div>
                    </div>
                </div>
                </div>

                    <div class="col-md-7 ">                    
                        <div class="text-center">
                            <img src="asset/kantor_desa.jpg" alt="" style="width: 50rem; height: 50rem;">      
                        </div>                                  
                    </div>
                        
                </div>
            </div>
        </div>

        
   

     <script src="script.js"></script>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    </body>
   </html>


