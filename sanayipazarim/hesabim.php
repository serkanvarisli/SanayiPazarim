<?php
  session_start();
  if (!isset($_SESSION['username'])) {
    header('location:login.php');
  }
  ?>
  <?php
include("head.php")
  ?>
<?php 
	include("kontrol.php");   
?>
<section id="cart_items">
		<div class="container">
<center>
<section>
<h3>Verdiğim Teklifler</h3>
<div class="table-responsive">
<table class="table align-items-center table-flush" style="width: 400px; border:  3px ridge;" border="0">
<tr style="background: black; color: white;">
<th>Ürün id</th>
<th>Teklif</th>
<th>Teklif Veren</th>
<th>Teklif Verilme Tarihi</th>
</tr>
<?php //
include("baglanti.php");
$username = $_SESSION['username']; //username'e göre hesabım sayfasında verilen teklifler sıralanıyor
$sql="SELECT * FROM teklif where teklifveren='$username'";
$sorgu=mysqli_query($baglanti,$sql);
while($row=mysqli_fetch_array($sorgu))
{
    echo '<tr>';
    echo '<td align="center">'.$row['urun_id'].'</td>';
    echo '<td>'.$row['teklif'].'</td>';
    echo '<td>'.$row['teklifveren'].'</td>';
    echo '<td>'.$row['tarih'].'</td>';
    echo '</tr>';
}
?>
</div>
</center>		
		</div>
	</section> <!--/#cart_items-->