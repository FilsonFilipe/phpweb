<!doctype html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <title>Inice Sessão no blabla</title>
        <!-- Bootstrap core CSS -->
        <link href="./css/bootstrap.min.css" rel="stylesheet">
        <link href="css/icofont.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/estilo.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <header class="header-login-cadastro">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-4 pt-2 pl-4">
                        <div class="logo">
                            <a href="index.php">blabla <span class="icofont-ui-text-loading"></span></a>
                        </div>
                    </div>
                    <div class="col-8 text-right pt-3 pr-3 link">
                        <a href="login.php">Inicirar Sessão</a>
                    </div>
                </div>
            </div>
        </header>
        <main>
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="col-md-4 ">


                            <form method="post" action="sumit.php" class="form-login shadow">
                                <p class="h4">Inscreva-te Agora!</p><br/>
                                <?php
                                if (isset($_GET['erro'])) {
                                    $erro = base64_decode($_GET['erro']);
                                    ?>
                                    <div class="alert alert-danger">
                                        <?= $erro ?> 
                                    </div>
                                    <?php
                                }
                                ?>
                                <div class="form-group">
                                    <input type="text"  class="form-control input-lg " name="nome" id="" placeholder="Nome Completo" required>
                                    </div>
                                <div class="form-group">
                                    <input type="email"  class="form-control input-lg " name="email" id="" placeholder="Teu Email" required>
                                    </div>
                                <div class="form-group">
                                    <input type="password"  class="form-control input-lg " name="senha" id="" placeholder="Tua Palavra-passe" required>

                                </div>
                                <div class="form-group">
                                    <button class="btn btn-principal form-control input-lg " type="submit" name="cadstrar">Inscrever</button>
                                </div>
                                <br/>
                            </form>
                        </div>
                        <div class="col-md-4"></div>
                    </div>
                </div>
            </section>
        </main>
    </body>