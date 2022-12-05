<?php
   
    require 'db.php';

    if(isset($_GET)){
        
        $data = $database->select("tb_recipes", "*", [
            "id_recipe" => $_GET["id_recipe"]
        ]);

        //echo "LIKES -> ".$data[0]["recipe_likes"];
        $likes = $data["recipes_likes"];
        $likes++;

        //echo "likes -> ".$likes;

        $database->update("tb_recipes",[
            "recipes_likes" => $likes
        ],[
            "id_recipe"=>$_GET["id_recipe"]
        ]);

        //header("location: recipes.php");
		header('Location: ' . $_SERVER['HTTP_REFERER']);
		exit;

    }
    //var_dump($data);
?>