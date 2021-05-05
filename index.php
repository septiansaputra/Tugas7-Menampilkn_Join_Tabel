<html>
   <head>
      <title>Menampilkan Data Tabel MySQL Dengan mysqli_fetch_array</title>
      <style>
         body {font-family:tahoma, arial}
         table {border-collapse: collapse}
         th, td {font-size: 13px; border: 1px solid #DEDEDE; padding: 3px 5px; color: #303030}
         th {background: #CCCCCC; font-size: 12px; border-color:#B0B0B0}
      </style>
   </head>
   <body>



 <h3>Tabel pelanggan (mysqli_fetch_row)</h3>
      <table>
         <thead>
            <tr>
               <th>ID PELANGGAN</th>
               <th>NAMA PELANGGAN</th>
               <th>ALAMAT PELANGGAN</th>

            </tr>
         </thead>
         <?php
          include 'koneksi.php';     
            $sql = 'SELECT  * FROM pelanggan';
            $query = mysqli_query($koneksi, $sql);    
            while ($row = mysqli_fetch_array($query))
            {
               ?>
         <tbody>
            <tr>
               <td><?php echo $row[0] ?></td>
               <td><?php echo $row[1] ?></td>
               <td><?php echo $row[2] ?></td>
            </tr>
         </tbody>
         <?php
            }
            ?>
      </table>




       <h3>Tabel produk (mysqli_fetch_row)</h3>
      <table>
         <thead>
            <tr>
               <th>ID BARANG</th>
               <th>NAMA PRODUK</th>
               <th>HARGA PRODUK</th>
               <th>KEMASAN PRODUK</th>

            </tr>
         </thead>
         <?php
          include 'koneksi.php';     
            $sql = 'SELECT  * FROM produk';
            $query = mysqli_query($koneksi, $sql);    
            while ($row = mysqli_fetch_array($query))
            {
               ?>
         <tbody>
            <tr>
               <td><?php echo $row[0] ?></td>
               <td><?php echo $row[1] ?></td>
               <td><?php echo $row[2] ?></td>
               <td><?php echo $row[3] ?></td>
             
            </tr>
         </tbody>
         <?php
            }
            ?>
      </table>



      <h3>Tabel salesman (mysqli_fetch_array)</h3>
      <table>
         <thead>
            <tr>

               <th>ID SALESMAN</th>
               <th>NAMA SALES</th>
               <th>ID PRODUK</th>
               <th>ID PELANGGAN</th>
            
            </tr>
         </thead>
           <?php
          include 'koneksi.php';     
            $sql = 'SELECT  * FROM salesman';
            $query = mysqli_query($koneksi, $sql);    
            while ($row = mysqli_fetch_array($query))
            {
               ?>
         <tbody>
            <tr>
       
               <td><?php echo $row['id_salesman'] ?></td>
               <td><?php echo $row['nama_salesman'] ?></td>
               <td><?php echo $row['id_produk'] ?></td>
                <td><?php echo $row['id_pelanggan'] ?></td>
             
            </tr>
         </tbody>
         <?php
            }
            ?>
      </table>


            <h3>Inner Join   (mysqli_fetch_array)</h3>
      <table>
         <thead>
            <tr>

               <th>ID SALESMAN</th>
               <th>NAMA SALES</th>
               <th>HARGA PRODUK</th>
               <th>NAMA PELANGGAN</th>
            
            </tr>
         </thead>
           <?php
          include 'koneksi.php';     
            $sql = 'SELECT id_salesman,nama_salesman,nama_produk,harga_produk,kemasan_produk,nama_pelanggan, alamat_pelanggan FROM salesman RIGHT OUTER JOIN produk on salesman.id_produk=produk.id_produk RIGHT OUTER JOIN pelanggan ON salesman.id_pelanggan=pelanggan.id_pelanggan';
            $query = mysqli_query($koneksi, $sql);    
            while ($row = mysqli_fetch_array($query))
            {
               ?>
         <tbody>
            <tr>
       
               <td><?php echo $row['id_salesman'] ?></td>
               <td><?php echo $row['nama_salesman'] ?></td>
               <td><?php echo $row['harga_produk'] ?></td>
                <td><?php echo $row['nama_pelanggan'] ?></td>
             
            </tr>
         </tbody>
         <?php
            }
            ?>
      </table>


            <h3>Outer Join(mysqli_fetch_array)</h3>
      <table>
         <thead>
            <tr>

               <th>ID SALESMAN</th>
               <th>NAMA SALES</th>
               <th>ID PRODUK</th>
               <th>ID PELANGGAN</th>
            
            </tr>
         </thead>
           <?php
          include 'koneksi.php';     
            $sql = 'SELECT  * FROM salesman';
            $query = mysqli_query($koneksi, $sql);    
            while ($row = mysqli_fetch_array($query))
            {
               ?>
         <tbody>
            <tr>
       
               <td><?php echo $row['id_salesman'] ?></td>
               <td><?php echo $row['nama_salesman'] ?></td>
               <td><?php echo $row['id_produk'] ?></td>
                <td><?php echo $row['id_pelanggan'] ?></td>
             
            </tr>
         </tbody>
         <?php
            }
            ?>
      </table>

   </body>
</html>