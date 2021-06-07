<?php

require_once './config.php';
if (isset($_POST['login'])) {
    $assunto = base64_encode("O usuario esta tentar Aceder o Sistema mais infelimente houve um erro durande to processo");
    echo '<!doctype html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Jekyll v4.0.1">
        <title>A redecionar...</title>
    </head>
    </html>';
    $email = htmlspecialchars(addslashes($_POST['email']));
    $senha = htmlspecialchars(addslashes($_POST['senha']));
    $usuario = new Usuarios();
    $usuario->setEmail($email);
    $usuario->setSenha($senha);

    if ($usuario->busacarEmail()->rowCount() > 0) {
        $dados = $usuario->dados();
        $sts = password_verify($usuario->getSenha(), $dados['senha']);
        if ($sts) {
            setcookie('usuario', $usuario->getEmail());
            header("Location:./index.php");
        } else {
            $erro = base64_encode('Palavra Passe Errada');
            header("Location:./login.php?erro=" . $erro . "&refe=" . $assunto);
        }
    } else {
        $erro = base64_encode('Usuario não encontrado');
        header("Location:./login.php?erro=" . $erro . "&refe=" . $assunto);
    }
} elseif (isset($_POST['cadstrar'])) {
    $assunto = base64_encode("O usuario esta tentar Aceder o Sistema mais infelimente houve um erro durande to processo");
    echo '<!doctype html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>A redecionar...</title>
    </head>
    </html>';
    $nome = htmlspecialchars(addslashes($_POST['nome']));
    $email = htmlspecialchars(addslashes($_POST['email']));
    $senha = htmlspecialchars(addslashes($_POST['senha']));
    $usuario = new Usuarios();
    $usuario->setEmail($email);
    $usuario->setSenha($senha);
    $usuario->setNome($nome);
    if ($usuario->busacarEmail()->rowCount() > 0) {
        $erro = base64_encode('Email já esta sendo usado !');
        header("Location:./cadastro.php?erro=" . $erro . "&refe=" . $assunto);
    } else {
        $reult = $usuario->inserirUsuario();
        setcookie('usuario', $usuario->getEmail());
        header("Location:./index.php");
    }
} elseif (isset($_POST['btnenviar'])) {
    echo '<!doctype html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Jekyll v4.0.1">
        <title>A redecionar...</title>
    </head>
    </html>';
    $de = $_POST['de'];
    $para = $_POST['para'];
    $texto = $_POST['texto'];
    $chat = new Chat();
    $chat->setDe($de);
    $chat->setPara($para);
    $chat->setTexto($texto);
    $result = $chat->enviar();
    header('Location:./chat.php?grupo=' . $para);
}
?>

