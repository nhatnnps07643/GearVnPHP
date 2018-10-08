<?php include "./view/Layout/header.php" ?>
<main>
	<section class="login">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-xl-8">
					<div class="box-form mt-5">
						<div class="title">
							<h2 class="text-center">Đăng nhập</h2>
						</div>
						<form class="text-center" action="index.php?path=user&action=login_handle" method="POST">
							<div class="row mt-5">
								<div class="col-md-6">
									<div class="title text-center">
										<h3>Đăng nhập tài khoản</h3>
									</div>
									<div class="group-item"><i class="fa fa-envelope"></i>
										<input type="email" name='email' placeholder="Email">
									</div>
									<div class="group-item"><i class="fa fa-lock"></i>
										<input type="password" name='password' placeholder="Password">
									</div>
									<div class="group-checkbok text-left ml-3">
										<input type="checkbox" id="remem">
										<label for="remem">Nhớ mật khẩu</label>
									</div>
									<div class="group-submit">
										<input class="bg-info" name="Login" type="submit" value="Đăng nhập">
									</div>
									<div class="group-more text-left mt-3"><a href="#">Quên mật khẩu</a><a href="">Đăng kí</a></div>
								</div>
								<div class="col-md-6 bor-bottom">
									<div class="title text-center">
										<h3>Đăng nhập với</h3>
									</div><a class="btn-login-width bg-primary" href="#"><i class="fab fa-facebook"></i>Facebook</a><a class="btn-login-width bg-danger" href="#"><i class="fab fa-google-plus-g"></i>Google</a>
								</div>
								<div class='alert alert-info'> <?php if($MESSAGE != '') echo $MESSAGE ?> </div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>
<?php include "./view/Layout/footer.php" ?>