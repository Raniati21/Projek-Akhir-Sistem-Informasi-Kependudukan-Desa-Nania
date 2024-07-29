<?php 
    require ("index.php");

    include ("connection/koneksi.php");
    //ambil id dari id

    $id = $_GET['id_lahir'];

    $sql = mysqli_query($koneksi,"SELECT * FROM lahir WHERE id_lahir = $id");
    $data = mysqli_fetch_array($sql);

?>
                     
             <!-- modal Edit-->
          
                  <div class="col-md-10 p-5 pt-4">
                      <div class="conteiner">
                        <div class="card mt-5" style="box-shadow: 0 2px 7px rgba(0,0,0,0.3)">                        
                          <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Data Lahir</h1>                             
                          </div>
                          
                          <div class="modal-body" id="editModal" name="editModal">
                            <form class="" action="lahir/prosesedit.php" method="POST">
                            <input type="hidden" name="id_lahir" value="<?php echo $data['id_lahir'] ?>">
                            <div class="input-group flex-nowrap m-2">
                              <span class="input-group-text m-2" for="nama">Nama Bayi</span>
                              <input type="text" class="form-control m-2" id="nama" name="nama" value="<?php echo $data['nama'] ?>">
                            </div>
                            <div class="input-group flex-nowrap m-2" >
                              <span class="input-group-text m-2" for="tgl_lahir">Tanggal Lahir</span>
                              <input type="date" class="form-control m-2" id="tgl_lahir"  name="tgl_lahir" value=" <?php echo $data['tgl_lahir'] ?>">
                            </div>
                            <div class="input-group flex-nowrap m-2">
                              <span class="input-group-text m-2" for="jekel">Jenis Kelamin</span>
                              <select class="form-control m-2 text-center"  name="jekel"  id="jekel" value="<?php echo $data['jekel'] ?>"> 
                              <option value="">-pilih Jenis Kelamin-</option>
                                <option value="laki-laki">LK</option>
                                <option value="perempuan">PR</option>
                              </select>
                              </div>
                              <div class="input-group flex-nowrap m-2">
                                <span class="input-group-text m-2" for="id_kk">Keluarga</span>
                                    <select  class="form-control m-2 text-center"  id ="id_kk" name="id_kk" value="<?php echo $data['id_kk'] ?>">
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
                            <a href="lahir.php"> 
                              <button type="button" class="btn btn-warning text-white 
                               " name="close" data-bs-dismiss="modal" >Close</button>
                            </a> 
                              <button type="submit" class="btn btn-primary"  name="ubah">Ubah</button>
                          </div>
                          
                          </form>
                        </div>
                      </div>
                      </div>
            