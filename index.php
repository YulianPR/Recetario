<?php
require './phps/db.php';

$data = $database->select("tb_recipes", [
  "[>]tb_recipes_category" => ["recipe_category_id" => "id_recipe_category"]
], [
  "tb_recipes.id_recipe",
  "tb_recipes.recipe_name",
  "tb_recipes.recipe_time",
  "tb_recipes.recipe_image",
  "tb_recipes.recipes_likes",
  "tb_recipes_category.recipe_category",
  "tb_recipes_category.id_recipe_category",
]);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Recetario</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;600&family=Silkscreen:wght@400;700&display=swap" rel="stylesheet">


  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">

  <link rel="stylesheet" href="./css/estilo.css">

</head>

<body>


 
  <?php 
  include './phps/header.php';
  ?>
  <!-- nav menu -->
  <!-- seccion de recetas en carrusel -->

  <div id="food-carousel" class="carousel slide mt-2 " data-bs-ride="false" data-bs-interval="false">
    <h3 class="text-start" id="seccion-recetas">Recetas</h3>
    <div class="carousel-indicators">
      <!-- por cada $data como $index retorne $value -->
      <?php foreach ($data as $index => $value) : ?>
        <button type="button" data-bs-target="#food-carousel" data-bs-slide-to="<?php echo $index ?>" class="<?php echo $index == 0 ? 'active' : '' ?>" aria-current="<?php echo $index == 0 ? 'true' : 'false' ?>" aria-label="Slide <?php echo $index + 1 ?>">
        </button>
      <?php endforeach; ?>
    </div>
    <div class="carousel-inner">
      <!-- por cada $data como $index retorne $recipe -->
      <?php foreach ($data as $index => $recipe) : ?>
        <div class="carousel-item <?php echo $index == 0 ? 'active' : '' ?>">
        <a href="<?php echo "./phps/receta.php?id=".$recipe["id_recipe"] ?>">
        <img src="<?php echo "./img/fotos/" . $recipe["recipe_image"] ?>" class="d-block img-photo" alt="<?php echo $recipe["recipe_name"] ?>">  
        </a>      
          <div class="carousel-caption d-md-block">
            <h6><?php echo $recipe["recipe_name"] ?></h6>
            <p><?php echo "Me gusta: " . $recipe["recipes_likes"] ?></p>
          </div>       
        </div>

      <?php endforeach; ?>

    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#food-carousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#food-carousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!-- carrusel -->
  <section class="container">
    <!-- Categorias -->
    <div id="recipes-carousel" class="carousel multiple-item-carousel" data-bs-ride="false" data-bs-interval="false">
      <h3 class="text-start" id="seccion-categorias">Categorias</h3>
      <div class="carousel-inner">
        <div class="carousel-item active">
        <a href="./phps/recetas.php">
          <img src="./img/Desayuno.jpg" class="img-fluid img-photo" alt="Desayuno">
          <h5>Desayuno</h5>
          </a> 
        </div>
        <div class="carousel-item ">
        <a href="./phps/recetas.php">
          <img src="./img/Merienda.jpg" class="img-fluid img-photo" alt="Merienda">
          <h5>Bebidas</h5>
          </a>
        </div>
        <div class="carousel-item">
        <a href="./phps/recetas.php">
          <img src="./img/Almuerzo.jpg" class="img-fluid img-photo" alt="Almuerzo">
          <h5>Almuerzo</h5>
          </a>
        </div>
        <div class="carousel-item">
        <a href="./phps/recetas.php">
          <img src="./img/Cena.jpg" class="img-fluid img-photo" alt="Cena">
          <h5>Postres</h5>
          </a>
        </div>
        <div class="carousel-item ">
        <a href="./phps/recetas.php">
          <img src="./img/Merienda.jpg" class="img-fluid img-photo" alt="Merienda">
          <h5>Sopas</h5>
          </a>
        </div>
        <div class="carousel-item">
        <a href="./phps/recetas.php">
          <img src="./img/Almuerzo.jpg" class="img-fluid img-photo" alt="Almuerzo">
          <h5>Entradas</h5>
          </a>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#recipes-carousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#recipes-carousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <!-- Categorias -->

    <!-- Ocaciones -->
    <div id="category-carousel" class="carousel multiple-item-carousel" data-bs-ride="false" data-bs-interval="false" data-bs-pause="true">
      <h3 class="text-start" id="seccion-tips">Ocasiones</h3>
      <div class="carousel-inner">
        
        <div class="carousel-item active">
          <a href="./phps/recetas.php">
          <img src="./img/Navidad.jpg" class="img-fluid img-photo" alt="">
          <h4>Cumpleaños</h4>
          </a>        
        </div>
        <div class="carousel-item ">
          <a href="./phps/recetas.php"> 
          <img src="./img/Holloween.jpg" class="img-fluid img-photo" alt="">
          <h4>Día del padre</h4>
          </a>
        </div>
        <div class="carousel-item">
          <a href="./phps/recetas.php">
          <img src="./img/Cumple.jpg" class="img-fluid img-photo" alt="">
          <h4>Día de la madre</h4>
          </a>
        </div>
        <div class="carousel-item ">
          <a href="./phps/recetas.php">
          <img src="./img/Holloween.jpg" class="img-fluid img-photo" alt="">
          <h4>Día del niño</h4>
          </a>
        </div>
        <div class="carousel-item">
          <a href="./phps/recetas.php">
          <img src="./img/Cumple.jpg" class="img-fluid img-photo" alt="">
          <h4>Navidad</h4>
          </a>
        </div>
        <div class="carousel-item">
          <a href="./phps/recetas.php">
          <img src="./img/Navidad.jpg" class="img-fluid img-photo" alt="">
          <h4>Navidad</h4>
          </a>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#category-carousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#category-carousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <!-- Ocaciones -->
  </section>

  <!-- Footer -->
  <?php 
    include_once './phps/footer.php';
  ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

  <script src="./js/index.js"></script>

</body>

</html>