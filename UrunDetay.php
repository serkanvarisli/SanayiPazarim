<?php
	session_start();
if (!isset($_SESSION['username'])) {
  header('location:login.php');
}
include("baglanti.php");
$username = $_SESSION['username'];
if (isset($_POST['upload'])) {
  $teklif = $_POST['teklif'];
  $urun_id = $_GET['id'];
  $tarih= date('d.m.Y H:i:s');
  $query = "INSERT INTO teklif(urun_id,teklif,teklifveren,tarih) VALUES ('$urun_id','$teklif','$username','$tarih')";
  $res = mysqli_query($baglanti,$query);
}
include("head.php")
?>
<?php                       //ürün bilgileri veritabanından idye göre çekiliyor
							$sql=$db->prepare("Select * from products where id=?");
							$sql->execute([htmlspecialchars($_GET['id'])]);
							$row=$sql->fetch(PDO::FETCH_ASSOC);
							?>
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
					</div> </div>
				<div class="col-sm-9 padding-right">
					<div class="product-details">
						<div class="col-sm-5">
							<div class="view-product"><!--Fotoğrafı veritabanındaki productImageten açıyor-->
                            <img src="images/home/<?php echo $row['productImage'] ?>" alt=""/>	
							</div>
							<div id="similar-product" class="carousel slide" data-ride="carousel">	
								   </div></div>
						<div class="col-sm-7">
							<div class="product-information">
                                <!--İsmi veritabanındaki productName den alıyor-->
								<img src="images/product-details/new.jpg" class="newarrival" alt="" />
								<h2 ><?php echo $row['productName'] ?></h2>
								<p>Web ID: <?php echo $row['id'] ?></p>
								<img src="images/product-details/rating.png" alt="" /> <br>
									<span><i>En Yüksek Teklif: </i> <?php 
                                    //idye göre En Yüksek Teklifi Görüntüleme
                                    $urun_id = $_GET['id'];
									$sql="SELECT MAX(teklif) FROM teklif where urun_id='$urun_id'" ;
									$sorgu=mysqli_query($baglanti,$sql);
									while( $sonuc=mysqli_fetch_row($sorgu) ){
    								echo $sonuc[0];  
								}
								?> TL
									</span>
									<form class="my-5" method="post" enctype="multipart/form-data">
                    <label for="teklif">Teklif:</label>
                    <input type="text" name="teklif" value=""required>
            <input type="submit" name="upload" value="Teklif Ver" class="btn btn-success my-3" onclick="<?php echo("<meta http-equiv='refresh' content='1'>");?>">
			<INPUT TYPE="text" NAME="urun_id" value="<?php echo $_GET['id'] ?>"style="display: none">
								</form> <br>
								<p><?php //Teklif süresi sayfasında idye göre teklifin son tarihine ulaşılabiliyor
								include("teklifsuresi.php") ?></p>							
						</div></div></div>
					<div class="category-tab shop-details-tab">
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								<li class="active"><a href="#reviews" data-toggle="tab">Yorumlar (2)</a></li>
							</ul></div>
						<div class="tab-content">
							<div class="tab-pane fade" id="details" >
								<div class="col-sm-3">
									<div class="product-image-wrapper">	
									</div></div></div>
							<div class="tab-pane fade active in" id="reviews" >
								<div class="col-sm-12">
									<ul>
										<li><a href=""><i class="fa fa-user"></i>AYŞE DEMİR</a></li>
										<li><a href=""><i class="fa fa-clock-o"></i>12:41 </a></li>
										<li><a href=""><i class="fa fa-calendar-o"></i>21 Aralık 2020</a></li>
									</ul>
									<p>Güzel Ürün</p>
									<br>
									<ul>
										<li><a href=""><i class="fa fa-user"></i>MERVE KAYA</a></li>
										<li><a href=""><i class="fa fa-clock-o"></i>15:32 </a></li>
										<li><a href=""><i class="fa fa-calendar-o"></i>13 Haziran 2021</a></li>
									</ul>
									<p>İyi Ürün</p>
									<br>
									<p><b>Yorum Yap</b></p>
									<form action="#">
										<textarea name="" ></textarea>
										<b>Ürün Puanı: </b> <img src="images/product-details/rating.png" alt="" />
										<button type="button" class="btn btn-default pull-right">
											Yorum Yap
										</button>
									</form>
				</div></div></div></div></div></div></div>
	</section>
	<?php
	include("footer.php")
	?>