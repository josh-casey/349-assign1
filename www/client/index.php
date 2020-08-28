<?php
$scriptList = array('js/jquery-3.5.1.min.js');
include('private/header.php');
include('private/sql.php');
?>

<section id="products">
    <?php
        $sql = "SELECT * FROM items";
        $result = $db->query($sql);

        if ($result->num_rows > 0) {
            while ($product = $result->fetch_assoc()) {
                $name = $product['item_name'];
                $price = $product['item_price'];
                $description = $product['item_description'];
                $image = $product['item_image'];
                $id = $product['item_id'];
                ?>
                <div class="product-section">
                    <h2 class="product-name"><?php echo $name; ?></h2>
                    <h3 class="product-price"><?php echo $price; ?></h3>
                    <p><?php echo $description?></p>
                    <input type="submit" class="button" name="buy" value="buy">
                </div><?php
            }
        } else {
            echo "fail";
        }


        ?>
</section>


$(document).ready(function() {
    $()
}
