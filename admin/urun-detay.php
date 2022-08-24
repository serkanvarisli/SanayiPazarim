<?php
	session_start();
if (!isset($_SESSION['user'])) {
  header('location:login.php');
}
include("baglanti.php");
include("head.php")
?>
<?php                       //idye göre sayfa açma
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
							<div class="view-product">
                                <!--Fotoğrafı veritabanındaki productImage'ten açıyor-->
                            <img src="../images/home/<?php echo $row['productImage'] ?>" alt=""/>		
							</div>
							<div id="similar-product" class="carousel slide" data-ride="carousel">	
								   </div>
								</div>		
						<div class="col-sm-7">
							<div class="product-information">
                                <!--İsmi veritabanındaki productName den alıyor-->
                                <h2 ><?php echo $row['productName'] ?></h2>
								<i> ID:<?php echo $row['id'] ?> </i> <br>
                                <b> Ürün Açıklaması:  </b><br>
                                <h4><?php echo $row['productDescription'] ?></h4><!--ürün açıklaması-->
                                <h6><?php echo $row['productSubDescription'] ?></h5><!--ürün alt açıklaması-->		
							</div><!--/product-information-->
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php
include("footer.php")
?>