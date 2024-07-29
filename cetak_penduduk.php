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
        <i class="fa-solid fa-file m-3 pt-5"></i>Data Penduduk</h3><hr class="bg-info">  
    
          <!-- Button trigger modal -->
        
          <a href="surat/prosescetak_penduduk.php">
          <button style="box-shadow: 0 2px 7px rgba(0,0,0,0.3)" type="button" class="btn btn-warning mt-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
          <i class="fa fa-print text-black m-2"></i>Cetak
          </button></a>

            <style>
                div .a {
                    text-align: center;
                    

                    }
            </style>
                           
          <div class="card mt-3 ">
            <div class="a">
            <div class="card-body" style="box-shadow: 0 2px 7px rgba(0,0,0,0.3)">                                    
            
              <table class="table" >
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nik</th>
                <th scope="col">Nama</th>
                <th scope="col">Tempat Lahir</th>
                <th scope="col">Tanggal lahir</th>
                <th scope="col">Jenis kelamin</th>
                <th scope="col">Desa<A</th>
                <th scope="col">Rt</th>
                <th scope="col">Rw</th>
                <th scope="col">Agama</th>
                <th scope="col">Status</th>
                <th scope="col">Pekerjaan</th>
              </tr>

              <?php $no=1;
                
             
                 $ambildata = mysqli_query($koneksi, "select * from pddk");             

                while ($tampil = mysqli_fetch_array($ambildata)) {

                 
              ?>
              
             
              <tr>
                <th><?= $no; ?></th>
                <td><?= $tampil['nik']; ?></td>
                <td><?= $tampil['nama']; ?></td>
                <td><?= $tampil['tempat_lahir']; ?></td>
                <td><?= $tampil['tanggal_lahir']; ?></td>
                <td><?= $tampil['jekel']; ?></td>
                <td><?= $tampil['desa']; ?></td>
                <td><?= $tampil['rt']; ?></td>
                <td><?= $tampil['rw']; ?></td>
                <td><?= $tampil['agama']; ?></td>
                <td><?= $tampil['kawin']; ?></td>
                <td><?= $tampil['pekerjaan']; ?></td>
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
