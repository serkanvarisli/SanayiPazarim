<?php

//veritabanı bağlantımızı yapıyoruz
include('baglanti.php');

//girisisle.php de oluşturulan username mi burada $user_check değişkenine atıyoruz
$user_check=$_SESSION['username'];

//$user_check değişkenini burada uye tablosundan kullaniciadi hücresinde sorguluyoruz
$sql = mysqli_query($baglanti,"SELECT * FROM uye WHERE kullaniciadi='$user_check' ");

$row=mysqli_fetch_array($sql,MYSQLI_ASSOC);

/* eğer $user_check değikeni tanımlı ise home.php sayfamız
açık kalıcak eğer tanımlı değilse giris.php ye yönlendirecek */
if(!isset($user_check))
{
header("Location: login.php");
}
?>