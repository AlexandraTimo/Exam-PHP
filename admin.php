<?php

require 'app/database.php';
$resultclub = mysqli_query($link,"SELECT  playersclub.Club, playersclub.ImageClub, playersclub.Town,playersclub.Stadium,playersclub.Manager,playersclub.description,playersclub.imageStadium
FROM playersclub
WHERE playersclub.id = 2");
$result = mysqli_query($link, "SELECT players.Name , players.Surname, players.SquardNumber, players.photo,players.Nationality
FROM players WHERE players.Position = 'goalkeepers' AND players.ClubId = 2");
$result2 = mysqli_query($link, "SELECT players.Name , players.Surname, players.SquardNumber, players.photo,players.Nationality
FROM players WHERE players.Position = 'defender' AND players.ClubId = 2");
$result3 = mysqli_query($link, "SELECT players.Name , players.Surname, players.SquardNumber, players.photo,players.Nationality
FROM players WHERE players.Position = 'midfielders' AND players.ClubId = 2");
$result4 = mysqli_query($link, "SELECT players.Name , players.Surname, players.SquardNumber, players.photo,players.Nationality
FROM players WHERE players.Position = 'forwards' AND players.ClubId = 2");

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

<div class=" AfterHead container col-12 " style="background-color: rgba(245, 245, 245, 0.5);border: 1px solid rgba(116, 115, 115, 0.315);">

<div class=" CardClub card text-center mt-3">
  <div class="CARDCLUBSHEADER card-header ">
    <span class="ArsenalTitle ">ADMIN </span>
  </div>
</div>

<form action="vendor/create.php" method="POST">

<p>Title</p>

<input type="text" name="title">
<p>description</p>
<textarea name="description" id="" cols="30" rows="10"></textarea>
<p>price</p>
<input type="number" name="price"> <br>
<button type="submit"> add</button>
</form>



<?php require"blocks/footer.php"?>


</body>
</html>