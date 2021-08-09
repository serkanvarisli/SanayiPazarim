<?php
//veritabanı bağlantımızı yaptık
include('baglanti.php');
//veritabanı bağlantısı sağlanmaz ise hata verdirdik
if (mysqli_connect_errno())
{
    echo "MySQL bağlantısı başarısız: " . mysqli_connect_error();
}
  
//kayit.php de ki formdan gelen kuladi ve sifre post verilerini $kuladi ve $sifre değişkenlerine eşitledik
$kuladi = $_POST['kuladi'];
$sifre = $_POST['sifre'];

//Kayıt işlemini gerçekleştiriyoruz veritabanındaki kullaniciadi ve sifre yi formdan gelen değişkene atadığımız verilere eşitliyoruz



   // aynı veri var mı kontrol sorgusu
   $kontrol = $db->query("SELECT * FROM uye WHERE kullaniciadi='{$_POST["kuladi"]}'");

   // kontrol için koşul belirttik.
   if( $kontrol->rowCount() == "0" ){
      $db->query("INSERT INTO uye SET kullaniciadi='{$_POST["kuladi"]}', sifresi='{$_POST["sifre"]}'");
      echo "Kayıt Başarılı..<br>";
   }else{
      echo "Kullanıcı adı daha önce alınmış tekrar deneyin<br>";  
   } //kayıt işlemi bitince login.php ye yönlendiriyoruz
   header("Refresh: 3; url=login.php");
   die(' 3 saniye sonra yönlendirileceksiniz.');
?>