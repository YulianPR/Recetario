<?php

require './db.php';

$id = $_GET['id'];
$recipe = $database->get("tb_recipes", [
  "[>]tb_recipes_category" => ["id_recipe_category" => "id_recipe_category"], 
  "[>]tb_recipes_complex" => ["id_recipe_complex" => "id_recipe_complex"]
], [
  "tb_recipes.id_recipe",
  "tb_recipes.recipe_name",
  "tb_recipes.recipe_time",
  "tb_recipes.recipe_time_preparation",
  "tb_recipes.recipe_time_cooking",
  "tb_recipes.recipe_image",
  "tb_recipes.recipe_description",
  "tb_recipes.recipes_likes",
  "tb_recipes_category.recipe_category",
  "tb_recipes_category.id_recipe_category",
  'tb_recipes_complex.recipe_complex',
  "tb_recipes.recipe_ingredients",
  "tb_recipes.recipe_preparation",
], [
  "tb_recipes.id_recipe" => $id,
]);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Receta</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="/css/estilo.css">
  <link rel="stylesheet" href="/css/utils.css">


</head>

<body>


  <!--Nav Bar-->
  <?php include './header.php'; ?>
  <!-- nav menu -->



  <!--Nav Bar-->
  <!--Datos de la receta-->
  <section class="container bg-green inner-bg-conf mt-5">
    <section class="row">
      <section class="col-4 m-5">
        <img src="/img/fotos/<?php
                              echo $recipe['recipe_image'];
                              ?>" class="img-fluid curved ml-5" alt=" <?php
                                                                      echo $recipe['recipe_name'];
                                                                      ?>">
      </section>
      <section class="col row">
        <h1 class="text-start-0 mt-4 pt-5"><?php
                                            echo $recipe['recipe_name'];
                                            ?></h1>
        <section class="col">
          <p>Tiempo de preparación: <?php
                                    echo $recipe['recipe_time_preparation'];
                                    ?></p>
          <p>Tiempo de Cocción: <?php
                                echo $recipe['recipe_time_cooking'];
                                ?></p>
          <p>Tiempo Total: <?php
                            echo $recipe['recipe_time'];
                            ?></p>
        </section>
        <section class="col pt-5">
          <a type="button" href="likes.php?id_recipe=<?php echo $recipe["id_recipe"]; ?>" class="btn btn-primary">
            <p>
              <?php
              echo "Me gusta: " . $recipe["recipes_likes"]
              ?></p>
          </a>
          <p>Dificultad: <?php
                          echo $recipe['recipe_complex'];
                          ?> </p>
        </section>
      </section>
    </section>
  </section>
  <!--Datos de la receta-->

  <!--Descripción-->

  <section class="container bg-yellow inner-bg-conf mt-5">
    <h2 class="text-center">Descripción</h2>
    <p> <?php
        echo $recipe['recipe_description'];
        ?></p>
  </section>
  <!--Descripción-->
  <!--Ingredientes y Preparación-->
  <section class="container">
    <section class="row">
      <section class="col bg-yellow inner-bg-conf ma-3 pa-3">
        <h2 class="text-center">Ingredientes</h2>
        <p> <?php
            echo $recipe['recipe_ingredients'];
            ?></p>
      </section>
      <section class="col bg-yellow inner-bg-conf ma-3 pa-3">
        <h2 class="text-center">Preparación</h2>
        <p> <?php
            echo $recipe['recipe_preparation'];
            ?></p>
      </section>
    </section>
  </section>
  <!--Ingredientes y Preparación-->
  <!--Footer-->





  <?php
  include './footer.php';
  ?>

  <script src="/js/index.js"></script>

</body>

</html>