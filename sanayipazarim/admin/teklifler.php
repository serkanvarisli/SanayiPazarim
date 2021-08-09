
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
									<?php
									$sql=$db->prepare("Select * from products where id=?");
									$sql->execute([htmlspecialchars($_GET['id'])]);
									$diz=$sql->fetch(PDO::FETCH_ASSOC);
									?>
                           <center>  <h1><u> TEKLİFLER</u></h1>
</center> 
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
                                <!--İsmi veritabanındaki productName den alıyor-->
                                <h2 ><?php echo $row['productName'] ?></h2>
								<i> ID:<?php echo $row['id'] ?> </i> <br>
		Tekliflerin Biteceği tarih: <?php echo $diz['offerFinishedTime'] ; ?>
                                <h4>Teklifler:</h4>
                                <div class="table-responsive">
<table class="table align-items-center table-flush" style="width: 400px; border:  3px ridge;" border="0">
<tr style="background: black; color: white;">
<th>Ürün id</th>
<th>Teklif</th>
<th>Teklif Veren</th>
<th></th>
</tr>           
	<?php //
$urun_id = $_GET['id'];
$sql=$db->prepare("Select * from teklif where urun_id='$urun_id'order by teklif DESC ");
							$sql->execute();
							while($row=$sql->fetch(PDO::FETCH_ASSOC)){
    echo '<tr>';
    echo '<td align="center">'.$row['urun_id'].'</td>';
    echo '<td>'.$row['teklif'].'</td>';
    echo '<td>'.$row['teklifveren'].'</td>'; ?>  
	<td><a href="teklifdetay.php?id=<?php echo $row['id'] ?>" class="btn btn-primary ">Detay</td>         
   <?php
						} ?>
	</tr>			
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>