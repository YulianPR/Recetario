<?php
   
    require 'db.php';

    $categories = $database->select("tb_recipe_category","*");

    if(isset($_GET)){
        $data = $database->select("tb_recipes", "*", [
            "id_recipe" => $_GET["id"]
        ]);
    }
    //var_dump($data);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Edit Recipe</h1>
    <form action="update.php" method="post" enctype="multipart/form-data">

        <label for="recipe">Recipe</label>
        <input type="text" name="recipe" value="<?php echo $data[0]["recipe_name"]; ?>">
        <br>
        <label for="category">Category</label>
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
        <br>
        <label for="time">Prep. time</label>
        <input type="text" name="time" value="<?php echo $data[0]["recipe_time"]; ?>">
        <br>

        <label for="recipe_image">Imagen principal</label>
        <img id="preview" src="./images/<?php echo $data[0]["recipe_image"]; ?>" width="125" height="125" alt="Preview">
        <input id="recipe_image" type="file" name="recipe_image" onchange="readURL(this)">
        <br>
        <input type="hidden" name="id" value="<?php echo $data[0]["id_recipe"]; ?>">
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