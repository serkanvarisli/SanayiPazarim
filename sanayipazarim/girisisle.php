<?php
session_start();
include("baglanti.php"); //veritabanını ekliyoruz

// giriş formundan gelen kullanıcı adı (kuladi) ve şifre(sifre) değişkenlere atıyoruz
$username=$_POST['kuladi'];
$password=$_POST['sifre'];

//kullanıcı adı ve şifeyi sorguluyoruz
$sql="SELECT * FROM uye WHERE kullaniciadi='$username' and sifresi='$password'";
$result=mysqli_query($baglanti,$sql);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);

//Eğer sorgulanan kullanıcı adı var ise bir oturum oluşturup home.php ye yönlendiriyoruz
//Yok ise hata verdiriyoruz. 

if(mysqli_num_rows($result) == 1)
{
$_SESSION['username'] = $username; // Initializing Session
header("location: index.php"); // Redirecting To Other Page
}else
{
echo "<center>"."Şifreniz veya Kullanıcı adınız yanlış"."</br>"."<a href=login.php>GERİ DÖN</a>"."</center>";
}
?>