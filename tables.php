<?php

require_once'app/database.php';
$result = mysqli_query($link, "SELECT * FROM playersclub");
$result2 = mysqli_query($link, "SELECT * FROM `players` WHERE players.ClubId = 1");
$result3 = mysqli_query($link, "SELECT * , cards.id,typecards.Card
from players
JOIN cards ON cards.PlayersId = players.id
JOIN typecards ON typecards.id = cards.CardId
WHERE players.ClubId ='1'
ORDER BY cards.CardId");
$result4 = mysqli_query($link, "SELECT * , cards.id,typecards.Card
from players
JOIN cards ON cards.PlayersId = players.id
JOIN typecards ON typecards.id = cards.CardId
WHERE players.ClubId ='2'
ORDER BY cards.CardId");
$result5 = mysqli_query($link, "SELECT * FROM `players` WHERE players.ClubId = 2");
$result6 = mysqli_query($link, "SELECT * FROM `players` WHERE players.ClubId = 3");
$result7 = mysqli_query($link, "SELECT * , cards.id,typecards.Card
from players
JOIN cards ON cards.PlayersId = players.id
JOIN typecards ON typecards.id = cards.CardId
WHERE players.ClubId ='3'
ORDER BY cards.CardId");
$result8 = mysqli_query($link, "SELECT * , cards.id,typecards.Card,playersclub.Club from players JOIN cards ON cards.PlayersId = players.id JOIN typecards ON typecards.id = cards.CardId JOIN playersclub ON playersclub.id = players.ClubId WHERE cards.CardId = 2");
$result9 = mysqli_query($link,"SELECT players.photo,players.Name,players.Surname,players.SquardNumber,players.imageSquard,players.Position, players.ClubId, goals.PlayersId,goals.Time, goals.imageGoal,goals.MathesId, goals.MathesId,playersclub.Club,playersclub.ImageClub
FROM players
JOIN goals ON goals.PlayersId = players.id
JOIN playersclub ON playersclub.id = players.ClubId
ORDER BY playersclub.id = 1");
$result10 = mysqli_query($link,"SELECT players.photo,players.Name,players.Surname,players.SquardNumber,players.imageSquard,players.Position, players.ClubId, goals.PlayersId,goals.Time, goals.imageGoal,goals.MathesId, goals.MathesId,playersclub.Club,playersclub.ImageClub FROM players JOIN goals ON goals.PlayersId = players.id JOIN playersclub ON playersclub.id = players.ClubId WHERE playersclub.id = 2");
$result11 = mysqli_query($link,"SELECT players.photo,players.Name,players.Surname,players.SquardNumber,players.imageSquard,players.Position, players.ClubId, goals.PlayersId,goals.Time, goals.imageGoal,goals.MathesId, goals.MathesId,playersclub.Club,playersclub.ImageClub FROM players JOIN goals ON goals.PlayersId = players.id JOIN playersclub ON playersclub.id = players.ClubId WHERE playersclub.id = 3");
$result1 = mysqli_query($link,"SELECT mathes.dateMatch,playersclub.Club,playersclub.ImageClub
FROM mathes
JOIN playersclub ON playersclub.id = mathes.secondTimeId");

$result12 = mysqli_query($link,"SELECT mathes.dateMatch
FROM mathes ORDER BY mathes.dateMatch");
$result13 = mysqli_query($link,"SELECT playersclub.Club FROM mathes JOIN playersclub ON playersclub.id = mathes.firstTimeId
ORDER BY mathes.dateMatch");
$result14 = mysqli_query($link,"SELECT playersclub.Club
FROM mathes
JOIN playersclub ON playersclub.id = mathes.secondTimeId
ORDER BY mathes.dateMatch");




// $result8 = mysqli_query($link, "SELECT * , cards.id,typecards.Card
// from players
// JOIN cards ON cards.PlayersId = players.id
// JOIN typecards ON typecards.id = cards.CardId
// WHERE cards.CardId = 2");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>English Premier league</title>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&family=Sanchez:ital@1&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&family=Poppins:wght@400;500&family=Sanchez:ital@1&display=swap" rel="stylesheet">

</head>
<body>


  <!-- шапка -->
  <?php require "blocks/header.php" ?>

<div class=" AfterHeadAbout container col-12" style="background-color:  rgba(245, 245, 245, 0.5);border: 1px solid rgba(116, 115, 115, 0.315); ">
<!--  RECORDS -->

<div class=" CardClub card text-center mt-3">
  <div class="CARDCLUBSHEADER card-header ">
    <span class="ManTitle ">TABLES</span>
  </div>
</div>




<!-- таблица игроков арсенала-->

<div class="TitleCardStats container text-center mt-2"> 
Arsenal's Players Table
</div>
<table class="table  col-12  mt-2">
  <thead>
    <tr>
    
      <th scope="col ">Photo</th>
      <th scope="col ">Name</th>
      <th scope="col ">Surname</th>
      <th scope="col ">SquardNumber</th>
      <th scope="col ">Position</th>
      <th scope="col ">Nationality</th>
     
    </tr>
  </thead>
  <tbody>
    <tr>
      <?php
while($playerArs = mysqli_fetch_assoc($result2)){
?>
 
       <td>  <img  src="<?php echo $playerArs['photo']; ?>" alt=""> </td>
       <td>  <?php echo $playerArs['Name']; ?></td>
       <td>  <?php echo $playerArs['Surname']; ?></td>
       <td> <img src="<?php echo $playerArs['imageSquard'];?>" alt="">  <?php echo $playerArs['SquardNumber']; ?>   </td>
       <td>  <?php echo $playerArs['Position']; ?></td>
       <td>  <?php echo $playerArs['Nationality']; ?></td>
    </tr>
 
<?php
}
 ?>    
     
    </tbody>
</table>

<!-- таблица карточек игрокоа арсенала -->
<div class="TitleCardStats container text-center mt-2"> 
Arsenal's Players Cards
</div>
<table class="table col-12 mt-2">
  <thead>
    <tr>
     
      <th scope="col">Photo</th>
      <th scope="col">Name</th>
      <th scope="col">Surname</th>
      <th scope="col">SquardNumber</th>
      <th scope="col">Position</th>
      <th scope="col">Nationality</th>
      <th scope="col">Cards</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <?php
while($playerArsCard = mysqli_fetch_assoc($result3)){
?>
 
       <td>  <img  src="<?php echo $playerArsCard['photo']; ?>" alt=""> </td>
       <td>  <?php echo $playerArsCard['Name']; ?></td>
       <td>  <?php echo $playerArsCard['Surname']; ?></td>
       <td> <img src="<?php echo $playerArsCard['imageSquard']; ?>  " alt=""> <?php echo $playerArsCard['SquardNumber']; ?></td>

       <td>  <?php echo $playerArsCard['Position']; ?></td>
       <td>  <?php echo $playerArsCard['Nationality']; ?></td>
       <td> <img src="<?php echo $playerArsCard['Card']; ?>" alt=""> </td>
    </tr>
<?php
}
 ?>    
     
    </tbody>
</table>

<!-- таблица игроков ливерпуля -->

<div class="TitleCardStats container text-center mt-2"> 
Liverpool's Players Table
</div>
<table class="table col-12 mt-2">
  <thead>
    <tr>
     
      <th scope="col">Photo</th>
      <th scope="col">Name</th>
      <th scope="col">Surname</th>
      <th scope="col">SquardNumber</th>
      <th scope="col">Position</th>
      <th scope="col">Nationality</th>
    
    </tr>
  </thead>
  <tbody>
    <tr>
      <?php
while($playerLiv= mysqli_fetch_assoc($result5)){
?>
 
       <td>  <img  src="<?php echo $playerLiv['photo']; ?>" alt=""> </td>
       <td>  <?php echo $playerLiv['Name']; ?></td>
       <td>  <?php echo $playerLiv['Surname']; ?></td>
       <td> <img src="<?php echo $playerLiv['imageSquard']; ?>  " alt=""> <?php echo $playerLiv['SquardNumber']; ?></td>
       <td>  <?php echo $playerLiv['Position']; ?></td>
       <td>  <?php echo $playerLiv['Nationality']; ?></td>
    
    </tr>
 
<?php
}
 ?>    
     
    </tbody>
</table>

<!-- карточки ливерпуль -->

<div class="TitleCardStats container text-center mt-2"> 
Liverpool's Players Cards
</div>
<table class="table col-12 mt-2">
  <thead>
    <tr>
           <th scope="col">Photo</th>
      <th scope="col">Name</th>
      <th scope="col">Surname</th>
      <th scope="col">SquardNumber</th>
      <th scope="col">Position</th>
      <th scope="col">Nationality</th>
      <th scope="col">Cards</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <?php
while($playerLivCard = mysqli_fetch_assoc($result4)){
?>
 
       <td>  <img  src="<?php echo $playerLivCard['photo']; ?>" alt=""> </td>
       <td>  <?php echo $playerLivCard['Name']; ?></td>
       <td>  <?php echo $playerLivCard['Surname']; ?></td>
       <td> <img src="<?php echo $playerLivCard['imageSquard']; ?>  " alt="">  <?php echo $playerLivCard['SquardNumber']; ?></td>
       <td>  <?php echo $playerLivCard['Position']; ?></td>
       <td>  <?php echo $playerLivCard['Nationality']; ?></td>
       <td> <img src="<?php echo $playerLivCard['Card']; ?>" alt=""> </td>
    </tr>
 
<?php
}
 ?>    
     
    </tbody>
</table>



<!-- игроки манчестера -->
<div class=" TitleCardStats container text-center mt-2"> 
Manchester United's Players Table
</div>
<table class="table col-12 mt-2">
  <thead>
    <tr>
     
      <th scope="col">Photo</th>
      <th scope="col">Name</th>
      <th scope="col">Surname</th>
      <th scope="col">SquardNumber</th>
      <th scope="col">Position</th>
      <th scope="col">Nationality</th>
      
      
     
     

    </tr>
  </thead>
  <tbody>
    <tr>
      <?php
while($playerMan= mysqli_fetch_assoc($result6)){
?>
 
       <td>  <img  src="<?php echo $playerMan['photo']; ?>" alt=""> </td>
       <td>  <?php echo $playerMan['Name']; ?></td>
       <td>  <?php echo $playerMan['Surname']; ?></td>
       <td> <img src=" <?php echo $playerMan['imageSquard']; ?> " alt=""> <?php echo $playerMan['SquardNumber']; ?></td>
       <td>  <?php echo $playerMan['Position']; ?></td>
       <td>  <?php echo $playerMan['Nationality']; ?></td>
     
    </tr>
 
<?php
}
 ?>    
     
    </tbody>
</table>

<!-- карточки манчестера -->

<div class="TitleCardStats container text-center mt-2"> 
Manchester United's Players Cards
</div>
<table class="table col-12 mt-2">
  <thead>
    <tr>
     
      <th scope="col">Photo</th>
      <th scope="col">Name</th>
      <th scope="col">Surname</th>
      <th scope="col">SquardNumber</th>
      <th scope="col">Position</th>
      <th scope="col">Nationality</th>
      <th scope="col">Cards</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <?php
while($playerManCard = mysqli_fetch_assoc($result7)){
?>
 
       <td>  <img  src="<?php echo $playerManCard['photo']; ?>" alt=""> </td>
       <td>  <?php echo $playerManCard['Name']; ?></td>
       <td>  <?php echo $playerManCard['Surname']; ?></td>
       <td>  <img src="<?php echo $playerManCard['imageSquard']; ?>  " alt=""><?php echo $playerManCard['SquardNumber']; ?></td>
       <td>  <?php echo $playerManCard['Position']; ?></td>
       <td>  <?php echo $playerManCard['Nationality']; ?></td>
       <td> <img src="<?php echo $playerManCard['Card']; ?>" alt=""> </td>
    </tr>
 
<?php
}
 ?>    
     
    </tbody>
</table>

<!-- самые грязные игроки -->

<div class="TitleCardStats container text-center mt-2"> 
Red Card's Players
</div>
<table class="table col-12 mt-2">
  <thead>
    <tr>
     
      <th scope="col">Photo</th>
      <th scope="col">Name</th>
      <th scope="col">Surname</th>
      <th scope="col">SquardNumber</th>
      <th scope="col">Position</th>
      <th scope="col">Club</th>
      <th scope="col">Cards</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <?php
while($redCardPlayers = mysqli_fetch_assoc($result8)){
?>
 
       <td>  <img  src="<?php echo $redCardPlayers['photo']; ?>" alt=""> </td>
       <td>  <?php echo $redCardPlayers['Name']; ?></td>
       <td>  <?php echo $redCardPlayers['Surname']; ?></td>
       <td> <img src="<?php echo $redCardPlayers['imageSquard']; ?> " alt=""> <?php echo $redCardPlayers['SquardNumber']; ?></td>
       <td>  <?php echo $redCardPlayers['Position']; ?></td>
       <td> <img src="<?php echo $redCardPlayers['ImageClub']; ?>" alt="">      <?php echo $redCardPlayers['Club']; ?></td>
       <td> <img src="<?php echo $redCardPlayers['Card']; ?>" alt=""> </td>
    </tr>
 
<?php
}
 ?>    
     
    </tbody>
</table>


<!-- голы арсенала  -->

<div class="TitleCardStats container text-center mt-2"> 
Goals by Arsenal club
</div>
<table class="table col-12 mt-2">
  <thead>
    <tr>
    
    <th scope="col"></th>
      <th scope="col">Name</th>
      <th scope="col">Surname</th>
      <th scope="col">SquardNumber</th>
      <th scope="col">Position</th>
      <th scope="col">Club</th>
      <th scope="col">Goals</th>
      <th scope="col">Time</th>
      <th scope="col">Match</th>
      
     
     

    </tr>
  </thead>
  <tbody>
    <tr>
      <?php
while($goalsplayers = mysqli_fetch_assoc($result9)){
?>
 
       <td> <img  src="<?php echo $goalsplayers['photo']; ?>" alt="">      </td>
       <td>  <?php echo $goalsplayers['Name']; ?></td>
       <td>  <?php echo $goalsplayers['Surname']; ?></td>
       <td> <img src="<?php echo $goalsplayers['imageSquard']; ?>" alt="">  <?php echo $goalsplayers['SquardNumber']; ?>   </td>
       <td>  <?php echo $goalsplayers['Position']; ?></td>
       <td> <img src="<?php echo $goalsplayers['ImageClub']; ?>" alt="" alt="">     <?php echo $goalsplayers['Club']; ?></td>
       <td> <img src=" <?php echo $goalsplayers['imageGoal']; ?>" alt="">  </td>
       <td>  <?php echo $goalsplayers['Time']; ?></td>
       <td>  <?php echo $goalsplayers['MathesId']; ?></td>

    </tr>
 
<?php
}
 ?>    
     
    </tbody>
</table>


<!-- голы ливерпуля -->


<div class="TitleCardStats container text-center mt-2"> 
Goals by Liverpool club
</div>
<table class="table col-12 mt-2">
  <thead>
    <tr>
    
    <th scope="col"></th>
      <th scope="col">Name</th>
      <th scope="col">Surname</th>
      <th scope="col">SquardNumber</th>
      <th scope="col">Position</th>
      <th scope="col">Club</th>
      <th scope="col">Goals</th>
      <th scope="col">Time</th>
      <th scope="col">Match</th>
      
     
     

    </tr>
  </thead>
  <tbody>
    <tr>
      <?php
while($goalsplayers = mysqli_fetch_assoc($result10)){
?>
 
       <td> <img  src="<?php echo $goalsplayers['photo']; ?>" alt="">      </td>
       <td>  <?php echo $goalsplayers['Name']; ?></td>
       <td>  <?php echo $goalsplayers['Surname']; ?></td>
       <td> <img src="<?php echo $goalsplayers['imageSquard']; ?>" alt="">  <?php echo $goalsplayers['SquardNumber']; ?>   </td>
       <td>  <?php echo $goalsplayers['Position']; ?></td>
       <td> <img src="<?php echo $goalsplayers['ImageClub']; ?>" alt="" alt="">     <?php echo $goalsplayers['Club']; ?></td>
       <td> <img src=" <?php echo $goalsplayers['imageGoal']; ?>" alt="">  </td>
       <td>  <?php echo $goalsplayers['Time']; ?></td>
       <td>  <?php echo $goalsplayers['MathesId']; ?></td>

    </tr>
 
<?php
}
 ?>    
     
    </tbody>
</table>

<!-- голы манчестера -->


<div class="TitleCardStats container text-center mt-2"> 
Goals by Manchester United club
</div>
<table class="table col-12 mt-2">
  <thead>
    <tr>
    
    <th scope="col"></th>
      <th scope="col">Name</th>
      <th scope="col">Surname</th>
      <th scope="col">SquardNumber</th>
      <th scope="col">Position</th>
      <th scope="col">Club</th>
      <th scope="col">Goals</th>
      <th scope="col">Time</th>
      <th scope="col">Match</th>
      
     
     

    </tr>
  </thead>
  <tbody>
    <tr>
      <?php
while($goalsplayers = mysqli_fetch_assoc($result11)){
?>
 
       <td> <img  src="<?php echo $goalsplayers['photo']; ?>" alt="">      </td>
       <td>  <?php echo $goalsplayers['Name']; ?></td>
       <td>  <?php echo $goalsplayers['Surname']; ?></td>
       <td> <img src="<?php echo $goalsplayers['imageSquard']; ?>" alt="">  <?php echo $goalsplayers['SquardNumber']; ?>   </td>
       <td>  <?php echo $goalsplayers['Position']; ?></td>
       <td> <img src="<?php echo $goalsplayers['ImageClub']; ?>" alt="" alt="">     <?php echo $goalsplayers['Club']; ?></td>
       <td> <img src=" <?php echo $goalsplayers['imageGoal']; ?>" alt="">  </td>
       <td>  <?php echo $goalsplayers['Time']; ?></td>
       <td>  <?php echo $goalsplayers['MathesId']; ?></td>

    </tr>
 
<?php
}
 ?>    
     
    </tbody>
</table>



<div class="Stripe container mt-3 "> </div>

<ul class="list-group list-group-horizontal flex-wrap mt-2">
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



  



    

<script src="./js/script.js"></script>
</body>
</html>