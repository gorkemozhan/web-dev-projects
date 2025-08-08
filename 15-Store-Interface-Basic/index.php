<!doctype html>
<html lang="en">
  <head>    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Hello, world!</title>
    <style>
      body {
        background-color:#DADED4;
        font-family: 'Courier New', Courier, monospace;
      }   
    </style>
  </head>
  <body>
    <div class="navbar">
      <a href="#" style="text-decoration: none"><h1 style="color: #3C403D; margin-left: 70px; margin-right: 300px;">Görkem's Store</h1></a>
      <a href="#" style="text-decoration: none"><h2 style="color: #3C403D;">Ürünler</h2></a>
      <a href="#" style="text-decoration: none"><h2 style="color: #3C403D;">Hakkımıda</h2></a>
      <a href="#" style="text-decoration: none"><h2 style="color: #3C403D; margin-right: 70px;">İletişim</h2></a>
    </div>

    <div class="container-fluid" style="margin-top: 30px;">
      <div class="row">
        <div class="col-7">
            <h3 style="color: #39603D; margin-left: 200px;">Ürün Cinsi Seçiniz:</h3>
        </div>
        <div class="col-5">
            <div class="btn-group">
               <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="padding-left: 100px; padding-right: 100px;">
                     Seçiniz.
               </button>
               <div class="dropdown-menu" style="background-color: antiquewhite;">
                   <a class="dropdown-item" href="#" style="padding-left: 100px; padding-right: 100px; background-color:antiquewhite">Oyun</a>
                   <a class="dropdown-item" href="#" style="padding-left: 100px; padding-right: 100px; background-color:antiquewhite;">Kıyafet</a>
                   <a class="dropdown-item" href="#" style="padding-left: 100px; padding-right: 100px; background-color:antiquewhite;">Beyaz Eşya</a>            
         </div>
        </div>
      </div>
    </div>


    <div class="container-fluid">
      <div class="row">
        <div class="col-6">

          <!-- div-->
          <div style="margin-top:150px;">
            <h3 style="color: #3C403D; text-align: center;">Oyun</h3>
          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <input type="radio" aria-label="Radio button for following text input" disabled>Stokta Kalmadı
              </div>
            </div>
               
            <input type="text" class="form-control" disabled value="Razer Mouse">
            <input type="text" class="form-control" disabled value="500TL">
            
          </div>

          <img src="phpodevimages/images.jfif" style="width: 352px; height: 200px;border-radius: 25px;">
          <img src="phpodevimages/images (1).jfif" style="height: 200px; width: 352px;border-radius: 25px; ">

          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <input type="radio" aria-label="Radio button for following text input" checked>Stokta Mevcut
              </div>
            </div>
               
            <input type="text" class="form-control" disabled value="inca Mouse">
            <input type="text" class="form-control" disabled value="80TL">
            <button type="button" class="btn btn-light" id="sepetekle1" name="sepetekle1">Sepete Ekle</button>
           
            </div>
          <!--div-->
           
          
          <div style="margin-top: 150px;">
            <h3 style="color: #3C403D; text-align: center;">Kıyafet</h3>
          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <input type="radio" aria-label="Radio button for following text input" checked>Stokta Mevcut
              </div>
            </div>
               
            <input type="text" class="form-control" disabled value="Scuderia Ferrari F1 Hoodie">
            <input type="text" class="form-control" disabled value="300TL">
            <button type="button" class="btn btn-light" id="sepetekle2">Sepete Ekle</button>
            
          </div>

          <img src="phpodevimages/scu ferrari.jfif" style="height: 250px; width: 352px;border-radius: 25px;">
          <img src="phpodevimages/aston.jpg" style="height: 250px; width: 352px;border-radius: 25px;">


          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <input type="radio" aria-label="Radio button for following text input" disabled>Stokta Kalmadı
              </div>
            </div>
            
               
            <input type="text" class="form-control" disabled value="Aston Martin F1 Hoodie">
            <input type="text" class="form-control" disabled value="250TL">
           
            </div>


            
          <div style="margin-top: 150px; margin-bottom: 50px;">
            <h3 style="color: #3C403D; text-align: center;">Beyaz Eşya</h3>
          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <input type="radio" aria-label="Radio button for following text input" disabled>Stokta Kalmadı
              </div>
            </div>
               
            <input type="text" class="form-control" disabled value="Buzdolabı">
            <input type="text" class="form-control" disabled value="3500TL">
            
          </div>

          <img src="phpodevimages/buzdolap.jpg" style="width: 352px; height: 250px;border-radius: 25px;">
          <img src="phpodevimages/download.jfif" style="height: 250px; width: 352px;border-radius: 25px; ">


          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <input type="radio" aria-label="Radio button for following text input" checked>Stokta Mevcut
              </div>
            </div>
               
            <input type="text" class="form-control" disabled value="Çamaşır Makinesi">
            <input type="text" class="form-control" disabled value="3000TL">
            <button type="button" class="btn btn-light" id="sepetekle3">Sepete Ekle</button>
           
            </div>
         </div>
         </div>
         </div>
        </div>
        <div class="col-6">
          <div style="margin-left: 270px; margin-top: 100px;">
             <img src="phpodevimages/e.png" style="height: 100px; border-radius: 25px; ">
             <h3 style="position: absolute; bottom: 1345px;padding-left: 50px;">SEPET</h3>
          </div>

          <div>
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Ürün Adı</th>
                  <th scope="col">Ürün Adeti</th>
                  <th scope="col">Miktarı Ayarla</th>
                  <th scope="col">Ürün Toplam Fiyatı</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td><input type="text" class="form-control" disabled id="urun1"></td>
                  <td><input type="number" class="form-control" disabled id="adet1"></td>
                  <td>
                    <button type="button" class="btn btn-info" id="btn1">+</button>
                    <button type="button" class="btn btn-danger" id="sil1">-</button>
                  </td>
                  <td id="sonuc1"></td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td><input type="text" class="form-control" disabled id="urun2"></td>
                  <td><input type="number" class="form-control" disabled id="adet2"></td>
                  <td>
                    <button type="button" class="btn btn-info" id="btn2">+</button>
                    <button type="button" class="btn btn-danger" id="sil2">-</button>
                  </td>
                  <td id="sonuc2"></td>
               
                </tr>
                
                <tr>
                  <th scope="row">3</th>
                  <td><input type="text" class="form-control" disabled id="urun3"></td>
                  <td><input type="number" class="form-control" disabled id="adet3"></td>
                  <td>
                    <button type="button" class="btn btn-info" id="btn3">+</button>
                    <button type="button" class="btn btn-danger" id="sil3">-</button>
                  </td>
                  <td id="sonuc3"></td>
                 
                </tr>

              </tbody>
            </table>



          </div>
        </div>
      </div>
    </div>

    

<script>
  $("#sepetekle1, #btn1").click(function(){
     $("#urun1").val("inca Mouse");
  });
  $("#sepetekle2, #btn2").click(function(){
     $("#urun2").val("Scuderia Ferrari F1");
  });
  $("#sepetekle3, #btn3").click(function(){
     $("#urun3").val("Çamaşır Makinesi");
  });
  
  var x = 0;
  var y = 0;
  var z = 0;

  $("#sepetekle1").click(function(){
    $("#adet1").val(x+=1);
  });
  
  $("#sepetekle2").click(function(){
    $("#adet2").val(y+=1);
  });

  $("#sepetekle3").click(function(){
    $("#adet3").val(z+=1);
  });

  $("#btn1").click(function(){
    $("#adet1").val(x+=1);
  });
  
  $("#btn2").click(function(){
    $("#adet2").val(y+=1);
  });

  $("#btn3").click(function(){
    $("#adet3").val(z+=1);
  });

  $("#sil1").click(function(){
    $("#adet1").val(x-=1);
  });
  
  $("#sil2").click(function(){
    $("#adet2").val(y-=1);
  });

  $("#sil3").click(function(){
    $("#adet3").val(z-=1);
  });



  $("#btn1, #sepetekle1, #sil1").click(function(){
    $("#sonuc1").html($("#adet1").val() * 80 ) 
  });

  $("#btn2, #sepetekle2, #sil2").click(function(){
    $("#sonuc2").html($("#adet2").val() * 300 ) 
  });

  $("#btn3, #sepetekle3, #sil3").click(function(){
    $("#sonuc3").html($("#adet3").val() * 3000 ) 
  });
  
  

  
  
</script>










    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

   
  </body>
</html>