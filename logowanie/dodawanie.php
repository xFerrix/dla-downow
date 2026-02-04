<?php
$server = 'localhost';
$port = 3306;
$baza = 'logowanie3ct';
$user = 'root';
$password = '';
$polaczenie = new mysqli($server, $user, $password, $baza, $port);
if(mysqli_connect_errno() != 0){
    echo 'blad polaczenia do bazy danych'.mysqli_connect_error();
}else{
    echo 'polaczenie do bazy danych powiodlo sie';
};

$tytul = $_POST['tytul'];
$opis = $_POST['opis'];
$img = $_POST['img'];

?>