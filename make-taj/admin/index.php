
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Ecom</title>
  <link rel="stylesheet" href="style.css">
  <!-- bootsterp -->

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<!-- jquery -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body >

   <img src="Background.png" id='Brn' alt="">

  <!---------------------------- Navbar-------------------------------------->
  
  
  
  
  
  
  
  
  
  
  <nav>
  
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

       <div class=" container-fluid">
    <!-- <img class="navbar-brand" src="MakeTAJ.svg" alt=""> -->
    <div  class="container fixed-top mt-3"style="  text-decoration: none; display: flex;flex-direction: row; justify-content: space-around;">
    <a type="button" class=' btn btn-secondary ' href="#produit" >Produits</a>
    <a type="button" class=' btn btn-secondary ' href="#client">Clients</a>
    <a type="button" class=' btn btn-secondary ' href='#commande' >Commandes</a>
</div>

  </div>

  </nav> 
  <div  class='ll'></div>

 
<!-------------------------------Table de produit---------------------------------------->





<div id='produit' class='l'></div>
<div class='container'>
  <h1 class="text-center mt-5 mb-5 ">Liste de produit</h1>

  <?php include 'products/index-products.php' ?>

</div>
<div  class='ll'></div>

<!-------------------------------Table de client---------------------------------------->
<div id='client' class='l'></div>
<div class='container'>
  <h1 class="text-center mt-5">Liste des clients</h1>
  <?php include 'customers/index-customers.php' ?>
</div>
<div  class='ll'></div>
<!-------------------------------Table de commande---------------------------------------->
<div id='commande' class='l'></div>
<div  class='container'>
  <h1 class="text-center mt-5">Liste des commandes</h1>
<table  class="table table-bordered mt-5">
  <thead>
    <tr>
      <th scope="col">Commande ID</th>
      <th scope="col">Code client</th>
      <th scope="col">Date de commande</th>
      <th scope="col">Adresse de livraison</th>
    </tr>
    
  </thead>
  <tbody>
    
  </tbody>
</table>
</div>
<div class='ll'></div>
</body>
</html>