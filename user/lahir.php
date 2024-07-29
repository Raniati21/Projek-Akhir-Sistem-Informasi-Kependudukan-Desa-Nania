<?php
  require ("index.php");

  require ("connection/koneksi.php");

  //get data
  //ambil data total
  $get3 = mysqli_query($koneksi, "select * from lahir");
  $count3 = mysqli_num_rows($get3);



    

?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Data Kelahiran</title>
  </head>
  <body>

  <div class="col-md-10 p-4">
    <div class="conteiner"> 
    <h3>
          <i class="fa-solid fa-users m-3 pt-5"></i>Kelahiran</h3><hr class="bg-info">        
          <div class="row text-white">  </div>
          
          <!-- Button trigger modal -->
          <button style="box-shadow: 0 2px 7px rgba(0,0,0,0.3)" type="button" class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
          <i class="fa-regular fa-calendar-plus m-1"></i>Tambah Data
          </button>


          <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data Bayi</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  
                </div>

                <div class="modal-body">
                  <form class="" action="lahir/simpan.php" method="POST">
                 
                  <div class="input-group flex-nowrap m-2" >
                    <span class="input-group-text m-2" for="nama">Nama Bayi</span>
                    <input type="text" class="form-control m-2" id="nama" name="nama"  placeholder="Masukan Nama" autofocus required>
                  </div>
                  <div class="input-group flex-nowrap m-2">
                    <span class="input-group-text m-2" for="tgl_lahir">tanggal_lahir</span>
                    <input type="date" class="form-control m-2" id="tgl_lahir" name="tgl_lahir" required>
                    </div>
                    <div class="input-group flex-nowrap m-2">
                    <span class="input-group-text m-2" for="jekel">JK</span> 
                    <select class="form-control m-2 text-center"  name="jekel" id="jekel" required> 
                    <option value="">Jenis Kelamin</option>
                      <option value="laki_laki">LK</option>
                      <option value="perempuan">PR</option>
                    </select>
                  
              
                    <span class="input-group-text m-2" for="id_kk">Keluarga</span>
                        <select name="id_kk" id="id_kk">
                            <option value="">Keluarga </option>
                                <?php
                                    $query = mysqli_query($koneksi, "select * from kartu_keluarga") or die (mysqli_error($koneksi));
                                    while($data = mysqli_fetch_array($query)){
                                        echo "
                                              <option value=$data[id_kk]> $data[no_kk], $data[kepala_kl]</option>";
                                    }
                                ?>
                            </select>  
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
                                  
          <div class="card mt-3">
            <div class="card-body" style="box-shadow: 0 2px 7px rgba(0,0,0,0.3)">
              <h5 class="card-title"><b>Data Kelahira</b></h5> 
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
                <th scope="col">Nama Bayi</th>
                <th scope="col">Tanggal Lahir</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Keluarga</th>
                <th scope="col">Aksi</th>
              </tr>

              <?php $no=1;   
               if(isset($_GET['cari'])) {
                $cari = $_GET['cari'];
                $ambildata = mysqli_query($koneksi, "select * from lahir inner join kartu_keluarga on lahir.id_kk=kartu_keluarga.id_kk 
                where lahir.nama = '$cari'");              

            }else{                       
                $ambildata = mysqli_query($koneksi, "select * from lahir inner join kartu_keluarga on lahir.id_kk=kartu_keluarga.id_kk");   
                
            }
                while ($tampil = mysqli_fetch_array($ambildata)) {              
                
              ?>              
             
              <tr>
                <th ><?= $no; ?></th>
                <td><?= $tampil['nama']; ?></td>
                <td><?= $tampil['tgl_lahir']; ?></td>
                <td><?= $tampil['jekel']; ?></td>
                <td><?= $tampil['no_kk'], $tampil['kepala_kl']; ?></td>    
                <td>
                      <a href="ledit.php?id_lahir=<?= $tampil['id_lahir']; ?>">
                        <button type="button" class="btn bg-info" data-bs-toggle="modal" data-bs-target="#editModal">
                        <i class="fa-solid fa-pen-to-square text-white"></i></button></a>

                   
                        <a href="lahir/hapus.php?id_lahir=<?= $tampil['id_lahir']; ?>" onclick="/return confirm('Yakin Ingin Menghapus Data?')">
                        <button type="button" class="btn bg-danger">
                        <i class="fa-solid fa-trash text-white"></i></button>
                      </a>
                  </td>
              </tr>
                </thead>
                 <?php
                      $no++;
                    }
                  ?>
              </table>
                    
                </div>
              </div>
    </div>          
  </div>
</div>
</body>
</html>