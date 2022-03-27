


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
    
  <title>Authorised</title>
  
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


<body >



<!-- регистрация -->


<!-- Default form register -->


<p class="container text-center" style="margin-top:120px; font-size: 28px;color:blue"> To enter to the Admin Page, please Login!  </p>

<div class="Form container " style="width:600px;height:500px; margin-top:80px; background: linear-gradient(135deg, rgb(199, 171, 171) 19%, rgb(242, 217, 217) 72%);  box-shadow: 0px 5px 10px 2px rgba(109, 109, 109, 0.479);">
  

        <!-- Default form login -->
        <form class=" text-center p-5 " action="validation/auth.php" method="POST">
          <p class="h4 mb-4">LogIn </p>
            <input type="text"  name = "login" id="login" class="form-control mb-4" placeholder="Login" style="height:50px" >
          <!-- Password -->
          <input type="password" name = "password" id="password" class="form-control mb-4" placeholder="Password"style="height:50px">
  
</p>

          <!-- Sign in button -->
          <button class="btn  text-white fs-5" type="submit" style="height:50px; width:400px; background-color:rgb(133, 103, 103);box-shadow: 0px 5px 10px 2px rgba(109, 109, 109, 0.479);margin-top:20px">NEXT</button>
         
          <p class="container mt-2" >Forgot your password?
        <a href="">click here</a>
    </p>
  
        </form>
     

</div>











</body>

</html>