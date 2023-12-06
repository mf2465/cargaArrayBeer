<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  
    <title>Cervecería Brightown</title>
</head>

<body>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<div class="container">

<div> 
<h1>Cervezas en Promoción</h1>
</div>

<?php 

require 'promo.php';

foreach ( promo_productos() as $promo ) {

?>

<div class="container">
<div class="card text-center" style="width: 18rem;">
    <?php echo '<img src="' . $promo['imagen'] . '" class="card-img-top d-flex align-items-center"">'; ?>
        <div class="card-body">
            <h4 class="card-title"><?php echo $promo['nombre']?></h4>
            <p class="card-text"><?php echo $promo['descripción']?></p>
            <h5 class="card-title"><?php echo '$ '.$promo['precio']?></h5>
            <a href="#" id = "boton" class="btn btn-warning">agregar al Carrito</a>
        </div>
    </div>
    </div>
    <?php
}

?>
</div>
</body>
</html>
