<?php

require_once'app/database.php';
$resultclub = mysqli_query($link,"SELECT  playersclub.Club, playersclub.ImageClub, playersclub.Town,playersclub.Stadium,playersclub.Manager,playersclub.description,playersclub.imageStadium
FROM playersclub
WHERE playersclub.id = 1");
$result = mysqli_query($link, "SELECT players.Name , players.Surname, players.SquardNumber, players.photo,players.Nationality
FROM players WHERE players.Position = 'goalkeeper' AND players.ClubId = 1");
$result2 = mysqli_query($link, "SELECT players.Name , players.Surname, players.SquardNumber, players.photo,players.Nationality
FROM players WHERE players.Position = 'defender' AND players.ClubId = 1");
$result3 = mysqli_query($link, "SELECT players.Name , players.Surname, players.SquardNumber, players.photo,players.Nationality
FROM players WHERE players.Position = 'midfielders' AND players.ClubId = 1");
$result4 = mysqli_query($link, "SELECT players.Name , players.Surname, players.SquardNumber, players.photo,players.Nationality
FROM players WHERE players.Position = 'forward' AND players.ClubId = 1");




?>





<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>English Premier league</title>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
  </script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="css/custom.css">
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
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&family=Sanchez:ital@1&display=swap"
    rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Lato:wght@700&family=Poppins:wght@400;500&family=Sanchez:ital@1&display=swap"
    rel="stylesheet">

</head>

<body>

  <!-- шапка -->
  <?php require "blocks/header.php" ?>

  <div class=" AfterHeadAbout container col-12" style="background-color: rgba(245, 245, 245, 0.5);border: 1px solid rgba(116, 115, 115, 0.315);">
    <!--  RECORDS -->
    <div class=" CardClub card text-center mt-3 ">
      <div class="CARDCLUBSHEADER card-header ">
        <span class="ArsenalTitle ">Arsenal</span>
      </div>
    </div>

    <div class="container my-5 px-5 pt-5 pb-4 z-depth-1">


      <!--Section: Content-->
      <section class="dark-grey-text">

        <style>
          .d-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            grid-auto-rows: 100px;
            grid-gap: 7px;
          }

          .item {
            position: relative;
          }

          .item:nth-child(1) {
            grid-column: 1 / 2;
            grid-row: 1 / 4;
          }

          .item:nth-child(2) {
            grid-column: 2;
            grid-row: 0 / 3;
          }

          .item:nth-child(3) {
            grid-column: 2;
            grid-row: 2 / 3;
          }

          .item:nth-child(4) {
            grid-column: 2;
            grid-row: 3 / 3;
          }

          .item a {
            position: absolute;
            left: 0;
            right: 0;
            bottom: 0;
            top: 0;
            overflow: hidden;
          }

          .item img {
            height: 100%;
            width: 100%;
            object-fit: cover;
          }
        </style>

        <div class="row align-items-center" style="border-bottom: 1px solid white;">


          <?php
while($players = mysqli_fetch_assoc($resultclub)) {
?>
          <div class="col-lg-6 mb-4">
            <h2 class="font-weight-normal mb-4 ">Arsenal Football Club</h2>
            <p class="lead fs-5" style="color: rgb(71, 51, 51)"> <?php echo $players['description']; ?></p>
            <p class="lead " style="color:orange"> Manager: <?php echo $players['Manager']; ?> </p>
            <P> <img src=" <?php echo $players['imageStadium']; ?>  " alt=""> Ground: <?php echo $players['Stadium']; ?>
            </P>
          </div>

          <?php
}
?>

          <div class="col-lg-6 mb-4">

            <div id="mdb-lightbox-ui"></div>

            <div class="d-grid mdb-lightbox">
              <figure class="item">
                <img src="image/Arsenal-FC-squad.jpg" />

              </figure>
              <figure class="item">
                <img src="image/arsenal-wallpaper-2015-6.jpg" />

              </figure>
              <figure class="item">
                <img src="image/5-59335_arsenal-desktop-wallpaper-arsenal-wallpaper-desktop-hd.jpg" />
              </figure>
              <figure class="item">
                <img src="image/1ard.jpg" />

              </figure>
            </div>

          </div>

        </div>

      </section>

    </div>

    <!-- игроки -->


    <p class="text-center" style="font-family: 'Sanchez', serif;color:#F06292; font-size: 40px;">GOALKEEPERS</p>
    <div class=" Card container d-flex flex-row flex-wrap " style="width: 96%; gap: 7px">
      <?php
while($players = mysqli_fetch_assoc($result)) {
?>
      <div class="card flex-fill col-xxl-3 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <img src="<?php echo $players['photo']; ?>" class="card-img-top" alt="gol">
        <!-- контейнер с именем и номер -->
        <div class="card-body col-12 d-flex flex-row" style="background-color: yellow;">

          <div class="container col-7 ">
            <p class="card-text " style="font-size: 20px;"> <?php echo $players['Name']; ?> </p>
            <span style="font-size: 30px;"> <?php echo $players['Surname']; ?> </span>
            <p style="font-size: 17px; color:rgb(206, 145, 145)"> <?php echo $players['Nationality']; ?> </p>
          </div>

          <div class="container col-5 ">
            <p class="card-text"
              style="font-size: 65px; color:black;  letter-spacing: 0.04em;  font-family:'Lato', sans-serif;">
              <?php echo $players['SquardNumber']; ?> </p>

          </div>



        </div>
      </div>
      <?php
}

?>
    </div>

    <!-- defenders -->


    <p class="text-center mt-3" style="font-family: 'Sanchez', serif;color:#F06292; font-size: 40px; ">DEFENDERS</p>
    <div class="Card container d-flex flex-row flex-wrap" style="width: 96%; gap: 7px">
      <?php
while($playersdef = mysqli_fetch_assoc($result2)) {
?>
      <div class="card flex-fill col-xxl-4 col-xl-12 col-md-12 col-sm-12 col-xs-12 ">
        <img src="<?php echo $playersdef['photo']; ?>" class="card-img-top" alt="gol">
        <!-- контейнер с именем и номер -->
        <div class="card-body col-12 d-flex flex-row" style="background-color: yellow;">

          <div class="container col-7">
            <p class="card-text " style="font-size: 20px;"> <?php echo $playersdef['Name']; ?> </p>
            <span style="font-size: 30px;"> <?php echo $playersdef['Surname']; ?> </span>
            <p style="font-size: 17px; color:rgb(206, 145, 145)"> <?php echo $playersdef['Nationality']; ?> </p>
          </div>

          <div class="container col-5">
            <p class="card-text"
              style="font-size: 65px; color:black;  letter-spacing: 0.04em;  font-family:'Lato', sans-serif;">
              <?php echo $playersdef['SquardNumber']; ?> </p>

          </div>
        </div>
      </div>
      <?php
}

?>
    </div>


    <!-- midfielders -->


    <p class="text-center mt-3" style="font-family: 'Sanchez', serif;color:#F06292; font-size: 40px;">MIDFIELDERS</p>
    <div class=" Card container d-flex flex-row flex-wrap" style="width: 96%; gap: 7px;">
      <?php
while($playersmid = mysqli_fetch_assoc($result3)) {
?>
      <div class="card card flex-fill col-xxl-5 col-xl-12 col-md-12 col-sm-12 col-xs-12 ">
        <img src="<?php echo $playersmid['photo']; ?>" class="card-img-top" alt="gol">
        <!-- контейнер с именем и номер -->
        <div class="card-body col-12 d-flex flex-row" style="background-color: yellow;">

          <div class="container col-7">
            <p class="card-text " style="font-size: 20px;"> <?php echo  $playersmid['Name']; ?> </p>
            <span style="font-size: 30px;"> <?php echo  $playersmid['Surname']; ?> </span>
            <p style="font-size: 17px; color:rgb(206, 145, 145)"> <?php echo  $playersmid['Nationality']; ?> </p>
          </div>

          <div class="container col-5">
            <p class="card-text"
              style="font-size: 65px; color:black;  letter-spacing: 0.04em;  font-family:'Lato', sans-serif;">
              <?php echo  $playersmid['SquardNumber']; ?> </p>

          </div>
        </div>
      </div>
      <?php
}

?>
    </div>


    <!-- forwards -->

    <p class="text-center mt-3" style="font-family: 'Sanchez', serif;color:#F06292; font-size: 40px; ">FORWARDS</p>
    <div class=" Card container d-flex flex-row " style="width: 96%; gap: 7px">
      <?php
while($playersforward = mysqli_fetch_assoc($result4)) {
?>
      <div class="card  col-xxl-6 col-xl-6 col-md-12 col-sm-12 col-xs-12  ">
        <img src="<?php echo $playersforward['photo']; ?>" class="card-img-top" alt="gol">
        <!-- контейнер с именем и номер -->
        <div class="card-body col-12 d-flex flex-row" style="background-color: yellow;">

          <div class="container col-7">
            <p class="card-text " style="font-size: 20px;"> <?php echo $playersforward['Name']; ?> </p>
            <span style="font-size: 30px;"> <?php echo $playersforward['Surname']; ?> </span>
            <p style="font-size: 17px; color:rgb(206, 145, 145)"> <?php echo $playersforward['Nationality']; ?> </p>
          </div>

          <div class="container col-5">
            <p class="card-text"
              style="font-size: 65px; color:black;  letter-spacing: 0.04em;  font-family:'Lato', sans-serif;">
              <?php echo $playersforward['SquardNumber']; ?> </p>

          </div>
        </div>
      </div>
      <?php
}

?>
    </div>

    <div class="Stripe container mt-3 "> </div>

    <ul class="list-group list-group-horizontal flex-wrap mt-2">
      <li class=" list-group-item col-xxl-2 col-xl-2 col-lg-2 col-sm-2 col-xs-12 col-12">
        <img src="image/4202017artseaelectronicsportslogosocialsocialmediasports-115671_115630.png" alt="easports">
        Lead Partner</li>
      <li class="list-group-item col-xxl-2 col-xl-2 col-lg-2 col-sm-2 col-xs-12 col-12">
        <img src="image/barclays_logo_icon_168535.png" alt="barc">
        Official Bank</li>
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


































</body>

</html>