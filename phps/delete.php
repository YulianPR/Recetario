<?php 

require 'db.php';
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
    <title>Document</title>
</head>
<body>
    <h2> Seguro que quieres eliminar la receta?</h2>
    <form action="remove.php" method="post">
        <input type="submit" value="SI">
        <input type="button" value="CANCELAR" onlick="history.back();">
        <input type="hidden" name="id" value="<?php echo $data[0]["id_recipe"]; ?>">
        
    </form>
    
</body>
</html>