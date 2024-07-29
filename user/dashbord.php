<?php
session_start();

include ("index.php");
include ("connection/koneksi.php");

//get data
//ambil data total
$get1 = mysqli_query($koneksi, "select * from pddk");
$count1 = mysqli_num_rows($get1);//menghitung seluruh kolom

//get data
//ambil data total
$get2 = mysqli_query($koneksi, "select * from kartu_keluarga");
$count2 = mysqli_num_rows($get2);//menghitung seluruh kolom

$get3 = mysqli_query($koneksi, "select * from lahir");
$count3 = mysqli_num_rows($get3);

$get4 = mysqli_query($koneksi, "select * from pindah");
$count4 = mysqli_num_rows($get4);

$get5 = mysqli_query($koneksi, "select * from datang");
$count5 = mysqli_num_rows($get5);

$get6 = mysqli_query($koneksi, "select * from meninggal_dunia");
$count6 = mysqli_num_rows($get6);
?>  
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
      
  </style>
</head>
<body>
<div class="col-md-10 p-4">
         
       
         <h3>
           <i class="fa-solid fa-gauge m-4 pt-4"></i>Dashbord</h3><hr class="bg-info">    
           <h3 class="text-center p-4">SELAMAT DATANG <b><?php echo htmlspecialchars($_SESSION['nama']); ?></b><i class="fa-solid fa-hands text-warning"></i> !  </h1>
           </h3> 

              <div class="row no-gutters">
              <div class="col-md-9">  
                <div class="row text-white">   

                <div class="row no-gutters">
                 
                    <div class="card m-4 mt-4" style=" width: 600px; background-color: #edf2fb;">              
                        <div class="card-body" style="width: 500px; margin: 20px;">
                          <h4 class="text-center text-dark m-4"> Populasi Penduduk</h4>              
                          <canvas class="text-center  mb-4" id="grafik" style="width: 300px; "></canvas>                                    
                        </div>  
                  
                  </div>                                                                                                  
                                
                      <div class=" card m-4 mt-4" style="width: 450px; background-color: rgba(75, 192, 192, 0.5);"> 
                        <h4 class="text-center text-dark m-4"> Populasi Laki-laki dan Perempuan</h4>  
                        <div class="card-body" style="width: 370px; margin: 25;">                         
                            <canvas class="text-center mb-4" id="grafikp" style="width: 300px;"></canvas> 
                        </div>
                      </div>
                    </div> 
                     
                  
       
              
              
             <div class="card bg-info m-4 mt-4" style="width: 15rem;">
               <div class="card-body">
                 <div class="card-body-icon m-2">
                 <i class="fa-solid fa-users-line "></i>
                 </div>
                 <h5 class="card-title">Jumlah Penduduk</h5>
                 <div class="display-4"><?php echo $count1+$count5+$count3-$count4-$count6;?></div>
                 <a href="penduduk.php"><p class="card-text text-white">Lihat Detail <i class="fas fa-angle-double-right ml-2"></i></p></a>
               </div>
             </div>

             <div class="card bg-info m-4 mt-4" style="width: 15rem;">
               <div class="card-body">
                 <div class="card-body-icon m-2">
                   <i class="fa-solid fa-credit-card"></i>
                 </div>
                 <h5 class="card-title">Jumlah Kk</h5>
                 <div class="display-4"><?php echo $count2;?></div>
                 <a href="kk.php"><p class="card-text text-white">Lihat Detail <i class="fas fa-angle-double-right ml-2"></i></p></a>
               </div>
             </div>

             <div class="card bg-info m-4 mt-4" style="width: 15rem;">
               <div class="card-body">
                 <div class="card-body-icon m-2">
                 <i class="fa-solid fa-face-laugh"></i>
                 </div>
                 <h5 class="card-title">Jumah Lahir</h5>
                 <div class="display-4"><?php echo $count3;?></div>
                 <a href="pendatang.php"><p class="card-text text-white">Lihat Detail <i class="fas fa-angle-double-right ml-2"></i></p></a>
               </div>
             </div>
       
             <div class="card bg-info m-4 mt-4" style="width: 15rem;">
               <div class="card-body">
                 <div class="card-body-icon m-2">
                 <i class="fa-solid fa-arrows-up-down-left-right"></i>
                 </div>
                 <h5 class="card-title">Jumlah Pindah </h5>
                 <div class="display-4"><?php echo $count4;?></div>
                 <a href="pindah.php"><p class="card-text text-white">Lihat Detail <i class="fas fa-angle-double-right ml-2"></i></p></a>
               </div>
             </div>

             <div class="card bg-info m-4 mt-4" style="width: 15rem;">
               <div class="card-body">
                 <div class="card-body-icon m-2">
                 <i class="fa-solid fa-arrows-up-down-left-right"></i>
                 </div>
                 <h5 class="card-title">Jumlah Pendatang </h5>
                 <div class="display-4"><?php echo $count5;?></div>
                 <a href="pendatang.php"><p class="card-text text-white">Lihat Detail <i class="fas fa-angle-double-right ml-2"></i></p></a>
               </div>
             </div>

             <div class="card bg-info m-4 mt-4" style="width: 15rem;">
               <div class="card-body">
                 <div class="card-body-icon m-2">
                 <i class="fa-solid fa-face-frown"></i>
                 </div>
                 <h5 class="card-title">Jumlah Meninggal Dunia</h5>
                 <div class="display-4"><?php echo $count6;?></div>
                 <a href="medun.php"><p class="card-text text-white">Lihat Detail <i class="fas fa-angle-double-right ml-2"></i></p></a>
               </div>                
             </div>    
             

        <script>
          const ctx = document.getElementById('grafik');

            new Chart(ctx, {
              type: 'bar',
              data: {
                labels: ['Penduduk','lahir','pindah','datang','meninggal_dunia'],
                datasets: [{
                  label: 'jumlah Penduduk',
                  data: [
                    <?php
                      $pddk = mysqli_query($koneksi, "select * from pddk");
                      echo mysqli_num_rows($pddk);
                      ?>,

                      <?php
                      $lahir = mysqli_query($koneksi, "select * from lahir");
                      echo mysqli_num_rows($lahir);
                      ?>,
                      <?php
                      $pindah = mysqli_query($koneksi, "select * from pindah");
                      echo mysqli_num_rows($pindah);
                      ?>,
                       <?php
                      $datang = mysqli_query($koneksi, "select * from datang");
                      echo mysqli_num_rows($datang);
                      ?>,
                       <?php
                      $meninggal_dunia = mysqli_query($koneksi, "select * from meninggal_dunia");
                      echo mysqli_num_rows($meninggal_dunia);
                      ?>,                                           

                  ],
                  backgroundColor: [
                    'rgba(215, 99, 162, 3)',
                    'rgba(255, 159, 64, 9)',
                    'rgba(75, 192, 192, 9)',
                    'rgba(201, 203, 207, 9)',
                    'rgba(153, 102, 255, 9)'
                  ],
                  borderColor: [
                      'rgb(255, 99, 500)',
                      'rgb(255, 159, 100)',
                      'rgb(255, 205, 100)',
                      'rgb(75, 192, 199)',
                      'rgb(201, 203, 309)',
                      'rgb(153, 102, 255)'
                  ],
                  borderWidth: 1
                }]
              },
              options: {
                scales: {
                  y: {
                    beginAtZero: true
                  }
                }
              }
            });
            </script>
            <script>
            const ct = document.getElementById('grafikp');

            new Chart(ct, {
              type: 'doughnut',
              data: {
                labels: ['laki-laki', 'peremuan'],
                datasets: [{
                  label: 'Gender',
                  data: [
                    <?php
                      $laki = mysqli_query($koneksi, "select * from pddk where jekel='laki-laki' ");
                      echo mysqli_num_rows($laki);
                     ?>,
                      <?php
                      $perempuan = mysqli_query($koneksi, "select * from pddk where jekel='Perempuan' ");
                      echo mysqli_num_rows($perempuan);                                           
                      ?>                                          

                  ]
                 
                }]
              },
              options: {
                scales: {
                  y: {
                    beginAtZero: true
                  }
                }
              }
            });
          </script>
           </div>                   
         </div>
        
         <div class="col-md-3 text-center pt-4 card bg-warning" style="right: 55px; top: 25px;">           
                              
             <div class="card-body ">
               <div class="a">
                  <h3 class="card-title">Visi dan Misi</h3>
                
                  <h5 class="card-title">Visi</h5><hr class="bg-info">
                  <p class="card-text" style="font-size:15px">BERGOTONG ROYONG MEMBANGUN DESA NANIA DENGAN MEMBERDAYAKAN MASYARAKAT, UNTUK MANCAPAI KUALITAS KEHIDUPAN YANG ADIL, UNTUK MENCAPAI KEHIDUPAN YANG SEJAHTERA, UNTUK MENCAPAI KEHIDUPAN YANG SEJUK, MANDIRI, JUJUR, TRANSPARAN, BERMARTABAT, DAN BERLANDASKAN AGAMA YANG DIANUT MASING-MASING
                  <h5 class="card-title">Misi</h5><hr class="bg-info">
                  <p class="card-text" style="font-size:15px">1. MEWUJUDKAN PEMERATAAN PEMBANGUNAN YANG BERBASIS KEKUATAN LOKAL, YANG BERKEADILAN SESUAI DAYA DUKUNG POTENSI DAERAH
                  <p class="card-text" style="font-size:15px">2. MEWUJUDKAN PEMERINTAH DESA YANG JUJUR, TRANSPARAN, BERWIBAWA, DISIPLIN, DENGAN MENGAMBIL KEPUTUSAN YANG TEPAT DAN CEPAT
                  <p class="card-text" style="font-size:15px">3. MENINGKATKAN PROFESIONALISME KERJA DAN MENGOPTIMALKAN SELURUH PERANGKAT DESA UNTUK PELAYANAN PUBLIK DENGAN SABAR, SOPAN, SANTUN, TETAP SENYUM, DAN LANGSUNG KEPADA SETIAP WARGA
                  <p class="card-text" style="font-size:15px">4. MENINGKATKAN PELAYANAN KESEHATAN MASYARAKAT
                  <p class="card-text" style="font-size:15px">5. MEWUJUDKAN PEREKONOMIAN DAN KESEJAHTRAAN DESA NANI
                  <p class="card-text" style="font-size:15px">6. MENINGKATKAN KEHIDUPAN SOSIAL MASYARAKAT YANG DINAMIS, DALAM SEGI KEAGAMAAN DAN KEBUDAYAAN
                  <p class="card-text" style="font-size:15px">7. MENYELENGARAKAN PEMERINTAHAN YANG BERSIH, TERBEBAS DARI KORUPSI DAN BENTUK-BENTUK LAINNYA</p>
               </div> 
               </div>
             </div>
           </div>
          
        </div>
         </div>
         </div>  
         </div>            
         </div>    
              
         </div> 
               
       </div>
       </div>
                                       
     
  </body>
</html> 