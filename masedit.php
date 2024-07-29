<?php 
    require ("index.php");

    require ("connection/koneksi.php");

    //ambil id dari id url
    $id = $_GET['id'];

    $sql = mysqli_query($koneksi,"SELECT * FROM pengguna WHERE id = $id");
    $data = mysqli_fetch_array($sql);

?>
                     
             <!-- modal Edit-->
          
                  <div class="col-md-10 p-5 pt-4">
                      <div class="conteiner">
                        <div class="card mt-5" style="box-shadow: 0 2px 7px rgba(0,0,0,0.3)">                        
                          <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Data Master</h1>                             
                          </div>
                          
                          <div class="modal-body" id="editModal" name="editModal">
                            <form class="" action="master/prosesedit.php" method="POST">
                            <input type="hidden" name="id" value="<?php echo $data['id'] ?>">                                                          
                                </div>
                                <div class="input-group flex-nowrap m-2">
                                    <span class="input-group-text m-2" for="nama">Nama</span>
                                    <input type="text" class="form-control m-2" id="nama" name="nama" value="<?php echo $data['nama'] ?>">
                                </div>
                                <div class="input-group flex-nowrap m-2">
                                    <span class="input-group-text m-2" for="username">username</span>
                                    <input type="text" class="form-control m-2" id="username" name="username" value="<?php echo $data['username'] ?>">
                                </div>
                                <div class="input-group flex-nowrap m-2">
                                    <span class="input-group-text m-2" for="password">password</span>
                                    <input type="text" class="form-control m-2" id="password" name="password" value="<?php echo $data['password'] ?>">
                                </div>
                                <div class="input-group flex-nowrap m-2">
                                    <span class="input-group-text m-2" for="level">Level</span> 
                                    <select class="form-control m-2"  name="level" id="level" value="<?php echo $data['level'] ?>">                            > 
                                    <option value="">-pilih-</option>
                                    <option value="Admin">Admin</option>
                                    <option value="User">User</option>
                                    </select>
                                </div>
                          <div class="modal-footer">
                            <a href="master.php"> 
                              <button type="button" class="btn btn-warning text-white" name="close" data-bs-dismiss="modal" >Close</button>
                            </a> 
                              <button type="submit" class="btn btn-primary" name="ubah">Ubah</button>
                          </div>
                          
                          </form>
                        </div>
                      </div>
                      </div>
            