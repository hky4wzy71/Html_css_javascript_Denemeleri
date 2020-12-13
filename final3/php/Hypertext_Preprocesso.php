<?php 
            
$s1 = $_POST['soru1'];


$s2 = $_POST['soru2'];


$s3 = $_POST['soru3'];


$s4 = $_POST['soru4'];


$s5 = $_POST['soru5'];


$yorum = $_POST['subject'];
echo $yorum." ";

$dizi = [$s1,$s2 ,$s3,$s4,$s5];

print_r($dizi);


#puan hesaplama
$puan = 0; 
echo "Bu Puan Sevgili Öğrencilerime Vereceğim Puan : ";
foreach($dizi as $eleman) {
 if($eleman == "yes"){
     
     $puan += 20;

 }
}
echo $puan;
?>