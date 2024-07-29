<?php
  require ("index.php");

  require ("connection/koneksi.php");


?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Data Pendatang</title>
  </head>
  <body>

  <div class="col-md-10 p-4">
    <div class="conteiner">     
      
        <h3>
        <i class="fa-solid fa-file m-3 pt-5"></i>Data Pendatang</h3><hr class="bg-info">  
          
          <!-- Button trigger modal -->
          <a href="surat/prosescetak_pendatang.php">
          <button type="button" class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
          <i class="fa fa-print text-black m-2"></i>cetak
          </button></a>  

          <style>
                div .a {
                    text-align: center;                    

                    }
            </style>

          <div class="card mt-3" >
            <div class="a">
            <div class="card-body">
             
            <table class="table">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nik</th>
                <th scope="col">Nama</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Tanggal Datang</th>
                <th scope="col">Desa Asal</th>                                
              </tr>

              <?php $no=1;                

                  $ambildata = mysqli_query($koneksi, "select * from datang");                                                
                                
                    while ($tampil = mysqli_fetch_array($ambildata)) {
              ?>
              
             
            <tr>
                <th><?= $no; ?></th>
                <td><?= $tampil['nik_p']; ?></td>
                <td><?= $tampil['nama_p']; ?></td>
                <td><?= $tampil['jekel']; ?></td>
                <td><?= $tampil['tgl_datang']; ?></td>
                <td><?= $tampil['desal']; ?></td>                          
            </tr>
                      
            <?php
            $no++;
             }
            ?>
        </thead>
         </table>
                    
            
    </div>
              
  </div>
</div>
</body>
</html>
