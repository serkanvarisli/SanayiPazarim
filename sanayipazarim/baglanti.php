<?php 

/* 
Veritabani baglantimizi yapiyoruz
*/

$hostadresi        =	"localhost";
$kullaniciadi      =	"root";
$sifre             =	"";
$veritabani        =	"offers";

$baglanti = mysqli_connect($hostadresi,$kullaniciadi,$sifre,$veritabani);
if (mysqli_connect_errno())
{
echo "MySQL ba�lant�s� ba�ar�s�z: " . mysqli_connect_error();
}
try { //pdo ile sql bağlantısı
$db=new PDO("mysql:lost=localhost;dbname=offers",'root','') ;
}
catch(Expextion $e){
    $e->getMessage();
}
?>



