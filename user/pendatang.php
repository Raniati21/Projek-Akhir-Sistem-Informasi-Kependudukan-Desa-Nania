<?php
  require ("index.php");

  require ("connection/koneksi.php");

  //get data
  //ambil data total
  $get5 = mysqli_query($koneksi, "select * from datang");
  $count5 = mysqli_num_rows($get5);

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
          <i class="fa-solid fa-users m-3 pt-5"></i> Pendatang</h3><hr class="bg-info">        
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
                  <form class="" action="pendatang/simpan.php" method="POST">
                  <div class="input-group flex-nowrap m-2">
                   
                    <span class="input-group-text m-2" for="nik_p">Nik</span>
                    <input type="text" class="form-control m-2" id="nik_p" name="nik_p" placeholder="Masukan nik" autofocus required>
                  </div>
                  <div class="input-group flex-nowrap m-2" >
                    <span class="input-group-text m-2" for="nama_p">Nama</span>
                    <input type="text" class="form-control m-2" id="nama_p" name="nama_p" placeholder="Masukan Nama" required>
                  </div>
                
                  <div class="input-group flex-nowrap m-2">
                    <span class="input-group-text m-2" for="jekel">Jenis kelamin</span> 
                    <select class="form-control m-2 text-center"  name="jekel" id="jekel" required> 
                    <option value="">-pilih Jenis Kelamin-</option>
                      <option value="perempuan">PR</option>
                      <option value="laki-laki">LK</option>
                    </select>
                  </div>
                  <div class="input-group flex-nowrap m-2">
                    <span class="input-group-text m-2" for="tgl_datang">Tanggal Datang</span>
                    <input type="date" class="form-control m-2" id="tgl_datang" name="tgl_datang" required>
                  </div>
                  <div class="input-group flex-nowrap m-2" >
                    <span class="input-group-text m-2" for="desal">Desa Asal</span>
                    <input type="text" class="form-control m-2" id="desal" name="desal" placeholder="Masukan Desa Asal" required>
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
              <h5 class="card-title"><b>Data Pendatang</b></h5>
              <div class="col-md-4  " style="float :right">
              <form class="d-flex" role="search ml-auto " action="" method="get" >
                  <input class="form-control me-2" type="text" name="cari" placeholder="Search...." aria-label="Search" style="box-shadow: 0 2px 7px rgba(0,0,0,0.1) "
                   autofocus autocomplete="off">
                  <button class="btn btn-outline-info"  type="submit" style="box-shadow: 0 2px 7px rgba(0,0,0,0.1)">Search</button>
                </form>  
                
              </div>
              <table class="table">
            <thead>
              <tr class="text-center">
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Nik</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Tanggal Datang</th>
                <th scope="col">Desa Asal</th>               
                <th scope="col">Aksi</th>
              </tr>

              <?php $no=1; 

               if(isset($_GET['cari'])) {

                   $cari = $_GET['cari'];
                   $ambildata = mysqli_query($koneksi, "select * from datang where nama_p like '%".$cari."%'");
            
                }else{

                  $ambildata = mysqli_query($koneksi, "select * from datang");              
                
                  } 
                                
                    while ($tampil = mysqli_fetch_array($ambildata)) {
              ?>
              
             
              <tr>
                <th><?= $no; ?></th>
                <td><?= $tampil['nama_p']; ?></td>
                <td><?= $tampil['nik_p']; ?></td>
                <td><?= $tampil['jekel']; ?></td>
                <td><?= $tampil['tgl_datang']; ?></td>
                <td><?= $tampil['desal']; ?></td>
                <td>                           
                      <a href="penedit.php?id_datang=<?= $tampil['id_datang']; ?>">
                        <button type="button"  class="btn bg-info" data-bs-toggle="modal" data-bs-target="#editModal">
                        <i class="fa-solid fa-pen-to-square text-white"></i></button></a>

                     <a href="pendatang/hapus.php?id_datang=<?= $tampil['id_datang']; ?>" onclick="return confirm('Yakin Ingin Menghapus Data?')">
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