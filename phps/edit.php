<?php
    require 'db.php';

    $categories = $database->select("tb_recipes_category","*");

if(isset($_GET)){
    $data = $database->select("tb_recipes", "*", [
        "id_recipe" => $_GET["id"]
    ]);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Receta</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/estilo.css">
</head>
<body>
<?php include './header.php'; ?>    

    <h1 class="text-start">Registro de Recetas</h1>
   <form action="update.php" method="post" enctype="multipart/form-data<">

    <label for="recipe">Receta</label>
    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre de la receta">
    <label for="inputGroupFile01" class="form-label">Complejidad</label>
            <select name="" id="">
                <option value="Fácil">Fácil</option>
                <option value="Medio">Medio</option>
                <option value="Medio">Difícil</option>
            </select>
    <label for="inputGroupFile01" class="form-label">Categoria</label>
              <select name="" id="">
                <option value="Desayuno">Desayuno</option>
                <option value="Almuerzo">Almuerzo</option>
                <option value="Sopas">Sopas</option>
                <option value="Bebidas">Bebidas</option>
                <option value="Postres">Postres</option>
            </select>
    <label for="inputGroupFile01" class="form-label">Ocasión</label>
            <select name="" id="">
                <option value="Cumpleaños">Cumpleaños</option>
                <option value="Día del padre">Día del padre</option>
                <option value="Día de la madre">Día de la madre</option>
                <option value="Día del niño">Día del niño</option>
                <option value="Navidad">Navidad</option>
                <option value="Semana Santa">Semana Santa</option>
                <option value="Verano">Verano</option>
            </select>
    <label for="ingredientes" class="form-label">Ingredientes</label>
              <textarea class="form-control" id="ingredientes" name="ingredientes" rows="3"></textarea>
            </div>
            <div class="mb-3">
    <label for="preparacion" class="form-label">Preparación</label>
              <textarea class="form-control" id="preparacion" name="preparacion" rows="3"></textarea>
            </div>
    <label for="time">Tiempo de Prep.</label>
    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Tiempo de Preparación">
    <br>

    <label for="recipe_image">Imagen principal</label>
    <input type="file" class="form-control" id="imagen" name="imagen">

    <input type="hidden" name="id" value="<?php echo $data[0]["id_recipe"]; ?>">
    <button type="submit" class="btn btn-primary">Editar</button>
   </form>
   <script>
        function readURL(input) {
            if(input.files && input.files[0]){
                let reader = new FileReader();

                reader.onload = function(e) {
                    let preview = document.getElementById('preview').
                    setAttribute('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

    </script>
</body>
</html>