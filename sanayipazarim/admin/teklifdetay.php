<?php
	session_start();
if (!isset($_SESSION['user'])) {
  header('location:login.php');
}
include("baglanti.php");
include("head.php")
?>
<?php                       //idye göre sayfa açma
							$sql=$db->prepare("Select * from teklif where id=?");
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
                                <!--Fotoğrafı veritabanındaki productImageten açıyor-->
                            <img src="../images/home/<?php echo $row['productImage'] ?>" alt=""/>
							</div>
							<div id="similar-product" class="carousel slide" data-ride="carousel">	
								   </div></div>		
						<div class="col-sm-7">
							<div class="product-information">
                                <!--Veriler veritabanı teklif tablosundan çekiyoruz -->
								<h5> Ürün ID: <?php echo $row['urun_id'] ?>  </h5>
                                <b> Teklif:  </b><br>
                                <h2 ><?php echo $row['teklif'] ?> TL</h2>
                                <b> Teklifi Veren:  </b><br>
                                <h4><?php echo $row['teklifveren'] ?></h4>
                                <b> Teklifi Verilme Tarihi:  </b><br>
                                <h4><?php echo $row['tarih'] ?></h4>	
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
        <div class="container">
			<div class="row">
				<div class="col lg-12">
					<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                </div>
			</div>
		</div>
	</section>
<?php
include("footer.php")
?>