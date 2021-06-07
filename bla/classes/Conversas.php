<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Chat
 *
 * @author Nilson Barros
 */
class Conversas {
    
    private $sql;
    private $de;
    private $para;
    private $texto;
    private $foto;
    private $video;
    private $dtregisto;
    private $status;
    const BANCO="conversas";

    public function __construct() {
        
        $this->sql = new Sql();
    }
    public function getDe() {
        return $this->de;
    }

    public function getPara() {
        return $this->para;
    }

    public function getTexto() {
        return $this->texto;
    }

    public function getFoto() {
        return $this->foto;
    }

    public function getVideo() {
        return $this->video;
    }

    public function getDtregisto() {
        return $this->dtregisto;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setDe($de) {
        $this->de = $de;;
    }

    public function setPara($para) {
        $this->para = $para;
    }

    public function setTexto($texto) {
        $this->texto =base64_encode($texto);
    }



    public function covesras() {
        $conversas= $this->sql->mysql('SELECT', Conversas::BANCO, [
            'para'=> $this->getPara()
        ]);
        return $conversas;
    }
    public function enviar() {
        $result=$this->sql->mysql('INSERT',Conversas::BANCO, [
            'de' => $this->getDe(),
            'para' => $this->getPara(),
            'texto' => $this->getTexto()
        ]);
        return $result;
        
    }
}
