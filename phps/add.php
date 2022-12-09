<?php
    require 'db.php';

    $data = $database->select("tb_recipes","*");
    //verificar los envíos de formularios
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $nombre = $_POST['nombre'];
        $complejidad = $_POST['complejidad'];
        $categoria = $_POST['categoria'];
        $ocasion = $_POST['ocasion'];
        $ingredientes = $_POST['ingredientes'];
        $preparacion = $_POST['preparacion'];
        $descripcion = $_POST['descripcion'];
        $imagen = "recipe-placeholder.png";

        $database->insert("tb_recipes",[
            "recipe_name"=>$nombre,
            "id_recipe_complex"=>$complejidad,
            "id_recipe_category"=>$categoria,
            "id_recipe_occasion"=>$ocasion,
            "recipe_ingredients"=>$ingredientes,
            "recipe_preparation"=>$preparacion,
            "recipe_description"=>$descripcion,
            "recipe_image"=>$imagen
        ]);
        header("location: registro-recetas.php");
    }
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

    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <h1 class="text-start">Registro de Recetas</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <form action="add.php" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
              <label for="nombre" class="form-label">Nombre de la receta</label>
              <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre de la receta">
            </div>
            <div class="mb-3">
              <label for="inputGroupFile01" class="form-label">Complejidad</label>
              <select name="complejidad" id="complejidad">
                <option value="1">Fácil</option>
                <option value="2">Medio</option>
                <option value="3">Difícil</option>
                <option value="4">Avanzado</option>
            </select>
            </div>
            <div class="mb-3">
              <label for="inputGroupFile01" class="form-label">Categoria</label>
              <select name="categoria" id="categoria">
                <option value="1">breakfast</option>
                <option value="2">Lunch</option>
                <option value="3">Soups</option>
                <option value="4">Drinks</option>
                <option value="5">Desserts</option>
                <option value="6">Entrees</option>
            </select>
            </div>
            <div class="mb-3">
              <label for="inputGroupFile01" class="form-label">Ocasión</label>
              <select name="ocasion" id="ocasion">
                <option value="1">Cumpleaños</option>
                <option value="2">Día del padre</option>
                <option value="3">Día de la madre</option>
                <option value="4">Día del niño</option>
                <option value="5">Navidad</option>
                <option value="6">Verano</option>
            </select>
            <div class="mb-3">
              <label for="ingredientes" class="form-label">Ingredientes</label>
              <textarea class="form-control" id="ingredientes" name="ingredientes" rows="3"></textarea>
            </div>
            <div class="mb-3">
              <label for="preparacion" class="form-label">Preparación</label>
              <textarea class="form-control" id="preparacion" name="preparacion" rows="3"></textarea>
            </div>
            <div class="mb-3">
              <label for="descripcion" class="form-label">Descripción</label>
              <textarea class="form-control" id="descripcion" name="descripcion" rows="3"></textarea>
            </div>
            <div class="mb-3">
              <label for="imagen" class="form-label">Imagen</label>
              <input type="file" class="form-control" id="imagen" name="imagen">
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
          </form>
        </div>
      </div>
    </div>
    
</body>
</html>