<?php
if(!isset($_COOKIE['usuario'])) {
    header("Location:login.php");
}

require_once './config.php';
$usuario=new Usuarios();
$grupos=new Grupos();
$grupos->setId($_GET['grupo']);
$usuario->setEmail($_COOKIE['usuario']);
$dados=$usuario->dados();
$grupo=$grupos->grupo();
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title><?=$grupo['nome']?></title>
        <!-- Bootstrap core CSS -->
        <link href="./css/bootstrap.min.css" rel="stylesheet">
        <link href="css/icofont.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/estilo.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <i id="para"><?=$_GET['grupo']?></i>
        <header class="header-principal fixed-top bg-primary ">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-1"></div>
                    <div class="col-3 p-4 titlo">
                        <a href="index.php" class="icofont-bubble-left "></a>
                    </div>
                    <div class="col-8 text-left  p-3  titlo">
                        <span class="h5"><?=$grupo['nome']?></span>
                    </div>
                </div>
            </div>
        </header>
        <main class="container-fluid ">
            <div class="row">
                <div class="col-md-2"></div> 
                <div class="col-md-8 ">
                    <br>
                    <div class="messagens-box">
                        <div class="messagens">
                        
                    </div>
                    </div>
                    
                </div> 
            </div>
        </main>
        <footer class="fixed-bottom ">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-2"></div> 
                    <div class="col-md-8">
                        <form method="post" action="sumit.php" class="form-chat shadow-sm p-4 pt-4 ">
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="text"  name="texto" id="mg" class="form-control input-lg" required />
                                    <button type="submit" name="btnenviar" class="btn btn-primary icofont-location-arrow Enviar" id="btenviar"></button>
                                    <input type="text" name="para"  value="<?=$_GET['grupo']?>" class="hide">
                                    <input type="text" name="de" value="<?=$dados['id']?>" class="hide">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </footer>
       <script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
            <script src="js/script.js" type="text/javascript"></script>
    </body>
</html>
