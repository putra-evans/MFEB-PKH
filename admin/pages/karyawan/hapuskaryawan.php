<?php
$id = $_GET['id'];

$db->HapusKaryawan($id);
echo "
   <script>
   alert('data berhasil di hapus');
   window.location='karyawan.html'
   </script>";
