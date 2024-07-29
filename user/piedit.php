<?php 
    require ("index.php");

    require ("connection/koneksi.php");

    //ambil id dari id url
    $id_pindah = $_GET['id_pindah'];

    $sql = mysqli_query($koneksi,"SELECT * FROM pindah WHERE id_pindah = $id_pindah");
    $data = mysqli_fetch_array($sql);

?>
                     
             <!-- modal Edit-->
          
                  <div class="col-md-10 p-5 pt-4">
                      <div class="conteiner">
                        <div class="card mt-5" style="box-shadow: 0 2px 7px rgba(0,0,0,0.3)">                        
                          <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Data Meninggal Dunia</h1>                             
                          </div>
                          
                          <div class="modal-body" id="editModal" name="editModal">
                            <form class="" action="pindah/prosesedit.php" method="POST">
                            <input type="hidden" name="id_pindah" value="<?php echo $data['id_pindah'] ?>">
                            
                              <div class="input-group flex-nowrap m-2">
                                <span class="input-group-text m-2" for="id_penduduk">Penduduk</span>
                                    <select  class="form-control m-2 text-center" id="id_penduduk" name="id_penduduk" value="<?php echo $data['id_penduduk'] ?>">
                                        <option value=""> - Masukan Keluarga - </option>
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
                                    <span class="input-group-text m-2" for="tgl_pindah">Tanggal Pindah</span>
                                    <input type="date" class="form-control m-2" id="tgl_pindah" name="tgl_pindah" value="<?php echo $data['tgl_pindah'] ?>">
                                </div>
                                <div class="input-group flex-nowrap m-2">
                                    <span class="input-group-text m-2" for="alasan">Alasa</span>
                                    <input type="text" class="form-control m-2" id="alasan" name="alasan" value="<?php echo $data['alasan'] ?>">
                                </div>
                            
                          <div class="modal-footer">
                            <a href="pindah.php"> 
                              <button type="button" class="btn btn-warning text-white 
                               " name="close" data-bs-dismiss="modal" >Close</button>
                            </a> 
                              <button type="submit" class="btn btn-primary" name="ubah">Ubah</button>
                          </div>
                          
                          </form>
                        </div>
                      </div>
                      </div>
            