<?php
//oturumu kapatıp giris.php ye yönlendiriyoruz.
session_start();
if(session_destroy())
{
header("Location: login.php");
}
?>
