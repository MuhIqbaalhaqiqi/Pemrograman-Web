<?php 
$nrp = array("1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30");

$nama = array("Dwi Kuswanto","Mochammad Zaenuri","Andri Muliadi","Kaharudin Sallam","Valentino Telaubun","Syarif Wijianto","Nerius Alom","Gian Zola Nasrullah","Nur Iskandar","Riyatno Abiyoso","Malik Risaldi","Risqi Putro Utomo","Abdul Rohim","Ahmad Wahyudi","Ahmad Ubaidillah","Ricky Oherella","Sandy Ferizal","Takwir","Rahel Radiansyah","Ibrahim Musa Kosepa","Ilham Fathoni","Muhammad Nasir","Rio Agata","Ragil Sudirman","Baeny Zaman","Andar Suhendar","Ardiyan Pramuja","Toni Sudarmanto","Miftahul Hadi","Hasyim");asort($nama);
$dosen =  array("Desy Intan Permatasari");
$kelas=array("D4-A","D4-B" );
$nilai= array("A");
$aktif = array("HIMTI");
function Tampil($nrp,$nama,$dosen,$kelas,$nilai,$aktif){
	for ($i=0; $i <15 ; $i++) {
	echo "<p>user $nrp[$i]<p>";	
	echo "<p>namaMhs :	$nama[$i]<p>";
	echo "<p>namaKelasMhs	: $kelas[0]<p>";
	echo "<p>namaDosen	: $dosen[0]<p>";
	echo "<p>nilai :	 $nilai[0]<p>";
	echo "<p>Mahasiswa Aktif Dihimti :	$aktif[0]  <p>";
	echo "<hr>";


}
	for ($q=15; $q <30 ; $q++) {
	echo "<p>user $nrp[$q]<p>";	
	echo "<p>namaMhs :	$nama[$q]<p>";
	echo "<p>namaKelasMhs	: $kelas[1]<p>";
	echo "<p>namaDosen	: $dosen[0]<p>";
	echo "<p>nilai :	 $nilai[0]<p>";
	echo "<p>Mahasiswa Aktif Dihimti :	$aktif[0]  <p>";
	echo "<hr>";


}
	
}
Tampil($nrp,$nama,$dosen,$kelas,$nilai,$aktif);


 ?>