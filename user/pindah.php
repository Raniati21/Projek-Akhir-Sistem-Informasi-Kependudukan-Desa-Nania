<?php
  require ("index.php");

  require ("connection/koneksi.php");

  //get data
  //ambil data total
  $get4 = mysqli_query($koneksi, "select * from pindah");
  $count4 = mysqli_num_rows($get4);    

?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Data Pindah</title>
  </head>
  <body>

  <div class="col-md-10 p-4">
    <div class="conteiner">  
      
    <h3>
          <i class="fa-solid fa-users m-3 pt-5"></i>Penduduk Pindah</h3><hr class="bg-info">        
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
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data </h1>
                  <button type="button" class="btn-close pt-4" data-bs-dismiss="modal" aria-label="Close"></button>
                  
                </div>

                <div class="modal-body">
                  <form class="" action="pindah/simpan.php" method="POST">
                 
                  <div class="input-group flex-nowrap m-2">
                    <span class="input-group-text m-2" for="id_penduduk">Nama</span>
                        <select name="id_penduduk" id="id_penduduk" autofocus required>
                            <option value="">Nama </option>
                                <?php
                                    $query = mysqli_query($koneksi, "select * from pddk") or die (mysqli_error($koneksi));
                                    while($data = mysqli_fetch_array($query)){
                                        echo "
                                              <option value=$data[id_penduduk]> $data[nik], $data[nama]</option>";
                                    }
                                ?>
                            </select>  
                    
                  </div>
                  <div class="input-group flex-nowrap m-2" >
                    <span class="input-group-text m-2" for="tgl_pindah">tgl Pindah</span>
                    <input type="date" class="form-control m-2" id="tgl_pindah" name="tgl_pindah" required>
                  </div>
                    <div class="input-group flex-nowrap m-2" >
                    <span class="input-group-text m-2" for="alasan">Alasan</span>
                    <input type="text" class="form-control m-2" id="alasan" name="alasan" placeholder="Masukan Alasan" required>
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
              <h5 class="card-title"><b>Data Pindah</b></h5> 
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
                <th scope="col">Nama</th>
                <th scope="col">Nik</th>               
                <th scope="col">Tg Pindah</th>
                <th scope="col">Alasa</th>
                <th scope="col">Aksi</th>
              </tr>

              <?php $no=1; 
              
              if(isset($_GET['cari'])) {
                $cari = $_GET['cari'];
                $ambildata = mysqli_query($koneksi, "select * from pddk inner join pindah on pddk.id_penduduk=pindah.id_penduduk where pddk.nama like '%".$cari."%'");             

            }else{
              $ambildata = mysqli_query($koneksi, "select * from pddk inner join pindah on pddk.id_penduduk=pindah.id_penduduk ");     

                }
                    
                while ($tampil = mysqli_fetch_array($ambildata)) {
              ?>
              
             
              <tr>
                <th><?= $no; ?></th>
                <td><?= $tampil['nama']; ?></td>
                <td><?= $tampil['nik']; ?></td>                
                <td><?= $tampil['tgl_pindah']; ?></td>
                <td><?= $tampil['alasan']; ?></td>                
                <td>
                      <a href="piedit.php?id_pindah=<?= $tampil['id_pindah']; ?>">
                        <button type="button" class="btn bg-info" data-bs-toggle="modal" data-bs-target="#editModal">
                        <i class="fa-solid fa-pen-to-square text-white"></i></button></a>
     
                      <a href="pindah/hapus.php?id_pindah=<?= $tampil['id_pindah']; ?>" onclick="return confirm('Yakin Ingin Menghapus Data?')">
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
