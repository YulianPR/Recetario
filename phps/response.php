<?php

    require 'db.php';

    function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    if(isset($_GET)){
        $data = $database->select("tb_recipes", "*", [
            "id_recipe" => $_POST["id"]
        ]);
    }

    if($_FILES["recipe_name"]["name"] == ""){
        echo "no hay archivos";
        $img = $data[0]["recipe_image"];
    }else{
        echo "archivos";
        if(isset($_POST)){
    
            if(isset($_FILES["imagen"])){
                $errors = array();
                $file_name = $_FILES["imagen"]["name"];
                $file_size = $_FILES["imagen"]["size"];
                $file_tmp = $_FILES["imagen"]["tmp_name"];
                $file_type = $_FILES["imagen"]["type"];
                $file_ext_arr = explode(".", $_FILES["imagen"]["name"]);
    
                $file_ext = end($file_ext_arr);
                $img_ext = array("jpeg", "png", "jpg", "gif");
    
                if(!in_array($file_ext, $img_ext)){
                    $errors[] = "Archivo no soportado";
                }
    
                if(empty($errors)){
                    $img = "recipe-upload-".generateRandomString().".".$file_ext;
                    move_uploaded_file($file_tmp, "images/".$img);
                }
            }
        }
    }

    echo "IMAGE ->".$img;
    
    $database-> update ("tb_recipes",[
        "recipe_name" => $_POST["nombre"],
        "recipe_complex_id" => $_POST["complejidad"],
        "recipe_category_id" => $_POST["categoria"],
        "recipe_ingredients" => $_POST["ingredientes"],
        "recipe_time_preparation" => $_POST["preparacion"],
        "recipe_image" => $img
    ]);        
    header("location: registro-recetas.php")
    
?>