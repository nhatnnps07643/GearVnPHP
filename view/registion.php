<?php include "./view/Layout/header.php" ?>
<main>
      <section class="login">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-xl-5">
              <div class="card p-3 mt-5 shadow-lg">
                <div class="card-body"></div>
                <form action='<?=$route?>?path=user&action=registion_handle'  method='POST' enctype='multipart/form-data'>
                  <p class="h4 text-center py-4">Đăng kí</p>
                  <div class="d-flex justify-content-between">
                    <div class="md-form mt-4"><i class="ml-3 fa fa-user prefix grey-text"></i>
                      <label class="m-0 font-weight-light" for="">Tên</label>
                      <input name='name' class="form-control">
                    </div>
                    <div class="md-form mt-4"><i class="ml-3 fas fa-envelope prefix grey-text"></i>
                      <label class="m-0 font-weight-light" for="">Email</label>
                      <input name='email' class="form-control" type="email">
                    </div>
                  </div>
                  <div class="d-flex justify-content-between">
                    <div class="md-form mt-4"><i class="ml-3 fa fa-lock prefix grey-text"></i>
                      <label class="m-0 font-weight-light" for="">Mật khẩu </label>
                      <input name='password' class="form-control" type="password">
                    </div>
                    <div class="md-form mt-4 d-inline-block"><i class="ml-3 fa fa-lock prefix grey-text"></i>
                      <label class="m-0 font-weight-light" for="">Nhập lại mật khẩu</label>
                      <input name='passwordre' class="form-control" type="password">
                    </div>
                  </div>
                  <div class="md-form mt-4"><i class="ml-3 fas fa-phone prefix grey-text"></i>
                    <label class="m-0 font-weight-light" for="">Số điện thoại</label>
                    <input name='number' class="form-control" type="number">
                  </div>
                  <div class="md-form mt-4"><i class="ml-3 fas fa-location-arrow prefix grey-text"></i>
                    <label class="m-0 font-weight-light" for="">Địa chỉ</label>
                    <input name='address' class="form-control" type="text">
                  </div>
                  <div class="md-form mt-4">
                    <!-- <i class="ml-3 fas fa-location-arrow prefix grey-text"></i> -->
                    <label class="m-0 font-weight-light" for="">Hình Đại Diện</label>
                    <input name='image' class="form-control" type="file">
                  </div>
                  <div class="text-center py-4 mt-3">
                    <button class="btn bg-info" type="submit">Register</button>
                  </div>
                </form>
              </div>
              <div class="alert alert-warning"><?php if($MESSAGE != '') echo $MESSAGE ?></div>
            </div>
          </div>
        </div>
      </section>
    </main>
<?php include "./view/layout/footer.php" ?>