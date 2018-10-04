<?php include "./view/Layout/header.php" ?>
<main>
      <section class="login">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-xl-5">
              <div class="card p-3 mt-5 shadow-lg">
                <div class="card-body"></div>
                <form>
                  <p class="h4 text-center py-4">Đăng kí</p>
                  <div class="d-flex justify-content-between">
                    <div class="md-form mt-4"><i class="ml-3 fa fa-user prefix grey-text"></i>
                      <label class="m-0 font-weight-light" for="">Tên</label>
                      <input class="form-control">
                    </div>
                    <div class="md-form mt-4"><i class="ml-3 fas fa-envelope prefix grey-text"></i>
                      <label class="m-0 font-weight-light" for="">Email</label>
                      <input class="form-control" type="email">
                    </div>
                  </div>
                  <div class="d-flex justify-content-between">
                    <div class="md-form mt-4"><i class="ml-3 fa fa-lock prefix grey-text"></i>
                      <label class="m-0 font-weight-light" for="">Mật khẩu </label>
                      <input class="form-control" type="password">
                    </div>
                    <div class="md-form mt-4 d-inline-block"><i class="ml-3 fa fa-lock prefix grey-text"></i>
                      <label class="m-0 font-weight-light" for="">Nhập lại mật khẩu</label>
                      <input class="form-control" type="password">
                    </div>
                  </div>
                  <div class="md-form mt-4"><i class="ml-3 fas fa-phone prefix grey-text"></i>
                    <label class="m-0 font-weight-light" for="">Số điện thoại</label>
                    <input class="form-control" type="email">
                  </div>
                  <div class="md-form mt-4"><i class="ml-3 fas fa-location-arrow prefix grey-text"></i>
                    <label class="m-0 font-weight-light" for="">Địa chỉ</label>
                    <input class="form-control" type="email">
                  </div>
                  <div class="text-center py-4 mt-3">
                    <button class="btn bg-info" type="submit">Register</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
<?php include "./view/layout/footer.php" ?>