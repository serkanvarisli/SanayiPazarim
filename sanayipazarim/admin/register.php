<?php include("docs/loginhead.php") ?>
  <!-- Main content -->
  <div class="main-content">
    <!-- Header -->
    <div class="header bg-gradient-primary py-7 py-lg-8 pt-lg-9">
      <div class="container">
        <div class="header-body text-center mb-7">
          <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6 col-md-8 px-5">
              <h1 class="text-white">Hesap Oluşturun</h1>
              
            </div>
          </div>
        </div>
      </div>
      <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
    </div>
    <!-- Page content -->
    <div class="container mt--8 pb-5">
      <!-- Table -->
      <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8">
          <div class="card bg-secondary border-0">
            <div class="card-header bg-transparent pb-5">
              <div class="text-muted text-center mt-2 mb-4"><small>ile kaydol</small></div>
              <div class="text-center">
                <a href="#" class="btn btn-neutral btn-icon mr-4">
                  <span class="btn-inner--icon"><img src="assets/img/icons/common/github.svg"></span>
                  <span class="btn-inner--text">Github</span>
                </a>
                <a href="#" class="btn btn-neutral btn-icon">
                  <span class="btn-inner--icon"><img src="assets/img/icons/common/google.svg"></span>
                  <span class="btn-inner--text">Google</span>
                </a>
              </div>
            </div>
            <div class="card-body px-lg-5 py-lg-5">
              <div class="text-center text-muted mb-4">
                <small>Ya da bilgilerinle kaydol</small>
              </div>
              <div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
				
            <section id="form"><!--form-->

						<form id="form1" name="form1" action="kayitisle.php" method="post">
							
  <table width="259" border="0" align="center">
    <tbody>
      <tr>
        <td width="96">Email</td>
        <td width="153"><input type="email" name="kuladi" id="kuladi"></td>
      </tr>
      <tr>
        <td>Şifre</td>
        <td><input type="password" name="sifre" id="sifre"></td>
		<td><i class="fa fa-eye parola" onClick="parolaGoster('sifre', this)">   </i></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><input type="submit" name="submit" id="submit" value="KAYDOL"></td>
      </tr>
    </tbody>
  </table>
  <br>
  <a href="login.php" class="text"><small>Kayıtlıysanız Giriş Yapın</small></a>
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
  
            </div>
          </div>
        </div>
      </div>
    </div>
  </div></section><!--/form-->
            </div>
          </div>
          <?php
include("docs/loginfooter.php")
  ?>