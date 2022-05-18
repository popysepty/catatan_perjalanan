<?php
session_start();
date_default_timezone_set('Asia/Jakarta');
$nik        = $_SESSION['nik'];
$nama_lengkap = $_SESSION['nama_lengkap'];
$tanggal = date('d-m-Y');
$jam     = date('H:i a');
$lokasi  = $_POST['lokasi'];
$suhu    = $_POST['suhu'];
$id_catatan = rand(0, 100000);

$format = "\n$id_catatan|$nik|$nama_lengkap|$tanggal|$jam|$lokasi|$suhu";

//kita buka file config.txt
$file = fopen('catatan.txt','a');
fwrite($file, $format);

//tutup file config
fclose($file);

?>
<script type="text/javascript">
    alert('Data Catatan Perjalanan Sudah Tersimpan.');
    window.location.assign('user.php?url=catatan_perjalanan');
</script>