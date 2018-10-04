<?php require 'view/Layout/header.php' ?>
    <!-- ////////////// End Header ////////////// -->
    <!-- ////////////// Begin Main ////////////// -->
	<main>
      <section class="profile">
        <div class="container">
          <div class="row mt-5">
            <div class="col-md-4">
              <div class="card">
                <div class="view overlay"></div><img class="card-img-top" src="https://scontent.fsgn5-2.fna.fbcdn.net/v/t1.0-1/c1.0.958.958/40658679_928050384062508_4392198221640761344_n.jpg?_nc_cat=105&amp;oh=a15a2c52a3b0e12cd6a8a3e35944661a&amp;oe=5C5DF162" alt="Card image cap">
                <div class="card-body bg-dark text-white">
                  <h4 class="card-title">Mai Thị Ngọc Quynh</h4>
                  <hr class="bg-light">
                  <div class="d-block">
                    <button class="btn btn-success" type="button" data-toggle="modal" data-target="#exampleModalAvatar" data-whatever="@mdo">Cập nhật hình đại diện</button>
                  </div>
                  <div class="d-block mt-3">
                    <button class="btn btn-success" type="button" data-toggle="modal" data-target="#exampleModalPass" data-whatever="@mdo">Đổi mật khẩu</button>
                  </div>
                  <div class="d-block mt-3">
                    <button class="btn btn-success" type="button" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Cập nhật thông tin</button>
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content bg-info">
                          <div class="modal-header"></div>
                          <h5 class="modal-title text-center" id="exampleModalLabel">Cập nhật thông tin</h5>
                          <div class="modal-body">
                            <form class="p-4">
                              <div class="form-group">
                                <label class="col-form-label" for="">Họ và tên:</label>
                                <input class="form-control" id="recipient-11">
                              </div>
                              <div class="form-group">
                                <label class="col-form-label" for="">Số điện thoại:</label>
                                <input class="form-control" id="recipient-22">
                              </div>
                              <div class="form-group">
                                <label class="col-form-label" for="">Địa chỉ:</label>
                                <input class="form-control" id="recipient-33">
                              </div>
                              <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Bỏ</button>
                                <button class="btn btn-success" type="button">Cập nhật</button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="modal fade" id="exampleModalPass" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content bg-info">
                          <div class="modal-header"></div>
                          <h5 class="modal-title text-center" id="exampleModalLabel1">Cập nhật thông tin</h5>
                          <div class="modal-body">
                            <form>
                              <div class="form-group">
                                <label class="col-form-label" for="">Mật khẩu củ</label>
                                <input class="form-control" id="recipient-1" type="password">
                              </div>
                              <div class="form-group">
                                <label class="col-form-label" for="">Mật khẩu mới</label>
                                <input class="form-control" id="recipient-2" type="password">
                              </div>
                              <div class="form-group">
                                <label class="col-form-label" for="">Nhập lại</label>
                                <input class="form-control" id="recipient-3" type="password">
                              </div>
                              <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Bỏ</button>
                                <button class="btn btn-success" type="button">Đổi mật khẩu</button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="modal fade" id="exampleModalAvatar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content bg-info">
                          <div class="modal-header"></div>
                          <h5 class="modal-title text-center" id="exampleModalLabel1">Đổi Avatar</h5>
                          <div class="modal-body">
                            <form>
                              <div class="form-group">
                                <label class="col-form-label" for="">Chọn hình</label>
                                <input class="form-control" id="recipient-1" type="file">
                              </div>
                              <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Bỏ</button>
                                <button class="btn btn-success" type="button">Cập nhật</button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-8">
              <div class="row">
                <div class="col-12">
                  <h2 class="mt-3">Họ tên: <span> Mai Thị Ngọc Quỳnh</span></h2>
                  <h2 class="mt-3">Ngày Sinh:<span> 08-12-1996</span></h2>
                  <h2 class="mt-3">Địa chỉ: <span> 109/15 Đường Hiệp Bình, Hiệp Bình Phước, Quận Thủ Đức</span></h2>
                  <h2 class="mt-3">Số Điện Thoại: <span> 0966643251</span></h2>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
	</main>
<?php require 'view/Layout/footer.php' ?>