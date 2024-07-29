<?php
session_start();

   include ("connection/koneksi.php"); 

if (isset($_SESSION['status']) ) {
    header("Location: dashbord.php");
  
    exit();
}

   if (isset($_POST['login'])) { 

     
        $username = mysqli_escape_string($koneksi, $_POST['username']);
        $password = $_POST['password'];
        $password_hash = password_hash($password, PASSWORD_DEFAULT);
            

        //cek username
        $cek_user = mysqli_query($koneksi, "SELECT * FROM pengguna WHERE username = '$username' ");
        $user_valid = mysqli_fetch_array($cek_user);

        //uji jika username terdaftar
        if($user_valid){

             //jika username terdaftar
             //jika password sesuai atau tidak
            if($password == $user_valid['password']) {
                
                //jika password sesuai   
                $_SESSION['status'] = true;       
                $_SESSION['nama'] = $user_valid['nama'];                
                $_SESSION['username'] = $user_valid['username'];
                $_SESSION['level'] = $user_valid['level'];
               
                if($user_valid['level'] == 'admin'){
                                     echo "<script>
                                        alert('Login Berjasil');
                                        document.location=' dashbord.php';
                                    </script>
                                    "; 

                }else if($user_valid['level'] == 'user') {

                            echo "<script>
                                alert('Login Berjasil');
                                document.location='user/dashbord.php';
                            </script>
                            ";                    
        
                }
            
               exit();

            } else {

             echo "<script>
                        alert('Maaf, Login Gagal, Password anda Salah');
                        document.location='login.php';
                    </script>
                    ";

            }
        }else{
            echo "<script>
                    alert('Maaf, Login Gagal, Username anda tidak terdaftar');
                    document.location='login.php';
                </script>
                ";
        }
    }
    ?>