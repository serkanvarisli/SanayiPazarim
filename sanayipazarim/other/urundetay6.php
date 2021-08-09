<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SayaniPazarim</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>

	<?php
	session_start();
if (!isset($_SESSION['username'])) {
  header('location:login.php');
}
include("baglanti.php");

$username = $_SESSION['username'];
if (isset($_POST['upload'])) {
  $teklif = $_POST['teklif'];
  $urun_id = $_POST['urun_id'];
 




  $query = "INSERT INTO teklif(urun_id,urun,teklif,teklifveren) VALUES ( '$urun_id','ZARA Mavi Hırka','$teklif','$username')";

  $res = mysqli_query($baglanti,$query);
}
include("head.php")
?>
	
	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
					</div> </div>
				<div class="col-sm-9 padding-right">
					<div class="product-details"><!--product-details-->
						<div class="col-sm-5">
							<div class="view-product">
								<img src="images/home/product1.jpg" alt="" />
								
							</div>
							<div id="similar-product" class="carousel slide" data-ride="carousel">	
								  <!-- Wrapper for slides -->
								    <div class="carousel-inner">
									</div> </div></div>
									
						<div class="col-sm-7">
							<div class="product-information"><!--/product-information-->
								<img src="images/product-details/new.jpg" class="newarrival" alt="" />
								<h2 name="urun" id="urun">ZARA Mavi Hırka</h2>
								<p>Web ID: 1</p>
								<img src="images/product-details/rating.png" alt="" /> <br>
								
									<span><i>En Yüksek Teklif: </i> <?php 
									$sql="SELECT MAX(teklif) FROM teklif";
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
			<INPUT TYPE="text" NAME="urun_id" value="1"style="display: none">
          </form>
								<br>
								<p><?php include("teklifsuresi.php") ?></p>
								
								
							</div><!--/product-information-->
						</div>
					</div><!--/product-details-->
					
					<div class="category-tab shop-details-tab"><!--category-tab-->
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								
								<li class="active"><a href="#reviews" data-toggle="tab">Yorumlar (2)</a></li>
							</ul>
						</div>
						<div class="tab-content">
							<div class="tab-pane fade" id="details" >
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<
										</div>
									</div>
								</div>
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
										<span>
											<input type="text" placeholder="Your Name"/>
											<input type="email" placeholder="Email Address"/>
										</span>
										<textarea name="" ></textarea>
										<b>Rating: </b> <img src="images/product-details/rating.png" alt="" />
										<button type="button" class="btn btn-default pull-right">
											Yorum Yap
										</button>
									</form>
								</div>
							</div>
							
						</div>
					</div><!--/category-tab-->
					
					
				</div>
			</div>
		</div>
	</section>
	
	<?php
	include("footer.php")
	?>
	

  
    <script src="js/jquery.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>