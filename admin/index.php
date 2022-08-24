
<?php
  session_start();
  if (!isset($_SESSION['user'])) {
    header('location:login.php');
  }
  ?>
  
<?php 
	include("head.php");   
?>
<center>
<?php 
	include("kontrol.php");   
?>
<br>

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
								
								<div class="col-md-2 col-lg-2">
									
										<div class="card">
										<a href="urun-detay.php?id=<?php echo $row['id'] ?>" class="btn btn-default " >
											<img src="../images/home/<?php echo $row['productImage'] ?>" alt="" class="card-img-top"/>
											</a>
											<div class="card-body shadow">

											<h5 class="card-title"><?php echo $row['productName'] ?></h5>
                      <!--Detaylar Butonu-->
											<a href="urun-detay.php?id=<?php echo $row['id'] ?>" class="btn btn-default "><i class=""></i><font color="black">Detaylar</font></a>
                      <p></p><!--Teklifler Butonu-->
											<a href="teklifler.php?id=<?php echo $row['id'] ?>" class="btn btn-default "><i class=""></i><font color="black">Teklifler</font></a>
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
					</div><!--features_items-->
</center>
  <?php include("footer.php")
  ?>
  
