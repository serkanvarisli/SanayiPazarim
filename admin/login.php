  <?php include("docs/loginhead.php") ?>
  <!-- Main content -->
  <div class="main-content">
    <!-- Header -->
    <div class="header bg-gradient-primary py-7 py-lg-8 pt-lg-9">
      <div class="container">
        <div class="header-body text-center mb-7">
          <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6 col-md-8 px-5">
              <h1 class="text-white">Merhaba</h1> 
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
      <div class="row justify-content-center">
        <div class="col-lg-5 col-md-7">
          <div class="card bg-secondary border-0 mb-0">
            <div class="card-header bg-transparent pb-5">
              <div class="text-muted text-center mt-2 mb-3"><small>ile giriş yap</small></div>
              <div class="btn-wrapper text-center">
                <a href="#" class="btn btn-neutral btn-icon">
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
                <small>Ya da bilgilerinizle giriş yapın</small>
              </div>
              <section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->				
						<form id="form1" name="form1" action="girisisle.php" method="post">
<table width="259" border="0" align="center">
    <tbody>
      <tr>
        <td width="96">Email Adresi</td>
        <td width="153"><input type="email" name="kuladi" id="kuladi"></td>
      </tr>
      <tr>
        <td>Şifre</td>
        <td><input type="password" name="sifre" id="sifre"></td>
		<td><i class="fa fa-eye parola" onClick="parolaGoster('sifre', this)">   </i></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><input type="submit" name="submit" id="submit" value="GİRİŞ"></td>
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
</div><!--/sign up form-->
				</div>
			</div>
    </div></div>	</div>
</section><!--/form-->
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-6">
              <a href="#" class="text-light"><small>Şifrenizi mi unuttunuz?</small></a>
            </div>
            <div class="col-6 text-right">
              <a href="register.php" class="text-light"><small>Hemen Kaydolun</small></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php
include("docs/loginfooter.php")
  ?>