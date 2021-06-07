<?php
require_once './config.php';
$grupos=new Grupos();
$array=$grupos->grupos();
foreach ($array as $value) {
    echo ' <div class="media text-muted pt-3">
                    <img src="fotos/groups_filled_100px.png" class="mr-2 rounded img-capa"/>
                    <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                        <div class="d-flex justify-content-between align-items-center w-100">
                            <strong class="text-gray-dark"><a href="chat.php?grupo='.$value['id'].'">'.$value['nome'].'</a></strong>
                            <a href="#">Juntar</a>
                        </div>
                    </div>
                </div>';
}