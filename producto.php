<?php
session_start();
 ?>


<?php
require("constructor.php");
//pido el constructor
$NewConn = new ConnecionMySQL();
//creo el objeto
$NewConn->CreateConnection();
//creo la conecxion
$id = $_GET['id'];
//guardo en una variable la id que me envio a traves del link que arme en los botones de los productos en el index
$sql="SELECT * FROM productos WHERE id = $id";
//armo la consulta
$result = $NewConn->ExecuteQuery($sql);
//la ejecuto
if($result){
    
$producto = $NewConn->GetArray($result);
//hago el fetch_array
?>

<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Producto</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styleContacto.css" rel="stylesheet" />

    </head>
    <body>
  
        <!-- Header-->
        <header class="py-5" style="background-image: url(img/bg1.jpg); background-size: cover;">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <img src="img/logo.png" alt="logo" style="height: 300px; width: 370px;">
                    <h1 class="lead fw-normal text-white bold mb-0">Calzado con calidad superior</h1>
                </div>
            </div>
        </header>
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: rgb(96, 22, 22); font-size: x-large; font-weight: bold;">
            <div class="container px-4 px-lg-5">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="sobrenosotros.php">Sobre nosotros</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" id="navbarDropdown" href="contacto.php">Contacto</a>
                        </li>
                        <li class="nav-item dropdown">
                        <?php
                            if(!isset($_SESSION)){
                                ?>
                                <a class="nav-link" id="navbarDropdown1" href="login.html ">Login</a>
                                <?php
                            }
                            if(isset($_SESSION)){
                                ?>
                                <a class="nav-link" id="navbarDropdown1" href="deslogueo.php">Desloguear</a>
                                <?php
                            }
                            ?>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <section class="py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="row gx-4 gx-lg-5 align-items-center">
                    <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="img/<?php
                        echo $producto['img']
                        ?>" alt="..." /></div>
                    <div class="col-md-6">
                        <h1 class="display-5 fw-bolder"><?php
                        echo $producto['producto']
                        ?></h1>
                        <div class="fs-5 mb-5">
                            <h1><?php
                        echo $producto['precio']
                        ?></h1>
                        </div>
                        <h3 class="lead"><?php
                        echo $producto['descripcion']
                        ?></h3>
                        <div class="d-flex">
                            <input class="form-control text-center me-3" id="inputQuantity" type="num" value="1" style="max-width: 3rem" />
                            <button class="btn btn-outline-dark flex-shrink-0" type="button">
                                Comprar
                            </button>
                            <button class="btn btn-outline-dark flex-shrink-0" type="button"><a href="index.html">Volver</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Clase Conrado 2022</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>

<?php

}else{
    echo "<h3>Error generando la consulta</h3>";
}

?>

