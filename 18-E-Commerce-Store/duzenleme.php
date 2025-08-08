<style>
body{
    background-color: #DADED4 ;
}
</style>
<?php

include 'W1config.php';

$vericek=$db->query("SELECT * FROM store WHERE urun_id=1", PDO::FETCH_ASSOC);
    
foreach ($vericek as $veriyaz) {
     
   
    echo $veriyaz['urun_adet'].": inca Mouse Talep Sayısı"."<br>";
}




$vericek2 =$db->query("SELECT * FROM store WHERE urun_id=2", PDO::FETCH_ASSOC);
    
foreach ($vericek2 as $veriyaz2) {
     
   
    echo $veriyaz2['urun_adet'].": Scuderia Ferrari F1 Hoodie Talep Sayısı"."<br>";
}


$vericek3=$db->query("SELECT * FROM store WHERE urun_id=3", PDO::FETCH_ASSOC);
    
foreach ($vericek3 as $veriyaz3) {
     
   
    echo $veriyaz3['urun_adet'].": Çamaşır Makinesi Talep Sayısı"."<br>";
}
?>

<form action="" method="POST">
<input type="submit" name="update" value="Tümünü İptal Et." style="width:300px;">
</form>




<?php
include 'W1config.php';
$sonuc = $db->exec("UPDATE store SET urun_adet ='0' WHERE urun_id=1");
$baglanti = null;
?>
<?php
include 'W1config.php';
$sonuc = $db->exec("UPDATE store SET urun_adet ='0' WHERE urun_id=2");
$baglanti = null;
?>
<?php
include 'W1config.php';
$sonuc = $db->exec("UPDATE store SET urun_adet ='0' WHERE urun_id=3");
$baglanti = null;
?>

<button><a href="homepage.php" style="text-decoration: none;">Anasayfaya Geri Dön.</a></button>