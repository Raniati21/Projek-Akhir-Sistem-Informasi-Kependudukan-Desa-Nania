<?php 
    require ("index.php");

    require ("connection/koneksi.php");
    //ambil id dari id

    $id = $_GET['id_kl'];

    $sql = mysqli_query($koneksi,"SELECT * FROM keluarga_kk WHERE id_kl = $id");
    $data = mysqli_fetch_array($sql);

?>
                     
             <!-- modal Edit-->
          
                  <div class="col-md-10 p-5 pt-4">
                      <div class="conteiner">
                        <div class="card mt-5" style="box-shadow: 0 2px 7px rgba(0,0,0,0.3)">                        
                          <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Data</h1>                             
                          </div>
                          
                          <div class="modal-body" id="editModal" name="editModal">
                            <form class="" action="anggota/prosesedit.php" method="POST">
                            <input type="hidden" name="id_kl" value="<?php echo $data['id_kl'] ?>">
                            <div class="input-group flex-nowrap m-2">
                                <span class="input-group-text m-2" for="id_penduduk">Penduduk</span>
                                    <select  class="form-control m-2" name="id_penduduk" id="id_penduduk"  value="<?php echo $data['id_penduduk'] ?>">
                                        <option value=""> - pilih penduduk - </option>
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
                                    <select class="form-control m-2"   id="hubungan" name="hubungan"  value="<?php echo $data['id_penduduk'] ?>"> 
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
                                <span class="input-group-text m-2" for="id_kk">Keluarga</span>
                                    <select  class="form-control m-2" name="id_kk" id="id_kk">
                                        <option value=""> - Masukan Keluarga - </option>
                                            <?php
                                                $query = mysqli_query($koneksi, "select * from kartu_keluarga") or die (mysqli_error($koneksi));
                                                while($data = mysqli_fetch_array($query)){
                                                    echo "
                                                        <option value=$data[id_kk]> $data[no_kk], $data[kepala_kl]</option>";
                                                }
                                            ?>
                                        </select>  
                                </div>
                          
                          <div class="modal-footer">
                            <a href="keluarga.php"> 
                              <button type="button" class="btn btn-warning text-white 
                               " name="close" data-bs-dismiss="modal" >Close</button>
                            </a> 
                              <button type="submit" class="btn btn-primary"  name="ubah">Ubah</button>
                          </div>
                          
                          </form>
                        </div>
                      </div>
                      </div>
            