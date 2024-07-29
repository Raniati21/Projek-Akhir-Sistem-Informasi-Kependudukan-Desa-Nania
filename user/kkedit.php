<?php
require ("index.php");

require ("connection/koneksi.php");


//ambil id dari url
      $id_kk = $_GET['id_kk'];

        $sql = mysqli_query($koneksi, "SELECT * FROM kartu_keluarga WHERE id_kk = $id_kk");
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
                            <form class="" action="kk/prosesedit.php" method="POST">
                            <input type="hidden" name="id_kk" value="<?php echo $data['id_kk'] ?>">
                            <div class="input-group flex-nowrap m-2">

                              <span class="input-group-text m-2" for="no_kk">no_kk</span>
                              <input type="text" class="form-control m-2" id="no_kk" name="no_kk" value="<?php echo $data['no_kk'] ?>">
                            </div>
                            <div class="input-group flex-nowrap m-2" >
                              <span class="input-group-text m-2" for="kepala_kl">kepala_kl</span>
                              <input type="text" class="form-control m-2" id="kepala_kl"  name="kepala_kl" value="<?php echo $data['kepala_kl'] ?>">
                            </div>
                            <div class="input-group flex-nowrap m-2">
                              <span class="input-group-text m-2" for="desa">Desa</span>
                              <input type="text" class="form-control m-2" id="desa" placeholder="" name="desa" value="<?php echo $data['desa'] ?>">                          
                            </div>                           
                            <div class="input-group flex-nowrap m-2">
                              <span class="input-group-text m-2" for="rt">Rt/Rw</span>
                              <input type="text" class="form-control m-2" id="rt"  placeholder="RT" name="rt"value="<?php echo $data['rt'] ?>" >
                              <input type="text" class="form-control m-2" id="rw" placeholder="RW" name="rw" value="<?php echo $data['rw'] ?>">
                            </div>        
                            <div class="input-group flex-nowrap m-2" >
                              <span class="input-group-text m-2" for="kec_kota">Kec/Kota</span>
                              <input type="text" class="form-control m-2" id="kec_kota" name="kec_kota"  placeholder="Masukan Kec/Kota" value="<?php echo $data['kec_kota'] ?>">
                            </div>
                            <div class="input-group flex-nowrap m-2" >
                              <span class="input-group-text m-2" for="prov">Provinsi</span>
                              <input type="text" class="form-control m-2" id="prov" name="prov"  placeholder="Masukan  Provinsi" value="<?php echo $data['prov'] ?>">
                            </div>                                                                                                                      
                         
                          <div class="modal-footer">
                            <a href="kk.php"> 
                              <button type="button" class="btn btn-warning text-white" name="close" data-bs-dismiss="modal" >Close</button>
                            </a> 
                              <button type="submit" class="btn btn-primary"  name="ubah">Ubah</button>
                          </div>
                          
                          </form>
                        </div>
                      </div>
                    </div>

            