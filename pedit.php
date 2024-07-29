<?php
require ("index.php");

require ("connection/koneksi.php");


//ambil id dari url
      $id_penduduk = $_GET['id_penduduk'];

        $sql = mysqli_query($koneksi, "SELECT * FROM pddk WHERE id_penduduk = $id_penduduk");
        $data=mysqli_fetch_array($sql);

              
  ?>        
              
             <!-- modal Edit-->
          
                  <div class="col-md-10 p-5 pt-4">
                      <div class="conteiner">
                        <div class="card mt-5" style="box-shadow: 0 2px 7px rgba(0,0,0,0.3)">                        
                          <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Data</h1>                             
                          </div>
                          
                          <div class="modal-body" id="editModal" name="editModal">
                            <form class="" action="penduduk/prosesedit.php" method="POST">
                            <input type="hidden" name="id_penduduk" value="<?php echo $data['id_penduduk'] ?>">
                            <div class="input-group flex-nowrap m-2">

                              <span class="input-group-text m-2" for="nik">Nik</span>
                              <input type="text" class="form-control m-2" id="nik" name="nik" value="<?php echo $data['nik'] ?>">
                            </div>
                            <div class="input-group flex-nowrap m-2" >
                              <span class="input-group-text m-2" for="nama">Nama</span>
                              <input type="text" class="form-control m-2" id="nama"  name="nama" value=" <?php echo $data['nama'] ?>">
                            </div>
                            <div class="input-group flex-nowrap m-2">
                              <span class="input-group-text m-2" for="tempat_lahir">TTL</span>
                              <input type="text" class="form-control m-2" id="tempat_lahir"  placeholder="" name="tempat_lahir" value="<?php echo $data['tempat_lahir'] ?>">
                              <input type="date" class="form-control m-2" id="tanggal_lahir"  placeholder="" name="tanggal_lahir" value="<?php echo $data['tanggal_lahir'] ?>">
                            </div>
                            <div class="input-group flex-nowrap m-2">
                              <span class="input-group-text m-2" for="jekel">Jenis kelamin</span> 
                              <select class="form-control m-2"  name="jekel"  id="jekel" value="<?php echo $data['jekel'] ?>"> 
                              <option value="">-pilih Jenis Kelamin-</option>
                                <option value="perempuan">PR</option>
                                <option value="laki-laki">LK</option>
                              </select>
                            </div>
                            <div class="input-group flex-nowrap m-2">
                              <span class="input-group-text m-2" for="desa">Desa</span>
                              <input type="text" class="form-control m-2" id="desa"  name="desa" value="<?php echo $data['desa'] ?>">
                            </div>
                            <div class="input-group flex-nowrap m-2">
                              <span class="input-group-text m-2" for="rt">Rt/Rw</span>
                              <input type="text" class="form-control m-2" id="rt"  placeholder="RT" name="rt"value="<?php echo $data['rt'] ?>" name="rt">
                              <input type="text" class="form-control m-2" id="rw" placeholder="RW" name="rw" value="<?php echo $data['rw'] ?>" name="rw">
                            </div>
                            <div class="input-group flex-nowrap m-2">
                              <span class="input-group-text m-2" for="status">Agama</span> 
                              <select class="form-control m-2"   name="agama"  id="agama" value="<?php echo $data['agama'] ?>"> 
                              <option value="">- pilih Agama -</option>
                                <option value="islam">Islam</option><?php echo $data['status'] ?>
                                <option value="kristen">Kristen</option>
                                <option value="katolik">Katolik</option>
                                <option value="hindu">Hindu</option>
                                <option value="budha">Budha</option>
                                <option value="konghucu">Konghucu</option>
                              </select>
                            </div> 
                            <div class="input-group flex-nowrap m-2">
                              <span class="input-group-text m-2" for="pendidikan">Pendidikan</span> 
                              <select class="form-control m-2"   name="pendidikan" id="pendidikan" value="<?php echo $data['pendidikan'] ?>> 
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
                              <select class="form-control m-2"   name="kawin" id="kawin" <?php echo $data['kawin'] ?>> 
                              <option value="">-pilih Status-</option>
                              <option value="Belum Menikah">Belum Menikah</option>
                              <option value="Menikah">Menikah</option>
                              <option value="Cerai Hidup">Cerai Hidup</option>
                              <option value="Cerai Mati">Cerai Mati</option>
                              </select>
                            </div> 
                            <div class="input-group flex-nowrap m-2">
                              <span class="input-group-text m-2" for="pekerjaan">Pekerjaan</span>
                              <input type="text" class="form-control m-2" id="pekerjaan"  name="pekerjaan" value="<?php echo $data['pekerjaan'] ?>">
                            </div>
                            
                             
                                          
                         
                          <div class="modal-footer">
                            <a href="penduduk.php"> 
                              <button type="button" class="btn btn-warning text-white 
                               " name="close" data-bs-dismiss="modal" >Close</button>
                            </a> 
                              <button type="submit" class="btn btn-primary"  name="ubah">Ubah</button>
                          </div>
                          
                          </form>
                        </div>
                      </div>
                    </div>

            