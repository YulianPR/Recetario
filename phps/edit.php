<?php
    require 'db.php';

    $categories = $database->select("tb_recipes_category","*");
    $complex = $database->select("tb_recipes_complex","*");
    $occasion = $database->select("tb_occasion","*");

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
    <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $data[0]["recipe_name"]; ?>">
    <label for="inputGroupFile01" class="form-label">Complejidad</label>
            <select name="complex" id="">
            <?php 
                $len = count($complex);
                for($i=0; $i < $len; $i++) {
                    if($data[0]["id_recipe_complex"] == $complex[$i]['id_recipe_complex']){
                        echo '<option value="'.$complex[$i]['id_recipe_complex'].'" selected>'.$complex[$i]['recipe_complex'].'</option>';
                    }else{
                        echo '<option value="'.$complex[$i]['id_recipe_complex'].'">'.$complex[$i]['recipe_complex'].'</option>';
                    }                  
                }
            ?>
            </select>
    <label for="inputGroupFile01" class="form-label">Categoria</label>
              <select name="category" id="">
              <?php 
                $len = count($categories);
                for($i=0; $i < $len; $i++) {
                    if($data[0]["id_recipe_category"] == $categories[$i]['id_recipe_category']){
                        echo '<option value="'.$categories[$i]['id_recipe_category'].'" selected>'.$categories[$i]['recipe_category'].'</option>';
                    }else{
                        echo '<option value="'.$categories[$i]['id_recipe_category'].'">'.$categories[$i]['recipe_category'].'</option>';
                    }
                    
                }
            ?>
            </select>
    <label for="inputGroupFile01" class="form-label">Ocasión</label>
            <select name="occasion" id="">
            <?php 
                $len = count($occasion);
                for($i=0; $i < $len; $i++) {
                    if($data[0]["id_recipe_occasion"] == $occasion[$i]['id_recipe_occasion']){
                        echo '<option value="'.$occasion[$i]['id_recipe_occasion'].'" selected>'.$occasion[$i]['recipe_occasion'].'</option>';
                    }else{
                        echo '<option value="'.$occasion[$i]['id_recipe_occasion'].'">'.$occasion[$i]['recipe_occasion'].'</option>';
                    }
                    
                }
            ?>
            </select>
            <div class="mb-3">
    <label for="ingredientes" class="form-label">Ingredientes</label>
              <textarea class="form-control" id="ingredientes" name="ingredientes" rows="3"><?php echo $data[0]["recipe_ingredients"]; ?></textarea>
            </div>
            <div class="mb-3">
    <label for="preparacion" class="form-label">Preparación</label>
              <textarea class="form-control" id="preparacion" name="preparacion" rows="3"><?php echo $data[0]["recipe_preparation"]; ?></textarea>
            </div>
    <label for="time">Tiempo de Prep.</label>
    <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $data[0]["recipe_time"]; ?>">
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