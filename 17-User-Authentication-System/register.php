<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>Kayit Sayfası</title>
  </head>
  <body>
    <h1 style="text-align: center;" class="text-primary">Lütfen Aşağıdaki Bilgileri Eksiksiz Doldurunuz.</h1>

<div class="container">
<form class="was-validated" method="POST">
 <div class="mb-3">
 <label for="inputEmail">Email</label>
 <input type="email" class="form-control is-valid" id="inputEmail4" placeholder="Email Adresinizi Giriniz." required name="eposta">
<br>
 <label for="validationServer01">Kullanıcı Adınız</label>
 <input type="text" class="form-control is-valid" id="validationServer01" placeholder="Kullanıcı Adınızı Giriniz." required name="kullaniciadi">
<br>
 <label for="inputPassword">Şifre</label>
 <input type="password" class="form-control is-valid" id="sifre" placeholder="Şifrenizi Giriniz." required name="kullanicisifre">
<br>
 <label for="inputPassword2">Şifre Tekrarı</label>
 <input type="password" class="form-control is-valid" id="sifretekrarı" placeholder="Şifrenizi Tekrar Giriniz." required>
<br>
  <h6 id="Eslesmekontrol" style="color: red;"></h6>
<br>
  <button class="btn btn-primary" type="submit" id="kayitol" name="kayitol">Kayit Ol</button>
</div>
</form>
</div>

<?php
  require 'PHPMailer/Exception.php';
  require 'PHPMailer/PHPMailer.php';
  require 'PHPMailer/SMTP.php';
  
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;
  
include 'config.php';

if(isset($_POST['kayitol'])){ 

  $eposta         = $_POST['eposta'];
  $kullaniciadi   = $_POST['kullaniciadi'];
  $kullanicisifre = $_POST['kullanicisifre'];
  

      $mail = new PHPMailer(true);
      try {
      //Server settings
      $mail->CharSet = 'UTF-8';
      $mail->SMTPDebug = 0; // debug on - off
      $mail->isSMTP(); 
      $mail->Host = 'smtp.gmail.com'; // SMTP sunucusu örnek : mail.alanadi.com
      $mail->SMTPAuth = true; // SMTP Doğrulama
      //  $mail->SMTPAutoTLS = false;
      $mail->Username = 'gorkemozhan02@gmail.com'; // Mail kullanıcı adı
      $mail->Password = 'OG2021GO'; // Mail şifresi
      $mail->SMTPSecure = 'ssl'; // Şifreleme
      $mail->Port = 465; // SMTP Port
      $mail->SMTPOptions = array(
      'ssl' => array(
      'verify_peer' => false,
      'verify_peer_name' => false,
      'allow_self_signed' => true
      )
      );
  
      //Alıcılar
      $mail->setfrom("gorkemozhan02@gmail.com",'Görkem');
      $mail->addAddress($_POST['eposta']);
      $mail->addReplyTo($_POST['eposta'], $_POST['kullaniciadi']);
      //İçerik
      $mail->isHTML(true);
      $mail->Subject = 'Aktivasyon Kodu';
      $mail->Body ='http://localhost/hw';
      $mail->AltBody = 'Click to Register';
  
      $mail->send();
      // echo "Mesajınız İletildi --> ".$_post['email']."<br>";
        $kayit = $db->exec("INSERT INTO users(email,username,sifre,onay) VALUES('$eposta','$kullaniciadi','$kullanicisifre','1')");
      $durum = 1;
  
      }
      catch (Exception $e) {
      // echo 'Mesajınız İletilemedi. Hata: ', $mail->ErrorInfo;
      $durum = 0;
      }
  
  }
  else{
      $durum = 0;
  }
  echo $durum;


 




?>





<script>
    function checkPasswordMatch() {
        var password = $("#sifre").val();
        var confirmPassword = $("#sifretekrarı").val();
        if (password != confirmPassword) {
            $("#Eslesmekontrol").html("Şifreler Eşleşmiyor!");
            $('#kayitol').css({'display' : 'none'}); 
        }
        else {
            $("#Eslesmekontrol").html("Şifreler Eşleşti.");
            $('#kayitol').css({'display' : 'block'});
    }
  }
   
    $(document).ready(function () {
       $("#sifretekrarı").keyup(checkPasswordMatch);
    
    });
    </script>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

   
  </body>
</html>