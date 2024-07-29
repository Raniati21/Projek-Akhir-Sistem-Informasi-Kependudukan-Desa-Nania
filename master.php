<?php
  require ("index.php");
  require ("connection/koneksi.php");
  

?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Data Master</title>
  </head>
  <body>

  <div class="col-md-10 p-4">
    <div class="conteiner">
    <h3>
          <i class="fa-solid fa-users m-3 pt-5"></i>Data Master</h3><hr class="bg-info">        
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
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data</h1>
                  <button type="button" class="btn-close pt-4" data-bs-dismiss="modal" aria-label="Close"></button>
                  
                </div>

                <div class="modal-body">
                  <form class="" action="master/simpan.php" method="POST">
                  <div class="input-group flex-nowrap m-2">
                   
                    <span class="input-group-text m-2" for="nama">nama</span>
                    <input type="text" class="form-control m-2" id="nama" name="nama" placeholder="Masukan Nama" required>
                  </div>                                                     
                  <div class="input-group flex-nowrap m-2">
                    <span class="input-group-text m-2" for="username">username</span>
                    <input type="text" class="form-control m-2" id="username" name="username"  placeholder="Masukan Username" required>
                  </div>                
                  <div class="input-group flex-nowrap m-2">
                    <span class="input-group-text m-2" for="password">password</span>
                    <input type="text" class="form-control m-2" id="password" name="password" placeholder="Masukan Password" required>
                  </div>
                  <div class="input-group flex-nowrap m-2">
                    <span class="input-group-text m-2" for="level">Level</span> 
                    <select class="form-control m-2"  name="level" id="level" required> 
                    <option value="">-pilih-</option>
                      <option value="Admin">Admin</option>
                      <option value="User">User</option>
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
                                    
          <div class="card mt-3 ">
            <div class="card-body" style="box-shadow: 0 2px 7px rgba(0,0,0,0.3)">
              <h5 class="card-title"><b>Data Penduduk</b></h5> 
              <div class="col-md-4  " style="float :right">
                <form class="d-flex" role="search ml-auto " action="" method="get" >
                  <input class="form-control me-2" type="text" name="cari" placeholder="Search...." aria-label="Search" style="box-shadow: 0 2px 7px rgba(0,0,0,0.1) "
                   autofocus autocomplete="off">
                  <button class="btn btn-outline-info"  type="submit" style="box-shadow: 0 2px 7px rgba(0,0,0,0.1)">Search</button>
                </form> 
              </div>              
            
              <table class="table mt-7">
            <thead>
              <tr>             
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Username</th>
                <th scope="col">Password</th>
                <th scope="col">Level</th>               
                <th scope="col">Aksi</th>
              </tr>

              <?php $no=1;
                
              
                if(isset($_GET['cari'])){
                  $cari = $_GET['cari'];
                  
                  $ambildata = mysqli_query($koneksi, "select * from pengguna where nama like '%".$cari."%'");				
                }else{
                  $ambildata = mysqli_query($koneksi, "select * from pengguna");		
                }
                                              
  
                  while ($tampil = mysqli_fetch_array($ambildata)) {
                   
                 
              ?>
              
             
              <tr>
                <th><?= $no; ?></th>
                <td><?= $tampil['nama']; ?></td>
                <td><?= $tampil['username']; ?></td>
                <td><?= $tampil['password']; ?></td>
                <td><?= $tampil['level']; ?></td>                                
                <td>
                      <a href="masedit.php?id=<?= $tampil['id']; ?>">
                        <button type="button" class="btn bg-info" data-bs-toggle="modal" data-bs-target="#editModal">
                        <i class="fa-solid fa-pen-to-square text-white"></i></button></a>

                   
                      <a href="master/hapus.php?id=<?= $tampil['id']; ?>" onclick="return confirm('Yakin Ingin Menghapus Data?')">
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
</div>
</body>
</html>
