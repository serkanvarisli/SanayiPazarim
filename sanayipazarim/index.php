<?php
  session_start();
  if (!isset($_SESSION['username'])) {
    header('location:login.php');
  }
?>
<?php 
	include("kontrol.php");   
?>
<?php 
	include("head.php");   
?>
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
					</div>
				</div>		
				<div class="row">
					<div class="col-md-12 col-lg-12">
					<h2 class="title text-center">ÜRÜNLER</h2>
						<div class="row mb-3">						
							<?php
							$sql=$db->prepare("Select * from products order by id ASC ");
							$sql->execute();
							while($row=$sql->fetch(PDO::FETCH_ASSOC)){			
							?>	
								<div class="col-md-4 col-lg-4">	
										<div class="card"> <!--Veri tabanından ürün bilgileri çekiliyor-->
										<a href="UrunDetay.php?id=<?php echo $row['id'] ?>" class="btn btn-default " >
											<img src="images/home/<?php echo $row['productImage'] ?>" alt="" class="card-img-top"/>
											</a>
											<div class="card-body shadow">
											<h5 class="card-title"><?php echo $row['productName'] ?></h5>
											<a href="UrunDetay.php?id=<?php echo $row['id'] ?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Teklif Ver</a>
											<p class="card-text"> </p>
											<br>
											<br>
											<br>
										</div>
								</div>
						</div>
						<?php
						} ?>
						</div>
						</div>
					</div>
					<center>
					<a href="kategori.php"><h2>KATEGORİLER</h2></a>
					</center>
				<?php //kategoriler alanı kategori.phpden çekiliyor
				include("kategori.php");
				?>		
				</div>
			</div>
		</div>
	</section>
	<?php
	include("footer.php")
	?>