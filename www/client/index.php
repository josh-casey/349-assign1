<?php
$scriptList = array('js/jquery-3.5.1.min.js');
include('private/header.php');
include('private/sql.php');
/*
function get_products() {
    $sql = "SELECT * FROM items";
    $query = $connect->query($sql);
    echo $connect->query;
    $result = array();

    return $result;
}*/

?>

<section id="products">
    <?php
        $sql = "SELECT * FROM items";
        $result = $db->query($sql);

        if ($result->num_rows > 0) {
            echo "test";
        } else {
            echo "fail";
        }
    
/*
        while ($product = $result->fetch_assoc()) {
            $name = $product['item_name'];
            $price = $product['item_price'];
            $description = $product['item_description'];
            $image = $product['item_image'];
            ?>
            <div class="product-section">
            <h1 class="product-name"><?php echo $name; ?></h1>
            </div>
        <?php
        }
        ?>
*/
?>
</section>
