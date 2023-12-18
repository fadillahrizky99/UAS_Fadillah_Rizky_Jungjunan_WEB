<?php
mysqli_query($konek," DELETE FROM pelanggan WHERE id = '$_GET[id]'");
echo"<script>alert('hapus data berhasil'); document.location = '?page=tabel';</script>";
?>