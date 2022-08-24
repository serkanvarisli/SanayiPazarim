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
echo "MySQL bağlantısı başarısız: " . mysqli_connect_error();
} //pdo bağlantısı 
try {
    $db=new PDO("mysql:lost=localhost;dbname=offers",'root','') ;
    }
    catch(Expextion $e){
        $e->getMessage();
    }
?>