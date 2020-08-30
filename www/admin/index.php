<?php
$scriptList = array('js/jquery-3.5.1.min.js');
include('private/header.php');
include('private/sql.php');
?>

<<<<<<< HEAD
=======
<section id="purchases">
>>>>>>> 7e1e2e9f702dd12bbd55bd472982e5234c3d72e5
  <div class = "table">
    <table class = "order-table">
      <tr>
        <th>Order ID</th>
        <th>Customer Name</th>
        <th>Customer Email</th>
        <th>Customer Address</th>
        <th>Item ID</th>
<<<<<<< HEAD
        <th>Order Status</th>
      </tr>

      <?php

      $sql = "SELECT * FROM orders";
      $result = $db->query($sql);
         
         if ($result->num_rows > 0) {
      while ($purchases = $result->fetch_assoc()) {
      
=======
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
>>>>>>> 7e1e2e9f702dd12bbd55bd472982e5234c3d72e5
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
<<<<<<< HEAD
 

=======
</section>
>>>>>>> 7e1e2e9f702dd12bbd55bd472982e5234c3d72e5
