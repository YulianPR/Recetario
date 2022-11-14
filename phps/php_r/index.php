<?php
    //comentarios
    /* comentarios de bloque */
    /*$status = true; //boolean
    $name = "string"; //string
    $val = 1234; //number*/

    require 'db.php';
    // Reference: https://medoo.in/api/select
    $data = $database->select("tb_recipe_category","*");

?>
<!-- comentario -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- https://medoo.in -->
   <form action="response.php" method="post" enctype="multipart/form-data">

    <label for="recipe">Recipe</label>
    <input type="text" name="recipe">
    <br>
    <label for="category">Category</label>
    <select name="category" id="">
        <?php 
            $len = count($data);
            for($i=0; $i < $len; $i++) {
                echo '<option value="'.$data[$i]['id_recipe_category'].'">'.$data[$i]['recipe_category'].'</option>';

            }
        ?>
    </select>
    <br>
    <label for="time">Prep. time</label>
    <input type="text" name="time">
    <br>
    
    <label for="recipe_image">Imagen principal</label>
    <img id="preview" src="./images/preview.png" width="125" height="125" alt="Preview">
    <input id="recipe_image" type="file" name="recipe_image" onchange="readURL(this)">
    <br>

    <input type="submit" value="SUBMIT">
   </form>

    <script>
        function readURL(input) {
            if(input.files && input.files[0]){
                let reader = new FileReader();

                reader.onload = function(e) {
                    let preview = document.getElementById('preview').setAttribute('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>

</body>
</html>