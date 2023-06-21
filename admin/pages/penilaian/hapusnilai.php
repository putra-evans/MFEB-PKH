<?php
$idhapus = $_GET['idhapus'];
$hapusNormalisasi = $koneksi->query("SELECT penyiar_id FROM tbl_penilaian WHERE nilai_id = '$idhapus'")->fetch_assoc();
$pecah = $hapusNormalisasi['penyiar_id'];

$hapus = $koneksi->query("DELETE FROM tbl_normalisasi WHERE penyiar_id='$pecah'");
$hapusRank = $koneksi->query("DELETE FROM tbl_rank WHERE penyiar_id='$pecah'");
$db->HapusPenilaian($idhapus);

echo "
   <script>
   alert('data berhasil di hapus');
   window.location='penilaian.html'
   </script>";
