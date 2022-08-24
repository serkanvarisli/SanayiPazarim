<?php
include("head.php")
?>

	<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Giriş Yapın</h2>
						<form id="form1" name="form1" action="girisisle.php" method="post">
<table width="259" border="0" align="center">
    <tbody>
      <tr>
        <td width="96">Kullanıcı Adı</td>
        <td width="153"><input type="text" name="kuladi" id="kuladi"required></td>
      </tr>
      <tr>
        <td>Şifre</td>
        <td><input type="password" name="sifre" id="sifre"required></td>
		<td><i class="fa fa-eye parola" onClick="parolaGoster('sifre', this)">   </i></td>

      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><input type="submit" name="submit" id="submit" value="GİRİŞ" class="btn btn-success my-2"></td>
      </tr>
    </tbody>
  </table>
</form>
					</div><!--/login form-->
					
				</div>
				<div class="col-sm-1">
					<h2 class="or">veya</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2>Kaydolun</h2>
						<form id="form1" name="form1" action="kayitisle.php" method="post">				
  <table width="259" border="0" align="center">
    <tbody>
      <tr>
        <td width="96">Kullanıcı Adı</td>
        <td width="153"><input class="form-control" type="text" name="kuladi" id="kuladi" required ></td>
      </tr>
      <tr>
        <td>Şifre</td>
        <td><input class="form-control" type="password" name="sifre" id="sifre2"required></td>
		<td><i class="fa fa-eye parola" onClick="parolaGoster('sifre2', this)">   </i></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><input type="submit" name="submit" id="submit" value="KAYDOL"class="btn btn-success my-2"></td>
      </tr>
    </tbody>
  </table>
</form>
<script> //parola gösterme gizleme scripti
		function parolaGoster(id, el) {
		  let x = document.getElementById(id);
		  if (x.type === "password") {
			x.type = "text";
			el.className = 'fa fa-eye-slash parola';
		  } else {
			x.type = "password";
			el.className = 'fa fa-eye parola';
		  }
}
	</script>
<script type='text/javascript'> //headerdaki çıkış yap butonunu gizleme
    document.getElementById("cikis").style.visibility = "hidden";
</script>
					</div>
				</div>
			</div>
		</div>
	</section><!--/form-->
	<?php include("footer.php") ?>