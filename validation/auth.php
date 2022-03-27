
<?php

$login = filter_var(trim($_POST['login']));
$password = filter_var(trim($_POST['password']));

$link = mysqli_connect('localhost','root','','premierleague2');
$result = $link->query("SELECT * FROM `admin` WHERE `login` = '$login' AND `password` = '$password'");
$admin = $result->fetch_assoc();
if(mysqli_num_rows($result) == 0){
echo "не верный логин или пароль";
} else if (mysqli_num_rows($result) == 1) {
    header('Location:http://localhost/Экзамен%20по%20PHP/admin.php');
}
   

?>
