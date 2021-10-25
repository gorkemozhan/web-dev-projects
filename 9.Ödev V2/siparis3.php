<?php

try {
    $baglanti = new PDO("mysql:host=localhost;dbname=odev", "root", "1234");
    $baglanti->exec("SET NAMES utf8");
    $baglanti->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sonuc = $baglanti->exec("UPDATE store SET urun_adet ='0' WHERE urun_id=3");

    if ($sonuc > 0) {
        echo " Çamaşır Makinesi Talepleriniz İptal Edildi";
    } else {
        echo " Kaydınız Silinmedi Zaten 0";
    }

} catch (PDOException $e) {
    die($e->getMessage());
}

$baglanti = null;

?>

<a href="homepage.php">Anasayfaya Geri Dön</a>
