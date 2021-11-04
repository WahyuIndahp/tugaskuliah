<?php

include("konek.php");

$sql = "DELETE FROM tugas WHERE id=".$_GET['id'].";";
mysqli_query($koneksi, $sql);
header("location: index.php");

?>
