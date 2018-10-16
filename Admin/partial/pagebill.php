<?php
   foreach ($result as $value) {

        extract($value);
        $btnclass= $status == 0 ? 'btn-warning': 'btn-success';
        $str = $status == 0 ? 'Chưa giao': 'Đã giao';
        
        echo "<tr class=''>";
        echo "<input type='hidden' class='id-bill' name='check[]' value=$value[0]>";
        echo "<td>$name</td>";
        echo "<td style='width: 300px;'>$address</td>";
        echo "<td>$phone</td>";
        echo "<td>".number_format($total)." VNĐ</td>";
        echo "<td> <div class='btn btn-status $btnclass'>$str</div></td>";
        echo "<td>$date_created</td>";
        echo "<td><button class='btn h3 bg-info text-white ml-3 btnupdate'>Cập nhật</button>";
        echo "<td><button class='btn h3 bg-primary text-white ml-3 btn-view-info'>Xem chi tiết</button>";
        echo "</tr>";
   }
?>