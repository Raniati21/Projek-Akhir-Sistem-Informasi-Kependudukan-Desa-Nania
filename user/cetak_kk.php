<?php
  require ("index.php");

  require ("connection/koneksi.php");



?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Data Penduduk</title>
  </head>
  <body>

  <div class="col-md-10 p-4">
    <div class="conteiner">     
      
        <h3>
        <i class="fa-solid fa-file m-3 pt-5"></i>Data KK</h3><hr class="bg-info">  
          
          <!-- Button trigger modal -->
          <a href="surat/prosescetak_kk.php">
          <button type="button" class="btn btn-warning mt-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
          <i class="fa fa-print text-black m-2"></i>Cetak
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
                <th scope="col">No Kk</th>
                <th scope="col">Kepala Keluarga</th>
                <th scope="col">Desa</th>
                <th scope="col">Rt</th>
                <th scope="col">Rw</th>                
              </tr>

              <?php $no=1;  
                
                $ambildata = mysqli_query($koneksi, "select * from kartu_keluarga");                           
                while ($tampil = mysqli_fetch_array($ambildata)) {
              ?>
              
             
              <tr>
                <th><?= $no; ?></th>
                <td><?= $tampil['no_kk']; ?></td>
                <td><?= $tampil['kepala_kl']; ?></td>
                <td><?= $tampil['desa']; ?></td>
                <td><?= $tampil['rt']; ?></td>
                <td><?= $tampil['rw']; ?></td>                           
                  <?php
                      $no++;
                    }
                  ?>
                </thead>
              </table>
                    
                </div>
              </div>
              
  </div>
</div>
</body>
</html>
