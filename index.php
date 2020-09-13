<?php include "class.php";
$zacky = new kambing;
echo "Zacky adalah kambing <br>";
echo "jumlah kaki = 4 <br> ";
echo $zacky->terbang("")."<br>";
echo $zacky->bersuara()." suaranya <br><br>";

$bryan = new buaya_darat;
echo "bryan adalah buaya darat <br>";
echo "jumlah kaki = 2 <br> ";
echo $bryan->terbang("")."<br>";
echo $bryan->bersuara()." suaranya <br><br>";

$mueza = new kucing;
echo "Mueza adalah kucing <br>";
echo "jumlah kaki = 4 <br> ";
echo $mueza->terbang("")."<br>";
echo $mueza->bersuara()." suaranya <br><br>";

$jajang = new sapi;
echo "Mueza adalah sapi <br>";
echo "jumlah kaki = 4 <br> ";
echo $jajang->terbang("")."<br>";
echo $jajang->bersuara()." suaranya <br><br>";

$jiren = new burung;
echo "jiren adalah burung <br>";
echo "jumlah kaki = 4 <br> ";
echo $jiren->terbang("ada")."<br>";
echo $jiren->bersuara()." suaranya <br><br>";

?>