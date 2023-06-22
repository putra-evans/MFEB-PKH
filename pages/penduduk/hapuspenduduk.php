<?php
$id = $_GET['id'];

$db->HapusPdd($id);
echo "
   <script>
   alert('data berhasil di hapus');
   window.location='penduduk.html'
   </script>";
