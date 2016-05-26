<?php 
$nis = "02";
$nama = 'Adrian Milano';
$umur = 15;
$nilai = 10.00;
$status = TRUE;

echo "NIS : " . $nis . "<br>";
echo "Nama : $nama<br>";
print "Umur : " . $umur; print "<br>";
printf("Nilai : %.3f<br>", $nilai);
if ($status)
	echo "Status : Jomblo";
	else 
	echo "Status : Tidak Jomblo";

 ?>