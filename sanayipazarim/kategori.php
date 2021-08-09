<?php
    include_once("head.php")
    ?>
     <?php
    include_once("baglanti.php")
    ?>
<?php                       //veritabanından ürünler çekiliyor
							$sql=$db->prepare("Select * from products where id=?");
							$sql->execute();
							$row=$sql->fetch(PDO::FETCH_ASSOC);
							?>
<div class="category-tab">
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								<li class="active"><a href="#giyim" data-toggle="tab"><?php include("baglanti.php");

$sql="SELECT category FROM productcategories where id=1"; //Kategoriler veritabanındaki kategori tablosundan çekiliyor
$sorgu=mysqli_query($baglanti,$sql);
while( $sonuc=mysqli_fetch_row($sorgu) ){
	echo $sonuc[0];
} ?></a></li>
								<li><a href="#" data-toggle="tab"><?php include("baglanti.php");
$sql="SELECT category FROM productcategories where id=2";
$sorgu=mysqli_query($baglanti,$sql);
while( $sonuc=mysqli_fetch_row($sorgu) ){
	echo $sonuc[0];
} ?></a></li>
								<li><a href="#" data-toggle="tab"><?php include("baglanti.php");
$sql="SELECT category FROM productcategories where id=3";
$sorgu=mysqli_query($baglanti,$sql);
while( $sonuc=mysqli_fetch_row($sorgu) ){
	echo $sonuc[0];
} ?></a></li>
								<li><a href="#aksesuar" data-toggle="tab"><?php include("baglanti.php");
$sql="SELECT category FROM productcategories where id=4";
$sorgu=mysqli_query($baglanti,$sql);
while( $sonuc=mysqli_fetch_row($sorgu) ){
	echo $sonuc[0];
} ?></a></li>
							</ul>
						</div>
						<div class="tab-content">
							<div class="tab-pane fade active in" id="giyim" >
								<div class="col-sm-2">
									<div class="product-image-wrapper">
										<div class="single-products"> 
											<div class="productinfo text-center">
                                            <a href="UrunDetay.php?id=1" class="btn btn-default add-to-cart">
                                            <img src="images/home/product1.jpg" alt="" />
											<h2></h2>
											<p><?php include("baglanti.php");
$sql="SELECT productname FROM products where id=1"; //Ürünler veritabanından çekiliyor
$sorgu=mysqli_query($baglanti,$sql);
while( $sonuc=mysqli_fetch_row($sorgu) ){
	echo $sonuc[0];
} ?></p>
	<i class="fa fa-shopping-cart"></i>Teklif Ver</a>
											</div>
										</div>
									</div>
								</div>
                                <div class="col-sm-2">
									<div class="product-image-wrapper">
										<div class="single-products"> 
											<div class="productinfo text-center">
                                            <a href="UrunDetay.php?id=1" class="btn btn-default add-to-cart">
                                            <img src="images/home/product3.jpg" alt="" />
											<h2></h2>
											<p><?php include("baglanti.php");
$sql="SELECT productname FROM products where id=3";
$sorgu=mysqli_query($baglanti,$sql);
while( $sonuc=mysqli_fetch_row($sorgu) ){
	echo $sonuc[0];
} ?></p>
<i class="fa fa-shopping-cart"></i>Teklif Ver</a>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-2">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
                                            <a href="UrunDetay.php?id=4" class="btn btn-default add-to-cart">
												<img src="images/home/product4.jpg" alt="" />
											<h2></h2>
											<p><?php include("baglanti.php");
$sql="SELECT productname FROM products where id=4";
$sorgu=mysqli_query($baglanti,$sql);
while( $sonuc=mysqli_fetch_row($sorgu) ){
	echo $sonuc[0];
} ?></p>
<i class="fa fa-shopping-cart"></i>Teklif Ver</a></div>
										</div>
									</div>
								</div>
								<div class="col-sm-2">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
                                            <a href="UrunDetay.php?id=1" class="btn btn-default add-to-cart">
                                            <img src="images/home/product5.jpg" alt="" />
											<h2></h2>
											<p><?php include("baglanti.php");
$sql="SELECT productname FROM products where id=5";
$sorgu=mysqli_query($baglanti,$sql);
while( $sonuc=mysqli_fetch_row($sorgu) ){
	echo $sonuc[0];
} ?></p>
	<i class="fa fa-shopping-cart"></i>Teklif Ver</a></div>
										</div>
									</div>
								</div>
								<div class="col-sm-2">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
                                            <a href="UrunDetay.php?id=1" class="btn btn-default add-to-cart">
                                            <img src="images/home/product6.jpg" alt="" />
											<h2></h2>
											<p><?php include("baglanti.php");
$sql="SELECT productname FROM products where id=6";
$sorgu=mysqli_query($baglanti,$sql);
while( $sonuc=mysqli_fetch_row($sorgu) ){
	echo $sonuc[0];
} ?></p>
<i class="fa fa-shopping-cart"></i>Teklif Ver</a></div>			
										</div>
									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="aksesuar" >
								<div class="col-sm-2">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">     
                                                <a href="UrunDetay.php?id=2" class="btn btn-default add-to-cart">
												<img src="images/home/product2.jpg" alt="" />
											<h2></h2>
											<p><?php include("baglanti.php");
$sql="SELECT productname FROM products where id=2";
$sorgu=mysqli_query($baglanti,$sql);
while( $sonuc=mysqli_fetch_row($sorgu) ){
	echo $sonuc[0];
} ?></p>
<i class="fa fa-shopping-cart"></i>Teklif Ver</a></div>	
										</div>
									</div>
								</div>								
							</div>
						</div>
					</div><!--/category-tab-->
                    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body> 
<html>