<?php
  require ("index.php");
  require ("connection/koneksi.php");
  
  //get data
  //ambil data total
  $get1 = mysqli_query($koneksi, "select * from pddk");
  $count1 = mysqli_num_rows($get1);               

?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Data Penduduk</title>

      <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

      <style>
        .a{
          position: relative;
          margin: 50px;
          margin-left: 80px;
        }
      </style>
  </head>
  <body>

  <div class="col-md-10 p-4">
    <div class="conteiner">     
      
        <h3>
          <i class="fa-solid fa-users m-3 pt-5 "></i>Penduduk</h3><hr class="bg-info">                        
    
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
                  <form class="" action="penduduk/psimpan.php" method="POST">
                  <div class="input-group flex-nowrap m-2">
                   
                    <span class="input-group-text m-2" for="nik">Nik</span>
                    <input type="text" class="form-control m-2" id="nik" name="nik"  placeholder="Masukan Nik"  autofocus required>
                  </div>
                  <div class="input-group flex-nowrap m-2" >
                    <span class="input-group-text m-2" for="nama">Nama</span>
                    <input type="text" class="form-control m-2" id="nama" name="nama"  placeholder="Masukan Nama" autofocus required>
                  </div>
                  <div class="input-group flex-nowrap m-2">
                    <span class="input-group-text m-2" for="tempat_lahir">TTL</span>
                    <input type="text" class="form-control m-2" id="tempat_lahir" name="tempat_lahir"  placeholder="Masukan Tempat Lahir" autofocus required>
                    <input type="date" class="form-control m-2" id="tanggal_lahir" name="tanggal_lahir" autofocus required>
                    </div>
                  <div class="input-group flex-nowrap m-2">
                    <span class="input-group-text m-2" for="jekel">Jenis kelamin</span> 
                    <select class="form-control m-2"  name="jekel" id="jekel" autofocus required> 
                    <option value="">-pilih Jenis Kelamin-</option>
                      <option value="perempuan">PR</option>
                      <option value="laki-laki">LK</option>
                    </select>
                  </div>
                 
                  <div class="input-group flex-nowrap m-2">
                    <span class="input-group-text m-2" for="desa">Desa</span>
                    <input type="text" class="form-control m-2" id="desa" name="desa"  placeholder="Masukan Desa" autofocus required>
                  </div>
                  <div class="input-group flex-nowrap m-2">
                    <span class="input-group-text m-2" for="rt">Rt/Rw</span>
                    <input type="text" class="form-control m-2" id="rt" name="rt" placeholder="RT" autofocus required>
                    <input type="text" class="form-control m-2" id="rw" name="rw" placeholder="RW" autofocus required> 
                  </div>
                  <div class="input-group flex-nowrap m-2">
                    <span class="input-group-text m-2" for="agama">Agama</span> 
                    <select class="form-control m-2"   name="agama" id="agama" placeholder="" autofocus required> 
                    <option value="">- pilih Agama -</option>
                      <option value="islam">Islam</option>
                      <option value="kristen">Kristen</option>
                      <option value="katolik">Katolik</option>
                      <option value="hindu">Hindu</option>
                      <option value="budha">Budha</option>
                      <option value="konghucu">Konghucu</option>
                    </select>
                  </div> 
                  <div class="input-group flex-nowrap m-2">
                    <span class="input-group-text m-2" for="pendidikan">Pendidikan</span> 
                    <select class="form-control m-2"   name="pendidikan" id="pendidikan" autofocus required> 
                    <option value="">-pilih Status-</option>
                    <option value="Tidak/Belum Sekolah">Tidak/Belum Sekolah</option>
                    <option value="SD/Sederajat">SD/Sederajat</option>
                    <option value="SLTA/Sederajat">SLTA/Sederajat</option>
                    <option value="SLTP/Sederajat">SLTP/Sederajat</option>
                    <option value="Mahasiswa">Mahasiswa</option>
                    <option value="Sarjana">Sarjana</option>
                    </select>
                  </div>
                  <div class="input-group flex-nowrap m-2">
                    <span class="input-group-text m-2" for="kawin">Status Menikah</span> 
                    <select class="form-control m-2"   name="kawin" id="kawin" autofocus required> 
                    <option value="">-pilih Status-</option>
                    <option value="Belum Menikah">Belum Menikah</option>
                    <option value="Menikah">Menikah</option>
                    <option value="Cerai Hidup">Cerai Hidup</option>
                    <option value="Cerai Mati">Cerai Mati</option>
                    </select>
                  </div> 
                  <div class="input-group flex-nowrap m-2">
                    <span class="input-group-text m-2" for="pekerjaan">Pekerjaan</span>
                    <input type="text" class="form-control m-2" id="pekerjaan" name="pekerjaan"  placeholder="Masukan Pekerjaan" autofocus required>
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
            
              <table class="table">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Nik</th>
                <th scope="col">TTl</th>             
                <th scope="col">JK</th>                
                <th scope="col">Desa<A</th>
                <th scope="col">Rt</th>
                <th scope="col">Rw</th>
                <th scope="col">Agama</th>
                <th scope="col">Pendidikan</th>
                <th scope="col">Status</th>
                <th scope="col">Pekerjaan</th>
                <th scope="col">Aksi</th>
              </tr>

              <?php $no=1;

               if(isset($_GET['cari'])){
                $cari = $_GET['cari'];

                $ambildata = mysqli_query($koneksi, "select * from pddk where nama like '%".$cari."%'");				
              }else{
                $ambildata = mysqli_query($koneksi, "select * from pddk");		
              }
                
                                            

                while ($tampil = mysqli_fetch_array($ambildata)) {
                 
              ?>              
             
              <tr>
                <th><?= $no; ?></th>
                <td><?= $tampil['nama']; ?></td>
                <td><?= $tampil['nik']; ?></td>
                <td><?= $tampil['tempat_lahir'], ', ', $tampil['tanggal_lahir']; ?></td>                
                <td><?= $tampil['jekel']; ?></td>                
                <td><?= $tampil['desa']; ?></td>                
                <td><?= $tampil['rt']; ?></td>
                <td><?= $tampil['rw']; ?></td>
                <td><?= $tampil['agama']; ?></td>
                <td><?= $tampil['pendidikan']; ?></td>
                <td><?= $tampil['kawin']; ?></td>
                <td><?= $tampil['pekerjaan']; ?></td>
                
                <td>
                      <a href="pedit.php?id_penduduk=<?= $tampil['id_penduduk']; ?>">
                        <button type="button" class="btn bg-info" data-bs-toggle="modal" data-bs-target="#editModal">
                        <i class="fa-solid fa-pen-to-square text-white"></i></button></a>

                   
                      <a href="penduduk/phapus.php?id_penduduk=<?= $tampil['id_penduduk']; ?>" onclick="return confirm('Yakin Ingin Menghapus Data?')">
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

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</body>
</html>
