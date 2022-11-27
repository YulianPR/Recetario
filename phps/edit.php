<?php 
   require 'db.php';

   $data= $database->select("tb_recipes",[
    "[>]tb_recipes_category"=>["id_recipe_category" => "id_recipe_category"]
],[
    "tb_recipes.id_recipe",
    "tb_recipes.recipe_name",
    "tb_recipes.recipe_time",
    "tb_recipes_category.recipe_category"
]);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>
<body>
    
    <h1>Editar Receta</h1>
   <form action="update.php" method="post" enctype="multipart/form-data<">

    <label for="recipe">Recipe</label>
    <input type="text" name="recipe" value="<?php echo $data[0]["recipe_name"]; ?>">
    <label for="inputGroupFile01" class="form-label">Categoria</label>
        <select name="" id="">
            <option value="Desayuno">Desayuno</option>
            <option value="Almuerzo">Almuerzo</option>
            <option value="Sopas">Sopas</option>
            <option value="Bebidas">Bebidas</option>
            <option value="Postres">Postres</option>
        </select>
    <label for="time">Prep. time</label>
    <input type="text" name="time" value="<?php echo $data[0]["recipe_time"]; ?>">
    <br>

    <label for="recipe_image">Imagen principal</label>
    <img id="preview" src="./images/<?php echo $data[0]["recipe_image"]; ?>">

    <input type="hidden" name="id" value="<?php echo $data[0]["id_recipe"]; ?>">
    <input type="hidden" name="id" value="<?php echo $data[0]["id_recipe"]; ?>">
    <input type="submit" value="SUBMIT">
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