<?php
  require ("index.php");

  require ("connection/koneksi.php");

  //get data
  //ambil data total
  $get2 = mysqli_query($koneksi, "select * from kartu_keluarga");
  $count2 = mysqli_num_rows($get2);

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
          <i class="fa-solid fa-users m-3 pt-5"></i>Kartu keluarga</h3><hr class="bg-info">        
          <div class="row text-white">  </div>
         
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
          <i class="fa-solid fa-pen-to-square text-white m-1"></i>Tambah data
          </button>


          <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data</h1>
                  <button type="button" class="btn-close pt-4" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                  <form class="" action="kk/simpan.php" method="POST">
                  <div class="input-group flex-nowrap m-2">
                   
                    <span class="input-group-text m-2" for="no_kk">No Kk</span>
                    <input type="text" class="form-control m-2" id="no_kk" name="no_kk" placeholder="Masukan No kk" required>
                  </div>
                  <div class="input-group flex-nowrap m-2" >
                    <span class="input-group-text m-2" for="kepala_kl">Kepala Keluarga</span>
                    <input type="text" class="form-control m-2" id="kepala_kl" name="kepala_kl"  placeholder="Masukan kepala Keluarga" required>
                  </div>
                
                  <div class="input-group flex-nowrap m-2">
                    <span class="input-group-text m-2" for="desa">Desa</span>
                    <input type="text" class="form-control m-2" id="desa" name="desa"  placeholder="Masukan Desa" required>
                  </div>
                  <div class="input-group flex-nowrap m-2">
                    <span class="input-group-text m-2" for="rt">Rt</span>
                    <input type="text" class="form-control m-2" id="rt" name="rt" placeholder="Masukan RT" required>
                    <span class="input-group-text m-2" for="rw">Rw</span>
                    <input type="text" class="form-control m-2" id="rw" name="rw" placeholder="Masukan RW" required> 
                  </div>
                  <div class="input-group flex-nowrap m-2" >
                    <span class="input-group-text m-2" for="kec_kota">Kec/Kota</span>
                    <input type="text" class="form-control m-2" id="kec_kota" name="kec_kota"  placeholder="Masukan Kec/Kota" required>
                  </div>
                  <div class="input-group flex-nowrap m-2" >
                    <span class="input-group-text m-2" for="prov">Provinsi</span>
                    <input type="text" class="form-control m-2" id="prov" name="prov"  placeholder="Masukan  Provinsi" required>
                  </div>
                               
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-warning text-white" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary"  name="submit">Simpan</button>
                </div>
                </form>
              </div>
            </div>
          </div>
                                  
          <div class="card mt-3" >
            <div class="card-body">
              <h5 class="card-title"><b>Data KK</b></h5>
              <div class="col-md-4  " style="float :right">
                <form class="d-flex" role="search ml-auto " action="" method="get" >
                  <input class="form-control me-2" type="text" name="cari" placeholder="Search...." aria-label="Search" style="box-shadow: 0 2px 7px rgba(0,0,0,0.1) "
                   autofocus autocomplete="off">
                  <button class="btn btn-outline-info"  type="submit" style="box-shadow: 0 2px 7px rgba(0,0,0,0.1)">Search</button>
                </form> 
              </div>
              <table class="table">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">No Kk</th>
                <th scope="col">Kepala Keluarga</th>
                <th scope="col">Alamat</th>               
                <th scope="col">Aksi</th>
              </tr>

              <?php $no=1;  

                if(isset($_GET['cari'])) {
                  $cari = $_GET['cari'];
                  $ambildata = mysqli_query($koneksi, "select * from kartu_keluarga where kepala_kl like '%".$cari."%'");             
  
              }else{
                $ambildata = mysqli_query($koneksi, "select * from kartu_keluarga");              
              }

                while ($tampil = mysqli_fetch_array($ambildata)) {
              ?>
              
             
              <tr>
                <th><?= $no; ?></th>
                <td><?= $tampil['no_kk']; ?></td>
                <td><?= $tampil['kepala_kl']; ?></td>
                <td><?= $tampil['desa'], ', ', $tampil['rt'], ', ', $tampil['rt'], ', ', $tampil['kec_kota'], ', ', $tampil['prov']; ?></td>
                            
                <td>
                      <a href="kkedit.php?id_kk=<?= $tampil['id_kk']; ?>">
                        <button type="button"  class="btn bg-info" data-bs-toggle="modal" data-bs-target="#editModal">
                        <i class="fa-solid fa-pen-to-square text-white"></i></button></a>

                     <a href="kk/hapus.php?id_kk=<?= $tampil['id_kk']; ?>" onclick="return confirm('Yakin Ingin Menghapus Data?')">
                        <button type="button" class="btn bg-danger">
                        <i class="fa-solid fa-trash text-white"></i></button>
                      </a>
                    </td>
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
</body>
</html>
