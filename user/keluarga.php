<?php
  require ("index.php");

  require ("../connection/koneksi.php");  

  //get data
  //ambil data total
  $get0 = mysqli_query($koneksi, "select * from keluarga_kk");
  $count1 = mysqli_num_rows($get0);



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
          <i class="fa-solid fa-users m-3 pt-5"></i>Anggota Keluarga</h3><hr class="bg-info">        
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
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>                  
                </div>

                <div class="modal-body">
                  <form class="" action="anggota/simpan.php" method="POST">
                  <div class="input-group flex-nowrap m-2">
                    <span class="input-group-text m-2" for="id_penduduk">Nama</span>
                        <select name="id_penduduk" id="id_penduduk">
                            <option value=""> - Pilih Penduduk - </option>
                                <?php
                                    $query = mysqli_query($koneksi, "select * from pddk") or die (mysqli_error($koneksi));
                                    while($data = mysqli_fetch_array($query)){
                                        echo "
                                              <option value=$data[id_penduduk]> $data[nik], $data[nama]</option>";
                                    }
                                ?>
                            </select>  
                    </div>
                    <div class="input-group flex-nowrap m-2">
                    <span class="input-group-text m-2" for="jekel">JK</span> 
                    <select class="form-control m-2"  name="jekel" id="jekel" require> 
                    <option value="">Jenis Kelamin</option>
                      <option value="laki_laki">LK</option>
                      <option value="perempuan">PR</option>
                    </select>
                    </div>
                    <div class="input-group flex-nowrap m-2">
                    <span class="input-group-text m-2" for="hubungan">Hubungan</span> 
                    <select class="form-control m-2"   name="hubungan" id="hubungan" require> 
                    <option value="">- pilih hubungan -</option>
                      <option value="Kepala Keluarga">Kepala keluarga</option>
                      <option value="Istri">Istri</option>
                      <option value="Anak">Anak</option>
                      <option value="Orang Tua">Orang Tua</option>
                      <option value="Menantu">Menantu</option>
                      <option value="Menantu">Mertua</option>
                      <option value="Family lain">Family lain</option>
                    </select>
                    </div>
                    <div class="input-group flex-nowrap m-2">
                    <span class="input-group-text m-2" for="id_kk">keluarga</span>
                        <select name="id_kk" id="id_kk">
                            <option value=""> - Pilih keluarga - </option>
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
              <h5 class="card-title"><b>Data Keluarga</b></h5> 
              <div class="col-md-4  " style="float :right">
                <form class="d-flex" role="search ml-auto " >
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" style="box-shadow: 0 2px 7px rgba(0,0,0,0.1) ">
                  <button class="btn btn-outline-success" name="cari" type="submit"style="box-shadow: 0 2px 7px rgba(0,0,0,0.1)">Search</button>
                </form> 
              </div>
            
              <table class="table">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Nik</th>               
                <th scope="col">jekel</th>
                <th scope="col">Hubungan</th>
                <th scope="col">Kepala Keluarga</th>     
                <th scope="col">Aksi</th>       
              </tr>

              <?php $no=1;  
            

                if(isset($_GET['cari'])) {
                $cari = $_GET['cari'];
                $ambildata = mysqli_query($koneksi,  "select * from keluarga_kk inner join pddk on keluarga_kk.id_penduduk=pddk.id_penduduk inner join kartu_keluarga on keluarga_kk.id_kk=kartu_keluarga.id_kk where pddk.nama like '%".$cari."%'");             
                                      
                }else{
                    $ambildata = mysqli_query($koneksi, "select * from keluarga_kk  inner join pddk on keluarga_kk.id_penduduk=pddk.id_penduduk inner join kartu_keluarga on keluarga_kk.id_kk=kartu_keluarga.id_kk");     
                                      
                }
                                                          
                   while ($tampil = mysqli_fetch_array($ambildata)) {
               
               ?>
              
             
              <tr>
                <th><?= $no; ?></th>
                <td><?= $tampil['nama']; ?></td>
                <td><?= $tampil['nik']; ?></td>
                <td><?= $tampil['jekel']; ?></td>
                <td><?= $tampil['hubungan']; ?></td>
                <td><?= $tampil['no_kk'], ', ', $tampil['kepala_kl']; ?></td>
                
                <td>
                      <a href="kledit.php?id_kl=<?= $tampil['id_kl']; ?>">
                        <button type="button" class="btn bg-info" data-bs-toggle="modal" data-bs-target="#editModal">
                        <i class="fa-solid fa-pen-to-square text-white"></i></button></a>

                   
                      <a href="anggota/hapus.php?id_kl=<?= $tampil['id_kl']; ?>" onclick="return confirm('Yakin Ingin Menghapus Data?'">
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
