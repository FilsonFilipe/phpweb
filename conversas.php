<?php
require_once './config.php';
if (!isset($_COOKIE['usuario'])) {
    header("Location:login.php");
}
require_once './config.php';
$usuario = new Usuarios();
$usuario->setEmail($_COOKIE['usuario']);
$dados = $usuario->dados();
$activo=$dados['id'];
$chat=new Chat();
$chat->setPara($_GET['grupo']);
$conversar=$chat->covesras();
?>
<?php 
foreach ($conversar as $value) {
    $usuario->setId($value['de']);
    $autor=$usuario->dadosId();
    if ($autor['foto']=="") {
        $autor['foto']="male.png";
    }
    if ($activo==$value['de']) {
        $autor['nome']="Você"
        
   
    
?>

<div class="box-bod  mr-1 mt-1">
    <img src="fotos/<?=$autor['foto']?>" alt="" class="img-chat"/>
    <h6><?=$autor['nome']?></h6>
    <p class="shadow-sm"><?=base64_decode($value['texto'])?><br>
        <small><?=$value['dtregisto']?></small></p>
</div>
<?php
 }
 else {
     
 
 ?>
<div class="box-body position-sticky mr-1 mt-1">
    <img src="fotos/<?=$autor['foto']?>" alt="" class="img-chat"/>
    <h6><?=$autor['nome']?> </h6>
    <p class="shadow-sm"><?=base64_decode($value['texto'])?><br>
        <small><?=$value['dtregisto']?></small></p>
</div>
<?php  
}
} ?>
