<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            include 'Layout/header.php';
        ?>
        <div style="clear: both">
            <h1>Danh sách sản phẩm</h1>
            <?php if(!isset($_SESSION['cart']) || count($_SESSION['cart'])==0):?>
            <p>Bạn chưa chọn hàng</p>
            <?php else: ?>
            <form action="controller.php" method="post">
                <input type="hidden" name="action" value="update_cart"/>
                <table>
                    <tr>
                        <td>Item</td>
                        <td>Cost</td>
                        <td>Quantity</td>
                        <td>Item total</td>
                    </tr>
                    <?php
                    foreach($_SESSION['cart'] as $key => $item):
                        $cost = number_format($item['cost'],2);
                        $total = number_format($item['total'],2);
                    ?>
                    <tr>
                        <td>
                            <?php echo $item['name'];?>
                        </td>
                        <td>
                            <?php echo $cost ?>
                        </td>
                        <td>
                            <input type="text" name="newqty[<?php echo $key; ?>]"
                                   value="<?php echo $item['qty']; ?>" />
                        </td>
                        <td>
                            <?php echo $total; ?>
                        </td>
                    </tr>
                    <?php endforeach;?>
                    <tr>
                        <td colspan="3">
                            <b>Sub total</b>
                        </td>
                        <td>
                            <?php echo get_subtotal();?>
                        </td>
                    </tr>
                    
                    <tr>
                        <td colspan="4">
                            <input type="submit" value="Update Cart"/>
                            <!-- <a href="?action=order">Thanh toán</a> -->
                            <a href="#">Thanh toán</a>
                        </td>
                    </tr>
                </table>
                <p>Chọn "Update cart" đễ update số lượng hàng, chọn 0 để xóa</p>
            </form>
            <?php endif; ?>
            <p><a href="?action=show_add_item">Add Item</a></p>
            <p><a href="?action=empty_cart">Empty Cart</a></p>
        </div>
        <?php
            include 'Layout/footer.php';
        ?>
    </body>
</html>
