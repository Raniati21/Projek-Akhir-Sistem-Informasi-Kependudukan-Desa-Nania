<?php
require ("index.php");

include ("connection/koneksi.php");


//ambil id dari url
      $id_datang = $_GET['id_datang'];

        $sql = mysqli_query($koneksi, "SELECT * FROM datang WHERE id_datang = $id_datang");
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
                            <form class="" action="pendatang/prosesedit.php" method="POST">
                            <input type="hidden" name="id_datang" value="<?php echo $data['id_datang'] ?>">
                            <div class="input-group flex-nowrap m-2">

                              <span class="input-group-text m-2" for="nik_p">Nik</span>
                              <input type="text" class="form-control m-2" id="nik_p" name="nik_p" value="<?php echo $data['nik_p'] ?>">
                            </div>
                            <div class="input-group flex-nowrap m-2" >
                              <span class="input-group-text m-2" for="nama_p">Nama</span>
                              <input type="text" class="form-control m-2 p-2" id="nama_p"  name="nama_p" value="<?php echo $data['nama_p'] ?>">
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
                              <span class="input-group-text m-2" for="tgl_datang">Tanggal Datang</span>
                              <input type="date" class="form-control m-2" id="tgl_datang"  placeholder="" name="tgl_datang" value="<?php echo $data['tgl_datang'] ?>">
                            </div>
                            <div class="input-group flex-nowrap m-2" >
                              <span class="input-group-text m-2" for="desal">Desa Asal</span>
                              <input type="text" class="form-control m-2" id="desal"  name="desal" value="<?php echo $data['desal'] ?>">
                            </div>
                           
                                                                                                 
                          <div class="modal-footer">
                            <a href="penduduk.php"> 
                              <button type="button" class="btn btn-warning text-white" name="close" data-bs-dismiss="modal">Close</button>
                            </a> 
                              <button type="submit" class="btn btn-primary" name="ubah">Ubah</button>
                          </div>
                          
                          </form>
                        </div>
                      </div>
                    </div>

            