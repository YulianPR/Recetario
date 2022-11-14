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
  <title>Registro de Recetas</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
  
</head>

<body>
 <header class="container-fluid mb-5">
  <nav class="navbar navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Registro de Recetas</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Dark offcanvas</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Dropdown
              </a>
              <ul class="dropdown-menu dropdown-menu-dark">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>
          </ul>
          <form class="d-flex mt-3" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </div>
  </nav>
</header>
  
  <div class="container-fluid me-5">
    <table class="table table-dark">
      <h1 class="pt-5">Tabla de Recetas</h1>
      <thead class="table-dark">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Nombre</th>
          <th scope="col">complejidad</th>
          <th scope="col">Categoria</th>
          <th scope="col">Ocasión</th>
          <th scope="col">IMG</th>
          <th scope="col">Opciones</th>
          
        </tr>
      </thead>
      <form>
        <tbody>
          <tr>
            <th scope="row">1</th>
            
            <td>Pollo</td>
            <td>Media</td>
            <td>Desayuno</td>
            <td>Cumpleaños</td>
            <td>img</td>
            <td>@/@</td>
            
          </tr>
          <tr>
            <th scope="row">2</th>
            
            <td>Hanbusguesa</td>
            <td>Alta</td>
            <td>Desayuno</td>
            <td>Navidad</td>
            <td>img</td>
            <td>@/@</td>
           
          </tr>
          <tr>
            <th scope="row">3</th>
            
            <td>Pasta</td>
            <td>Media</td>
            <td>Desayuno</td>
            <td>Halloween</td>
            <td>img</td>
            <td>@/@</td>
          
            </td>
          </tr>
        </tbody>
      </form>
    </table>
  </div>
  

    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <h1 class="text-start">Registro de Recetas</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <form action="registro-recetas.html" method="POST">
            <div class="mb-3">
              <label for="nombre" class="form-label">Nombre de la receta</label>
              <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre de la receta">
            </div>
            <div class="mb-3">
              <label for="inputGroupFile01" class="form-label">Complejidad</label>
              <select name="" id="">
                <option value="Fácil">Fácil</option>
                <option value="Medio">Medio</option>
                <option value="Medio">Difícil</option>
            </select>
            </div>
            <div class="mb-3">
              <label for="inputGroupFile01" class="form-label">Categoria</label>
              <select name="" id="">
                <option value="Desayuno">Desayuno</option>
                <option value="Almuerzo">Almuerzo</option>
                <option value="Sopas">Sopas</option>
                <option value="Bebidas">Bebidas</option>
                <option value="Postres">Postres</option>
            </select>
            </div>
            <div class="mb-3">
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
            </div>
            <div class="mb-3">
              <label for="inputGroupFile01" class="form-label">dificultad</label>
              <select name="" id="">
                <option value="Cumpleaños">Fáci</option>
                <option value="Día del padre">Medio</option>
                <option value="Día de la madre">Día de la madre</option>
                <option value="Día del niño">Día del niño</option>
                <option value="Navidad">Navidad</option>
                <option value="Semana Santa">Semana Santa</option>
                <option value="Verano">Verano</option>
            </select>
            </div>
            <div class="mb-3">
              <label for="ingredientes" class="form-label">Ingredientes</label>
              <textarea class="form-control" id="ingredientes" name="ingredientes" rows="3"></textarea>
            </div>
            <div class="mb-3">
              <label for="preparacion" class="form-label">Preparación</label>
              <textarea class="form-control" id="preparacion" name="preparacion" rows="3"></textarea>
            </div>
            <div class="mb-3">
              <label for="imagen" class="form-label">Imagen</label>
              <input type="file" class="form-control" id="imagen" name="imagen">
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
          </form>
        </div>
      </div>
    </div>

  

</body>

</html>