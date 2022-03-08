<?php 
       $mysqli = new mysqli('localhost', 'root', '123','Database_e-commerce');
       $result = $mysqli->query(" SELECT * FROM  `orders` ");

 ?>

<table id='produit' class="table table-dark table-striped">
  <thead>

    <tr style='color : #333;'>
      <th scope="col">#</th>
      <th scope="col">customerName Code</th>
      <th scope="col">order Date</th>
      <th scope="col">delivery Address</th>

    </tr>
  </thead>
  <tbody>
    <?php while ($row = $result->fetch_assoc()): ?>
    <tr>

      <td><?php echo $row['orderID']; ?></td>
      <td><?php echo $row['customerCode']; ?></td>
      <td><?php echo $row['orderDate']; ?></td>
      <td><?php echo $row['deliveryAddress']; ?></td>
    </tr>
    <?php endwhile?>
  </tbody>
</table>