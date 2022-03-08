<?php 
       $mysqli = new mysqli('localhost', 'root', '123','Database_e-commerce');
       $result = $mysqli->query(" SELECT * FROM  `customers` ");

 ?>

<table id='produit' class="table table-dark table-striped">
  <thead>

    <tr style='color : #333;'>
      <th scope="col">#</th>
      <th scope="col">lastName</th>
      <th scope="col">firstName</th>
      <th scope="col">adress</th>
      <th scope="col">phone</th>
      <th scope="col">email</th>
      <th scope="col">password</th>

    </tr>
  </thead>




  <tbody>
    <?php while ($row = $result->fetch_assoc()): ?>
    <tr>
      <th scope="row"><?php echo $row['customerCode']; ?></th>
      <td><?php echo $row['lastName']; ?></td>
      <td><?php echo $row['firstName']; ?></td>
      <td><?php echo $row['adress']; ?></td>
      <td><?php echo $row['phone']; ?></td>
      <td><?php echo $row['email']; ?></td>
      <td><?php echo $row['password']; ?></td>
    </tr>
    <?php endwhile?>
  </tbody>
</table>