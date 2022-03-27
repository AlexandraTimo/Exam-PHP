<?php

require_once'app/database.php';
$resultnews = mysqli_query($link, "SELECT * FROM news");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>
  <script src="./js/script.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
  <title>English Premier league</title>
  
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Sanchez:ital@1&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Sanchez:ital@1&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="css/custom.css">

</head>



<body>

  <!-- шапка -->

  <?php require "blocks/header.php" ?>
  
  <!--конец шапки -->
  
  
      <div class=" container d-flex flex-wrap " style="background-color:  rgba(245, 245, 245, 0.5);border: 1px solid rgba(116, 115, 115, 0.315); ">
  
        <div class="  p-2 flex-fill  bd-highlight col-xxl-4  col-lg-12 col-md-12 col-sm-12  ">
  
          <!-- Первая таблица -->
          <div class=" FirstBlock col-12 mt-2 mb-4 ">
            <div class=" card " style="border-radius: 15px;">
              <div class="card-body">
                <h3 class=" CardTitle card-title text-center ">News of the week</h3>
  
               
  
                <p class="card-text text-center">Thursday 3 March</p>
  
                    <div class="container">
                <?php
while($news = mysqli_fetch_assoc($resultnews)) {
?>

              <div class="card " >
  <img src="<?php echo $news['image']; ?> " class="card-img-top" alt="...">
  <div class="card-body">
    <!-- <p class="card-title" style="font-size: 15px; color:navy" >Antony Elanga, Manchester United </p> -->
    <p class="card-text"><?php echo $news['text'];?></p>
    
  </div>
</div>
        <?php
}
?>
                   

              </div>
  
              </div>
            </div>
  
  
          </div>
  
  

          <div class=" FirstBlock card container col-12" style="border-radius: 15px;">
        <div class="row">
  
          <h3 class="CardTitle text-center mt-2 mb-3" >Video of the week</h3>
  
  
          <iframe class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-cm-12 col-xs-12 mb-3" width="200" height="215"
            src="https://www.youtube.com/embed/8cHDhZlGbl8"title="YouTube video player" frameborder="0"></iframe>
  
  
          <iframe class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-cm-12 col-xs-12 mb-3" width="200" height="215"
            src="https://www.youtube.com/embed/-6Rqtz7c7pw" title="YouTube video player" frameborder="0"> </iframe>
  

  
          <iframe class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-cm-12 col-xs-12 mb-3" wwidth="200" height="215"
            src="https://www.youtube.com/embed/sl5fshX_9zU" title="YouTube video player"> </iframe>
  
  
  
  
        </div>

        
      </div>





  
        </div>
  
<!-- soccerschool -->

        <div class=" flex-fill p-2 col-8 ">
  
          <div class="CardSoccerSchool flex-fill card col-12 mt-2 mb-4">
            <img src="image/5578341.jpg" class="card-img-top" alt="boys" style="height: 450px;">
            <div class="card-body">
              <p class="BePart card-text text-center">Be Part Of The Best Soccer School</p>
              <p class="BePart card-text text-center" style="font-size:22px; color:orange"> Join Us from june 07/2022 English Football Academy for Mens and Woman </p>
            </div>
          </div>
  


          <div class="p-2 flex-fill col-12">
  
  <div class="CardSoccerSchool  card col-12 mt-4 " >
    <img src="image/Girls-Playing-Soccer-e1552659726468.jpg" class="card-img-top" alt="girls" style="height: 450px;">
    <div class="card-body">
      <p class="BePart card-text text-center">Make your dream come true. Junior football Academy in Berkeley  </p>
      <p class="BePart card-text text-center" style="font-size:22px; color:orange"> Join Us from july 05/2022 English Football Academy </p>
    </div>
  </div>



</div>


  


  
        </div>
  



  
        <div class="Stripe container mt-3 mb-4"> </div>
  
  
  
        <ul class="list-group list-group-horizontal flex-wrap col-12 mt-2">
       <li class=" list-group-item col-xxl-2 col-xl-2 col-lg-2 col-sm-2 col-xs-12 col-12">
      <img src="image/4202017artseaelectronicsportslogosocialsocialmediasports-115671_115630.png" alt="easports">
       Lead Partner</li>
       <li class="list-group-item col-xxl-2 col-xl-2 col-lg-2 col-sm-2 col-xs-12 col-12">
       <img src="image/barclays_logo_icon_168535.png" alt="barc">
      Official  Bank</li>
       <li class="list-group-item col-xxl-2 col-xl-2 col-lg-2 col-sm-2 col-xs-12 col-12">
       <img src="image/budweiser.png" alt="bud">
      Official Bear</li>
       <li class="list-group-item col-xxl-2 col-xl-2 col-lg-2 col-sm-2 col-xs-12 col-12">
       <img src="image/11c3bb4ee950ffa03b2bba6c5fe1fe46.png" alt="cast">
      Official E.O.P.</li>
       <li class="list-group-item col-xxl-2 col-xl-2 col-lg-2 col-sm-2 col-xs-12 col-12">
       <img src="image/Hublot.png" alt="hub">
      Official Tk</li>
       <li class="list-group-item col-xxl-2 col-xl-2 col-lg-2 col-sm-2 col-xs-12 col-12">
       <img src="image/Nike-logo-506c4872.png" alt="nike">
      Official Ball</li>
     </ul>
  
        <?php require"blocks/footer.php"?>
       
  
      </div>
  
     












</body>

</html>