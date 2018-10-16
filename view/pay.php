<?php 
	include 'Layout/header.php';
?>
<main>
	<section>
		<div class="container mt-5">
			<div class="row">
				<div class="col-md-7">
					<form action='<?=$route?>&action=pay' method='POST'>
					<?php
					if(isset($_SESSION['user'])){
						$guest = getById('guest', $_SESSION['user']['id']);
					}
						
					?>
						<div class="form-group">
							<label for="">Họ và tên</label>
							<input type="text" value='<?php if(isset($guest)) echo $guest['name'] ?>' name='name' class="form-control" id=""  placeholder="Họ tên khách hàng">
						</div>
						<div class="form-group">
							<label for="">Email address</label>
							<input type="email" value='<?php if(isset($guest)) echo $guest['email'] ?>' name='email' class="form-control" id="" placeholder="Email">
						</div>
						<div class="form-group">
							<label for="">Địa chỉ</label>
							<input type="text" value='<?php if(isset($guest)) echo $guest['address'] ?>' name='address' class="form-control" id="" placeholder="Địa chỉ">
						</div>
						<div class="form-group">
							<label for="">Số điện thoại</label>
							<input type="number" value='<?php if(isset($guest)) echo $guest['number'] ?>' name='number' class="form-control" id="" placeholder="Số điện thoại liên lạc">
						</div>
						<div class="form-group">
							<label for="">Thanh toán</label>
							<label class='ml-3 h4' for="home">Tại nhà</label>
							<input type="radio" value='Khách hàng nhận hàng tại nhà' checked id='home' name='payments'>
							<label class='ml-3 h4' for="company">Tại công ty</label>
							<input type="radio" value='Khách hàng nhận hàng tại cửa hàng' id='company' name='payments'>
						</div>
						<div class="form-group">
							<label for="">Ghi chú</label>
							<textarea name="noted" id="" style='width: 100%' rows="5"></textarea>
						</div>
						<div class="form-group">
							<button class='btn btn-warning'>Mua hàng</button>
						</div>
					</form>
				</div>
				<div class="col-md-5">
					<h2 class="h2">Nội dung </h2>
					<label for="">Tổng tiền là: </label>
					<h3 class='h3'><?=number_format($_SESSION['total']) .' VNĐ'?></h3>
					<h4 class="h4">Thời gian giao ngày từ 2 đến 3 ngày tính từ ngày giao hàng</h4>
					<h4 class="alert ">Cảm ơn quí khách tin tưởng dịch vụ của chúng tôi</h4>

				</div>
			</div>
		</div>
	</section>
</main>
<?php 
	include 'Layout/footer.php';
?>