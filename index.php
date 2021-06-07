<?php
if (!isset($_COOKIE['usuario'])) {
    header("Location:login.php");
}
require_once './config.php';
$usuario = new Usuarios();
$usuario->setEmail($_COOKIE['usuario']);
$dados = $usuario->dados();
?>
<!doctype html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <title>Grupos blabla</title>
        <!-- Bootstrap core CSS -->
        <link href="./css/bootstrap.min.css" rel="stylesheet">
        <link href="css/icofont.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/estilo.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <header class="header-principal fixed-top">
            <div class="container-lg">
                <div class="row pt-3">
                    <div class="col-3">
                        <a href="posts" class="menu-link icofont-home"></a>
                    </div>
                    <div class="col-3">
                        <a href="" class="menu-link activo icofont-users-social"></a>
                    </div>
                    <div class="col-3 t">
                        <a href="" class="menu-link icofont-search-2 "></a>
                    </div>
                    <div class="col-3 text-center">
                        <a href="sair.php" class="menu-link  icofont-logout "></a>
                    </div>
                </div>
            </div>
        </header>
        <main class="container pt-5">
            <div class="my-3 p-3 bg-white rounded shadow-sm">
                <h6 class="border-bottom border-gray pb-2 mb-0">Grupos</h6>
                <div class="grupos"></div>

            </div>
        </main>
        <div class="fixed-bottom text-right p-5">
            <div class="container"><div class="row">
                    <div class="col-10"></div>
                    <div class="col-2"><a href="novogrupo.php" class="btnmias icofont-plus" title="Cria Grupo"></a></div>
                </div> 
            </div>
            <script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
            <script src="js/script.js" type="text/javascript"></script>
    </body>
</html>
