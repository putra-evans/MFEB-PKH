<?php
$id = $_GET['id'];
$db->hapusBerita($id);
echo "
   <script>
   alert('data berhasil di hapus');
   window.location='berita.html'
   </script>";
