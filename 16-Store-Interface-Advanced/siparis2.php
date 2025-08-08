<?php

try {
    $baglanti = new PDO("mysql:host=localhost;dbname=odev", "root", "1234");
    $baglanti->exec("SET NAMES utf8");
    $baglanti->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sonuc = $baglanti->exec("UPDATE store SET urun_adet ='0' WHERE urun_id=2");

    if ($sonuc > 0) {
        echo " Scuderia Ferrari F1 Hoodie Talepleriniz İptal Edildi";
    } else {
        echo " Kaydınız Silinmedi Zaten 0";
    }

} catch (PDOException $e) {
    die($e->getMessage());
}

$baglanti = null;

?>

<a href="homepage.php">Anasayfaya Geri Dön</a>
