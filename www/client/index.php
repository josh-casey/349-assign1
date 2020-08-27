<?php
$scriptList = array('js/jquery-3.5.1.min.js');
include('private/header.php');
include('private/sql.php');

function get_products() {
    $sql = "SELECT * FROM items";
    $query = mysqli_query($sql);
    $result = array();

    while($ar = mysqli_fetch_assoc($query)) {
        $result = $ar;
    }

    return $result;
}

?>

<section id="products">
    <?php
        $products = get_products();
        foreach ($products as $product) {
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

</section>
