<?php
$scriptList = array('js/jquery-3.5.1.min.js');
include('private/header.php');
include('private/sql.php');
?>

<section id="purchases">
  <div class = "table">
    <table class = "order_table">
      <tr>
        <th>Order ID</th>
        <th>Customer Name</th>
        <th>Customer Email</th>
        <th>Customer Address</th>
        <th>Item ID</th>
        <!--<th>Item Name</th>
        <th>Item Price</th>-->
        <th>Order Status</th>
      </tr>

<?php
$sql = "SELECT * FROM orders";
$result = $db->query($sql);

echo $result;

if ($result->num_rows > 0) {
    while ($purchases = $result->fetch_assoc()) {
      echo $name;
      $name = $purchases['cust_name'];
      $email = $purchases['cust_email'];
      $address = $purchases['cust_address'];
      $orderId = $purchases['order_id'];
      $itemId = $purchases['item_id'];
      $status = $purchases['shipped'];
?>
      
      <tr>
        <td><?php echo $orderId; ?></td>
        <td><?php echo $name; ?></td>
        <td><?php echo $email; ?></td>
        <td><?php echo $address; ?></td>
        <td><?php echo $itemId; ?></td>
        <td><?php echo $status; ?></td>
      </tr><?php
    }
} else {
    echo "fail";
}
?>
    </table>
  </div>
</section>
