<?php
include 'koneksi.php';

if (isset($_POST['simpan'])) {
  $nama = $_POST['nama'];
  $sql = "INSERT INTO mahasiswa (nama) VALUES ('$nama')";
  if (mysqli_query($conn, $sql)) {
    echo "Data berhasil disimpan!";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}
?>
<form method="POST">
  <input type="text" name="nama" placeholder="Masukkan Nama">
  <button type="submit" name="simpan">Simpan</button>
</form>