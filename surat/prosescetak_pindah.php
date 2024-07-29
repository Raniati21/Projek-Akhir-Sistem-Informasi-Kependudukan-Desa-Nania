<?php
 

  require ("../connection/koneksi.php");   

?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Data Pindah</title>
  </head>
  <body>

  <div class="col-md-10 p-5 pt-4">
    <div class="conteiner">
      <style>
        table, th, td {
          font-size: 10px;
          border: 1px solid black;
          border  : collapse;
          padding: 2px;
        }
        div .a {
          text-align: center;
        }
        </style>
       
          <img src="../asset/nania.jpeg" style="float: left;height:70px">
          <div class="a" style="margin-left:20px">
              <div style="font-size:18px"><b>Surat Keterangan Penduduk | Tahun 2024</b></div>
              <div style="font-size:20px"><b>Provinsi maluku </b></div>
              <div style="font-size:20px"><b> Kecamatan  Baguala Kota Ambon</b></div>
              <div style="font-size:20px"><b>Desa Nania </b></div>
              <div style="font-size:15px">Jl. Laksdya Leo Wattimena, RT 004/001 Kode Pos :97232</div>
          </div>
       
           <hr style="border : 0.5px solid black; margin: 3px 5px 10px 5px;">                
          
                <div class="a">
                  <h2 class="modal-title fs-5" id="exampleModalLabel">Data Penduduk</h1>

                                  
                    <div class="card mt-3">
                        <div class="card-body" style="box-shadow: 0 2px 7px rgba(0,0,0,0.3)">
                            
                        <table style="border : 1;" width="100%" class="table">
                        <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nik</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Tg Pindah</th>
                            <th scope="col">Alasa</th>
                        </tr>

                        <?php $no=1; 
                        
                        
                        $ambildata = mysqli_query($koneksi, "select * from pddk inner join pindah on pddk.id_penduduk=pindah.id_penduduk ");                                         
                            while ($tampil = mysqli_fetch_array($ambildata)) {
                        ?>
                        
                        
                        <tr>
                            <th><?= $no; ?></th>
                            <td><?= $tampil['nik']; ?></td>
                            <td><?= $tampil['nama']; ?></td>
                            <td><?= $tampil['tgl_pindah']; ?></td>
                            <td><?= $tampil['alasan']; ?></td>                               
                        </tr>
                                
                            <?php
                                $no++;
                                }
                            ?>
                            </thead>
                        </table>
                        <script type="text/javascript">
                             window.print();
                        </script>   
                            </div>
                        </div>
                </div>          
            </div>
            </div>
            </body>
            </html>
