<?php 
if (!isset($_SESSION['is_logged'])) {
    echo "
        <script>
            alert('Login dulu!');
            window.location='?page=login';
        </script>
    ";
}
?>


      <div class="col-xs-12">
        <div class="card">
          <div class="card-header">
            Data Stock Pohon

          </div>
          <div class="card-body no-padding">
            <table class="datatable table table-striped primary" cellspacing="0" width="100%">
              <thead>
                  <tr>
                      
                      <th>Nama Pohon</th>
                      <th>Jenis</th>
                      <th>Ukuran</th>
                      <th>Harga</th>
                      <th>Tempat</th>
                      <th>Edit Data</th>
                      <th>Hapus Data</th>
                  </tr>
              </thead>
              <tbody>

        <?php 

          global $connection;

          $no=1;
          
        /*pembetulan*/

              $query ="SELECT * FROM pohon ORDER BY nama_pohon";    
            $data= $connection->query($query);
            while ($r=mysqli_fetch_array($data)) {

            ?>
             <tr>
          
          <td><?php echo $r['nama_pohon']; ?></td>
          <td><?php echo $r['jenis_pohon']; ?></td>
          <td><?php echo $r['ukuran_pohon']; ?></td>
          <td><?php echo $r['harga_pohon']; ?></td>
          <td><?php echo $r['lokasi']; ?></td>

          <!-- <td><a href='?page=formEdit?id_pohon=<?php echo $r['Id_pohon'];?>' class="tombol-edit">Edit</a> -->
          <td><a href='formEdit.php?id_pohon=<?php echo $r['Id_pohon'];?>' class="tombol-edit">Edit</a>
          </td>

          <td>
          <a href='proses/prosesHapus.php?id=<?php echo $r['Id_pohon'];?>' class="tombol-hapus">Hapus</a>

          </td>
         </tr>
            <?php
          }
         ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
  </div>
  </div>

  
  <script type="text/javascript" src="assets/js/vendor.js"></script>
  <script type="text/javascript" src="assets/js/app.js"></script>
