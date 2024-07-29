<?php
  require ("index.php");

  require ("connection/koneksi.php");

  //get data
  //ambil data total
  $get1 = mysqli_query($koneksi, "select * from lahir");
  $count1 = mysqli_num_rows($get1);

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
        <i class="fa-solid fa-file m-3 pt-5"></i>Data Kelahiran</h3><hr class="bg-info">  

         <a href="surat/prosescetak_penduduk.php?id_lahir">
          <button style="box-shadow: 0 2px 7px rgba(0,0,0,0.3)" type="button" class="btn btn-warning mt-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
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
                <th scope="col">Nama Bayi</th>
                <th scope="col">Tanggal Lahir</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Keluarga</th>
              </tr>

              <?php $no=1;  ?>
             

              <?php
                $ambildata = mysqli_query($koneksi,"SELECT * FROM kartu_keluarga, lahir WHERE kartu_keluarga.id_kk = lahir.id_kk") or die (mysqli_error($koneksi));              
                while($tampil = mysqli_fetch_array($ambildata)) {
              ?>
              
              <tr>
                <th><?= $no; ?></th>
                <td><?= $tampil['nama']; ?></td>
                <td><?= $tampil['tgl_lahir']; ?></td>
                <td><?= $tampil['jekel']; ?></td>
                <td><?= $tampil['no_kk'], $tampil['kepala_kl']; ?></td>  
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
  </div>
</div>
</body>
</html>
