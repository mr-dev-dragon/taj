
        
              <?php 
                if (isset($_SESSION['message'])): ?>
                <div class="alert mx-auto alert-<?=$_SESSION['msg_type'] ?>">
                    <?php 
                    echo $_SESSION['message'];
                    unset($_SESSION['message']); 
                    ?>
                </div>
                <?php endif  ?>
        <?php 
       $mysqli = new mysqli('localhost', 'root', '','Database_e-commerce');
       $result = $mysqli->query(" SELECT * FROM  `customers` ");

 ?>

       <table  id='produit' class="table table-striped table-hover">
          <thead>

              <tr>
                <th scope="col">#</th>
                  <th scope="col">lastName</th>
                    <th scope="col">firstName</th>
                      <th scope="col">adress</th>
                        <th scope="col">phone</th>
                        <th scope="col">email</th>
                           <th scope="col">password</th>
                                <th scope="col" colspan="2">action</th>
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
                                       <td> <a id="delete" onclick="sure();" class="btn btn-secondary">Delte</a>
                                                              </td>
                                               
                                                        <script >
                                                          function sure(){
                                                                  const swalWithBootstrapButtons = Swal.mixin({
                                                                  customClass: {
                                                                    confirmButton: 'btn btn-success',
                                                                    cancelButton: 'btn btn-danger'
                                                                  },
                                                                  buttonsStyling: false
                                                                })
                                                                swalWithBootstrapButtons.fire({
                                                                  title: 'Are you sure?',
                                                                  text: "You won't be able to revert this!",
                                                                  icon: 'warning',
                                                                  showCancelButton: true,
                                                                  confirmButtonText: 'Yes, delete it!',
                                                                  cancelButtonText: 'No, cancel!',
                                                                  reverseButtons: true
                                                                }).then((result) => {
                                                                  if (result.isConfirmed) {
                                                                    swalWithBootstrapButtons.fire(
                                                                      'Deleted!',
                                                                      'Your file has been deleted.',
                                                                      'success',
                                                                    )
                                                                      
                                                                      window.location ="index.php?delete=<?php echo $row['ustomerCode']?>#client";
                                                                  } else if (
                                                                    /* Read more about handling dismissals below */
                                                                    result.dismiss === Swal.DismissReason.cancel
                                                                  ) {
                                                                    swalWithBootstrapButtons.fire(
                                                                      'Cancelled',
                                                                      'Your imaginary file is safe :)',
                                                                      'error'
                                                                    )
                                                                  }
                                                                })
                                                              }
                                                          
                                                        </script>
                                                      
                                                         
                                                            </tr>
                                                            <?php endwhile?>
                                                          </tbody>
                                                        </table>

     

        
