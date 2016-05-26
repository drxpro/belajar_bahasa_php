<?php 
$tahun = date ("Y");
$kabisat = ($tahun%4 == 0) ? "Kabisat" : "Bukan KABISAT";
echo "Tahun <b>$tahun</b> $kabisat";
 ?>