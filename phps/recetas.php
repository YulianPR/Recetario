<?php
    require './db.php';

   
    $categories = $database->select("tb_recipes_category","*");

    $recipes = $database->select("tb_recipes","*");

   
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Recetas</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="/css/estilo.css">
  <link rel="stylesheet" href="/css/utils.css">


</head>

<body>

  <!--Nav Bar-->
  <?php include './header.php'; ?>
  <!-- nav menu -->

  <!--  -->
  <div class="row g-0 mt-3">
                <h3>Todas las recetas</h3>
                <?php 
                    foreach ($recipes as $recipe){
                        echo "<div class='col-3 card'><img src='../img/fotos/".$recipe["recipe_image"]."' class='card-img-top' alt='".$recipe["recipe_name"]."'><div class='card-body'><h5 class='card-title'>".$recipe["recipe_name"]."</h5><p class='card-text'>".substr($recipe["recipe_description"], 0, 100)."</p><a href='./receta.php?id=".$recipe["id_recipe"]."' class='btn btn-primary'>Ver recetas</a>
                      </div></div>";
                    }
                ?>
            </div>
  <!--  -->

  <!--Footer-->
  <?php 
  include './footer.php';
  ?>

  <script src="/js/index.js"></script>

</body>

</html>