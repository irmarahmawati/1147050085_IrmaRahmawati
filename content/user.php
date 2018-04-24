<html>
<body> 
 <div class="col-md-10" style="padding:0px">
      <ol class="breadcrumb" style="margin:0;border-radius:0;">
         <li><a href="#">Home</a></li>
         <li class="active">Data User</li>
      </ol>
   </div>
 <div class="col-md-10" style="min-height:600px">
         <a href="content/form_simpanAL.php">Tambah Data</a><br><br>
          
		   <table border="1" width="100%">
  <tr>
	<th> Id </th>
	<th> Kota </th>
    <th>Nama Tempat</th>
    <th>Alamat</th>
    <th>Telepon</th>
    <th>Deskripsi</th>
    <th>Harga Tiket</th>
    <th>Jam Kunjungan</th>
	<th> Fasilitas </th>
	<th> Foto </th>
    <th colspan="2">Aksi</th>
  </tr>
  <?php
  // Load file koneksi.php
  include "koneksi.php";
  
  $query = "SELECT * FROM wisata_alam"; // Query untuk menampilkan semua data wisata alam
  $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
  
  while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
    echo "<tr>";
    echo "<td>".$data['id']."</td>";
	echo "<td>".$data['kota']."</td>";
    echo "<td>".$data['nama_tempat']."</td>";
    echo "<td>".$data['alamat']."</td>";
    echo "<td>".$data['telp']."</td>";
    echo "<td>".$data['deskripsi']."</td>";
	echo "<td>".$data['harga_tiket']."</td>";
	echo "<td>".$data['jam_kunjungan']."</td>";
	echo "<td>".$data['fasilitas']."</td>";
	echo "<td><img src='images/".$data['foto']."' width='100' height='100'></td>";
    echo "<td><a href='admin_form_ubahAL.php?id=".$data['id']."'>Ubah</a></td>";
    echo "<td><a href='proses_hapusAL.php?id=".$data['id']."'>Hapus</a></td>";
    echo "</tr>";
  }
  ?>
  </table>
            <div class="col-md-12">
               <nav align="center">
                 <ul class="pagination">
                   <li>
                     <a href="#" aria-label="Previous">
                       <span aria-hidden="true">&laquo;</span>
                     </a>
                   </li>
                   <li><a href="#">1</a></li>
                   <li><a href="#">2</a></li>
                   <li><a href="#">3</a></li>
                   <li><a href="#">4</a></li>
                   <li><a href="#">5</a></li>
                   <li>
                     <a href="#" aria-label="Next">
                       <span aria-hidden="true">&raquo;</span>
                     </a>
                   </li>
                 </ul>
               </nav>

            </div>
   </div>
   
   </body>
   </html>