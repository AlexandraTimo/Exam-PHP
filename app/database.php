<?php
// подключение к базе данных
$link = mysqli_connect('localhost','root','','premierleague2');
// проверка подключились к базе или нет
if(mysqli_connect_errno()){
// эта функция возвращает номер ошибки

echo 'Ошибка подключения к базе данных('.mysqli_connect_errno().'): '.mysqli_connect_errno();
// mysqli_connect_errno() - вернет текст ошибки
exit();
}

?>
