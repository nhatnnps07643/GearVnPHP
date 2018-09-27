
<?php 
include "admin/template/header.php";
$url_image = "admin.php?path=image";
?>

<form method="POST" action="<?=$url_image?>" class="mt-5 pt-5" enctype="multipart/form-data">
    <div class="form-group row">
        <label for="inputEmail3 " class="col-sm-2 col-md-4 col-form-label text-right">Tên sản phẩm</label>
        <div class="col-md-5">
                <?php
                    $image = getById($table,$id);
                    $product =getById('product',$image['id_product']);
                        echo "<input type='text' name='name' class='form-control' value='".$product['name']."'>"; 
                ?>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="inputEmail3 " class="col-sm-2 col-md-4 col-form-label text-right">Chọn file</label>
        <div class="col-sm-10 col-md-5">
            <input type="file" class="form-control" name="Image" >
        </div>
    </div>
    <div class="form-group row">
        <input type="hidden" class="form-control" value=<?=$image['id']?> name="id" >
        <input type="hidden" class="form-control" value=<?=$image['link']?> name="hiddenIMG" >
        <input type="hidden" class="form-control" value=<?=$image['id_product']?> name="hiddenID_product" >
    </div>
    <div class="form-group row justify-content-center">
        <div class="col-md-3">
            <button type="submit" class="btn btn-info" name="action" value="update">Thêm vào</button>
        </div>
    </div>
</form>