<?php
$scriptList = array('js/jquery-3.5.1.min.js');
include('private/header.php');
include('private/sql.php');
?>

  <div class = "table">
    <table class = "order-table">
      <tr>
        <th>Order ID</th>
        <th>Customer Name</th>
        <th>Customer Email</th>
        <th>Customer Address</th>
        <th>Item ID</th>
        <th>Order Status</th>
<<<<<<< HEAD
      </tr>  

=======
      </tr>

     
>>>>>>> afefe963e350a77c272b858c3203e1ec122a8d82
<?php
$sql = "SELECT * FROM orders";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    while ($purchases = $result->fetch_assoc()) {

      $name = $purchases['cust_name'];
      $email = $purchases['cust_email'];
      $address = $purchases['cust_address'];
      $orderId = $purchases['order_id'];
      $itemId = $purchases['item_id'];
      $status = $purchases['shipped'];
     // $status = $purchases['shipped'];
     $status = "Shipped";
?>
      
      <tr>
        <td><?php echo $orderId; ?></td>
        <td><?php echo $name; ?></td>
        <td><?php echo $email; ?></td>
        <td><?php echo $address; ?></td>
        <td><?php echo $itemId; ?></td>
        <td><?php echo $status ?></td>
        <td><label for="shipped">Has the Order Been Shipped?</label>
        <input type="button" value="Order Shipped" name="refresh" onclick="return RefreshWindow();"/></td>
         
      <!-- <td><?php echo $status; ?></td> -->
      </tr><?php
    }
} else {
    echo "fail";
}
?>
    </table>
  </div>

