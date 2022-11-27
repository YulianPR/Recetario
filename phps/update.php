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

        if(isset($_FILES["recipe_image"])){
            $errors = array();
            $file_name = $_FILES["recipe_image"]["name"];
            $file_size = $_FILES["recipe_image"]["size"];
            $file_tmp = $_FILES["recipe_image"]["tmp_name"];
            $file_type = $_FILES["recipe_image"]["type"];
            $file_ext_arr = explode(".", $_FILES["recipe_image"]["name"]);

            $file_ext = end($file_ext_arr);
            $img_ext = array("jpeg", "png", "jpg", "gif");

            if(!in_array($file_ext, $img_ext)){
                $errors[] = "File type is not supported";
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
        "recipe_name"=>$_POST["recipe"],
        "recipe_category"=>$_POST["category"],
        "recipe_time"=>$_POST["time"]
        ],[
        "id_recipe"=>$_POST["id"]
        ]);
    header("location: registro-recetas.php")

?>