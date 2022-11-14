<?php
    require 'db.php';

    //$data = $database->select("tb_recipes", "*");
    
    // Reference: https://medoo.in/api/select
    // Note: don't delete the [>] 
    $data= $database->select("tb_recipes",[
        "[>]tb_recipe_category"=>["id_recipe_category" => "id_recipe_category"]
    ],[
        "tb_recipes.id_recipe",
        "tb_recipes.recipe_name",
        "tb_recipes.recipe_time",
        "tb_recipes.recipe_image",
        "tb_recipe_category.recipe_category"
    ]);

    //https://pastebin.com/raw/uWE7jAqt
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .thumb{
            width:15%;
        }
    </style>
</head>
<body>
    <h1>Registered Recipes</h1>

    <table>
        <tr>
            <td>Image</td>
            <td>Recipe name</td>
            <td>Recipe Category</td>
            <td>Prep. time</td>
            <td>Options</td>
        </tr>
        <tr>

        </tr>
        <?php

            $len = count($data);
    
            for($i=0; $i<$len; $i++){
                echo "<tr>";
                echo "<td><img src='./images/".$data[$i]["recipe_image"]."' class='thumb'></td>";
                echo "<td>".$data[$i]["recipe_name"]."</td>";
                echo "<td>".$data[$i]["recipe_category"]."</td>";
                echo "<td>".$data[$i]["recipe_time"]."</td>";
                echo "<td><a href='edit.php?id=".$data[$i]["id_recipe"]."'>Edit</a> <a href='delete.php?id=".$data[$i]["id_recipe"]."'>Delete</a></td>";
                echo "</tr>";
            }
            //https://bit.ly/3TacdAZ
            //https://bit.ly/3Uia6f1

            //https://pastebin.com/raw/YpKLTgai
        ?>
    </table>
</body>
</html>