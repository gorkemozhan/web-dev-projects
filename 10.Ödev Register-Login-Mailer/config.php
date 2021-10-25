<?php
try {
    $db = new PDO("mysql:host=localhost;dbname=odev","root","1234");
}catch(PDOException $e){
    echo $e->getMessage();
}
?>