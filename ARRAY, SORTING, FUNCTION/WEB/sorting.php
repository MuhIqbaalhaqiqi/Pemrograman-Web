<?php 
$nrpasc = array("1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30");asort($nrpasc);
$namaasc = array("Dwi Kuswanto","Mochammad Zaenuri","Andri Muliadi","Kaharudin Sallam","Valentino Telaubun","Syarif Wijianto","Nerius Alom","Gian Zola Nasrullah","Nur Iskandar","Riyatno Abiyoso","Malik Risaldi","Risqi Putro Utomo","Abdul Rohim","Ahmad Wahyudi","Ahmad Ubaidillah","Ricky Oherella","Sandy Ferizal","Takwir","Rahel Radiansyah","Ibrahim Musa Kosepa","Ilham Fathoni","Muhammad Nasir","Rio Agata","Ragil Sudirman","Baeny Zaman","Andar Suhendar","Ardiyan Pramuja","Toni Sudarmanto","Miftahul Hadi","Hasyim");asort($namaasc);

$nrpdesc = array("1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30");rsort($nrpdesc);
$namadesc= array("Dwi Kuswanto","Mochammad Zaenuri","Andri Muliadi","Kaharudin Sallam","Valentino Telaubun","Syarif Wijianto","Nerius Alom","Gian Zola Nasrullah","Nur Iskandar","Riyatno Abiyoso","Malik Risaldi","Risqi Putro Utomo","Abdul Rohim","Ahmad Wahyudi","Ahmad Ubaidillah","Ricky Oherella","Sandy Ferizal","Takwir","Rahel Radiansyah","Ibrahim Musa Kosepa","Ilham Fathoni","Muhammad Nasir","Rio Agata","Ragil Sudirman","Baeny Zaman","Andar Suhendar","Ardiyan Pramuja","Toni Sudarmanto","Miftahul Hadi","Hasyim");rsort($namadesc);

echo "<p>_________________________________________ASC_______________________________________________<p>";


function dataMhsasc($nrpasc,$namaasc){
	for ($i=0; $i <30 ; $i++) { 
	echo "<p>NRP $nrpasc[$i]<p>";
	echo "<p>Nama $namaasc[$i]<p>";
	echo "<hr>";
	
	}

}
dataMhsasc($nrpasc,$namaasc);
echo "<p>_________________________________________DESC_______________________________________________<p>";

function dataMhsDesc($nrpdesc,$namadesc){
for ($i=0; $i <29 ; $i++) { 
	echo "<p>NRP $nrpdesc[$i]<p>";
	echo "<p>Nama $namadesc[$i]<p>";
	echo "<hr>";
	
	}


}
dataMhsasc($nrpdesc,$namadesc);

 ?>

