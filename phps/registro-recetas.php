<?php
require 'db.php';
 

$recipes = $database->select("tb_recipes", [
  "[><]tb_recipes_category" => ["id_recipe_category" => "id_recipe_category"],
  "[><]tb_recipes_complex" => ["id_recipe_complex" => "id_recipe_complex"],
  "[><]tb_occasion" => ["id_recipe_occasion" => "id_recipe_occasion"]
], [
  "tb_recipes.id_recipe",
  "tb_recipes.recipe_name",
  "tb_recipes.recipe_time",
  "tb_recipes.recipe_image",
  "tb_recipes_category.recipe_category",
  "tb_recipes_complex.recipe_complex",
  "tb_occasion.recipe_occasion",
],

[
  "ORDER" => ["tb_recipes.id_recipe" => "DESC"]
]);

//https://stackoverflow.com/questions/66573776/use-order-with-medoo

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registro de Recetas</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="/css/estilo.css">
</head>

<body>
  <?php include './header.php'; ?>
  <!-- img -->
  <div class="container-fluid me-5">
    <table class="table table-dark">
      <h1 class="pt-5">Tabla de Recetas</h1>
      <thead class="table-dark">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Nombre</th>
          <th scope="col">complejidad</th>
          <th scope="col">Categoria</th>
          <th scope="col">Ocasión</th>
          <th scope="col">IMG</th>
          <th scope="col">Opciones</th>

        </tr>
      </thead>
      <form>
        <tbody>

          <?php
         foreach ($recipes as $recipe) {
            echo "<tr>
            <td>" . $recipe["id_recipe"] . "</td>
            <td>" . $recipe["recipe_name"] . "</td>
            <td>" . $recipe["recipe_complex"] . "</td>
            <td>" . $recipe["recipe_category"] . "</td>
            <td>" . $recipe["recipe_occasion"] . "</td>
            <td>" . $recipe["recipe_image"] . "</td>
            <td><a href='edit.php?id=" . $recipe["id_recipe"] . "'>Edit</a>/<a href='delete.php?id=" . $recipe["id_recipe"] . "'>Delete</a></td>
            </tr>";
          }
          ?>

          <!-- <tr>
            <td>1</td>
            <td>Pollo</td>
            <td>Media</td>
            <td>Desayuno</td>
            <td>Cumpleaños</td>
            <td>img</td>
            <td><a href='edit.php?id=".$data[$i]["id_recipe"]."'>Edit</a>/<a href='delete.php?id=".$data[$i]["id_recipe"]."'>Delete</a></td>

          </tr>
          <tr>
            <td>1</td>
            <td>Hanbusguesa</td>
            <td>Alta</td>
            <td>Desayuno</td>
            <td>Navidad</td>
            <td>img</td>
            <td><a href='edit.php?id=".$data[$i]["id_recipe"]."'>Edit</a>/<a href='delete.php?id=".$data[$i]["id_recipe"]."'>Delete</a></td>

          </tr>
          <tr>
            <td>1</td>
            <td>Pasta</td>
            <td>Media</td>
            <td>Desayuno</td>
            <td>Halloween</td>
            <td>img</td>
            <td><a href='edit.php?id=".$data[$i]["id_recipe"]."'>Edit</a>/<a href='delete.php?id=".$data[$i]["id_recipe"]."'>Delete</a></td>

            </td>
          </tr> -->
        </tbody>
      </form>
    </table>
  </div>
  <a href='add.php'>Agregar</a>
</body>

</html>