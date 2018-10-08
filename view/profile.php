<?php require 'view/Layout/header.php' ?>
    <!-- ////////////// End Header ////////////// -->
    <!-- ////////////// Begin Main ////////////// -->
	<main>
      <section class="profile">
        <div class="container">
          <div class="row mt-5">
            <div class="col-md-4">
              <div class="card">
                <div class="view overlay"></div><img class="card-img-top" src="<?=$_SESSION['user']['image']?>" alt="Card image cap" style='width: 300px; height: 300px ; object-fit: cover'>
                <div class="card-body bg-dark text-white">
                  <h4 class="card-title"><?=$_SESSION['user']['name']?></h4>
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
                            <form class="p-4" action='' method='POST'>
                              <div class="form-group">
                                <label class="col-form-label" for="">Họ và tên:</label>
                                <input class="form-control" name='name' value='<?=$_SESSION['user']['name']?>' id="recipient-11">
                              </div>
                              <div class="form-group">
                                <label class="col-form-label" for="">Số điện thoại:</label>
                                <input class="form-control" name='number' value='<?=$_SESSION['user']['number']?>' id="recipient-22">
                              </div>
                              <div class="form-group">
                                <label class="col-form-label" for="">Địa chỉ:</label>
                                <input class="form-control" name='address' value='<?=$_SESSION['user']['address']?>' id="recipient-33">
                              </div>
                              <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Bỏ</button>
                                <button class="btn btn-success"  type="button">Cập nhật</button>
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
                                <button class="btn btn-success" data-dismiss="modal" type="button">Đổi mật khẩu</button>
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
                  <h2 class="mt-3">Họ tên: <span> <?=$_SESSION['user']['name']?></span></h2>
                  <h2 class="mt-3">Địa chỉ: <span> <?=$_SESSION['user']['address']?></span></h2>
                  <h2 class="mt-3">Số Điện Thoại: <span> <?=$_SESSION['user']['number']?></span></h2>
                </div>
                <div class="col-12">
                <table class="table">
                    <div class="title text-center h3">LỊCH SỬ MUA HÀNG</div>
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">Mã hóa đơn</th>
                        <th scope="col">Số tiền</th>
                        <th scope="col">Ngày mua</th>
                        <th scope="col">Trạng thái</th>
                        <th scope="col">Xóa Đơn Hàng</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                      foreach ($Arrbill as $key => $value) {
                        extract($value);
                        $stt = $status == 1 ? 'Đã giao' : 'Chưa giao';
                        $checked = $status == 1 ? 'disabled' : '';
                        echo "<tr>
                                <th scope='row'>$id</th>
                                <td>".number_format($total)." VND</td>
                                <td>$date_created</td>
                                <td>$stt</td>
                                <td> <a href=''class=' btn btn-warning $checked' >Xóa</a> </td>
                              </tr>";
                      }
                    ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
	</main>
<?php require 'view/Layout/footer.php' ?>