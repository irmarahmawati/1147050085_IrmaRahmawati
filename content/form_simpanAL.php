
  <h1>Tambah Data Wisata Alam</h1>
      <div class="col-md-10" style="padding:0px">
      <ol class="breadcrumb" style="margin:0;border-radius:0;">
         <li><a href="#">Home</a></li>
         <li class="active">Data User</li>
      </ol>
   </div>
 <div class="col-md-10" style="min-height:600px">
       
          
  <form method="post" action="proses_simpanAL.php" enctype="multipart/form-data">
  <table cellpadding="8">
  <tr>
    <td>ID</td>
    <td><input type="text" name="id"></td>
  </tr>
  <tr>
    <td>Kota</td>
    <td>
    <input type="radio" name="kota" value="Bandung"> Bandung
    <input type="radio" name="kota" value="Banjar"> Banjar
	<input type="radio" name="kota" value="Bekasi"> Bekasi
	<input type="radio" name="kota" value="Bogor"> Bogor
	<input type="radio" name="kota" value="Ciamis"> Ciamis
	<input type="radio" name="kota" value="Cianjur"> Cianjur
	<input type="radio" name="kota" value="Cimahi"> Cimahi
	<input type="radio" name="kota" value="Cirebon"> Cirebon
	<input type="radio" name="kota" value="Depok"> Depok
	<input type="radio" name="kota" value="Garut"> Garut
	<input type="radio" name="kota" value="Indramayu"> Indramayu
	<input type="radio" name="kota" value="Karawang"> Karawang
	<input type="radio" name="kota" value="Kuningan"> Kuningan
	<input type="radio" name="kota" value="Majalengka"> Majalengka
	<input type="radio" name="kota" value="Pangandaran"> Pangandaran
	<input type="radio" name="kota" value="Purwakarta"> Purwakarta
	<input type="radio" name="kota" value="Sukabumi"> Sukabumi
	<input type="radio" name="kota" value="Sumedang"> Sumedang
	<input type="radio" name="kota" value="Tasikmalaya"> Tasikmalaya
    </td>
  </tr>
  <tr>
    <td>Nama Tempat</td>
    <td><input type="text" name="nama_tempat"></td>
  </tr>
  <tr>
    <td>Alamat</td>
    <td><textarea name="alamat"></textarea></td>
  </tr>
  <tr>
    <td>Telepon</td>
    <td><input type="text" name="telp"></td>
  </tr>
  <tr>
    <td>Deskripsi</td>
    <td><textarea name="deskripsi"></textarea></td>
  </tr>
  <tr>
    <td>Harga Tiket</td>
    <td><input type="text" name="harga_tiket"></td>
  </tr>
  <tr>
    <td>Jam Kunjungan </td>
    <td><input type="text" name="jam_kunjungan"></td>
  </tr>
  <tr>
    <td>Fasilitas</td>
    <td><textarea name="fasilitas"></textarea></td>
  </tr>
  <tr>
    <td>Foto</td>
    <td><input type="file" name="foto" accept="image/*"> (foto maximal 1 MB) </td>
  </tr>
  </table>
  
  <hr>
  <input type="submit" value="Simpan">
  <a href="admin_wisata_alam.php"><input type="button" value="Batal"></a>
  </form>

</div>
