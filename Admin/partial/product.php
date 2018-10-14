
<?php $url_product = "admin.php?path=product"; ?>
<table class="table table-bordered">
	<thead class="thead-dark">
	<tr class="">
		<th scope="col">ID</th>
		<th scope="col">Tên</th>
		<th scope="col">Giá niêm iết</th>
		<th scope="col">Giá bán</th>
		<th scope="col">Ngày tạo</th>
		<th scope="col">Kho</th>
		<th scope="col">Hình chính</th>
		<th scope="col">Thao tác</th>
	</tr>
	</thead>
	<tbody>
	<?php
		if(isset($_REQUEST['name_search'])){
			$result = searchByName($table,$_REQUEST['name_search']);
		}
		else
			$result = $listProduct;// goi phuong thuc lay danh sach
		while($set = $result->fetch()){ // duyet danh sach
			echo "<tr  class=''>";
			echo "<td> <input type='checkbox' class='chb-cata mr-1' name='check[]' value=".$set['id']."><span>".$set['id']."</span></td>";
			echo "<td>".$set['name']."</td>";
			echo "<td>".$set['price']."</td>";
			echo "<td>".$set['sale']."</td>";
			echo "<td>".$set['date_created']."</td>";
			echo "<td>".$set['stock']."</td>";
			echo "<td><img style='max-width: 30px' class='img-fluid' src=".$set['image']."></td>";
			echo "<td> <a class='btn h3 bg-info text-white ml-3 ' href='$url_product&action=delete&id=".$set['id']."'>Xóa</a>";
			echo "<a class='btn h3 text-white bg-info ml-3 ' href='$url_product&action=form-update&id=".$set['id']."'>Sửa</a></td>";
			echo "</tr>";
		}
		?>
	</tbody>
</table>