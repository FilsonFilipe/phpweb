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
class Chat {
    
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
        $this->de = $de;
        return $this;
    }

    public function setPara($para) {
        $this->para = $para;
        return $this;
    }

    public function setTexto($texto) {
        $this->texto =base64_encode($texto);
        return $this;
    }

    public function setFoto($foto) {
        $this->foto = $foto;
        return $this;
    }

    public function setVideo($video) {
        $this->video = $video;
        return $this;
    }

    public function setDtregisto($dtregisto) {
        $this->dtregisto = $dtregisto;
        return $this;
    }

    public function setStatus($status) {
        $this->status = $status;
        return $this;
    }
    public function covesras() {
        $conversas= $this->sql->mysql('SELECT', Chat::BANCO, [
            'para'=> $this->getPara()
        ]);
        return $conversas;
    }
    public function enviar() {
        $result=$this->sql->mysql('INSERT',Chat::BANCO, [
            'de' => $this->getDe(),
            'para' => $this->getPara(),
            'texto' => $this->getTexto()
        ]);
        return $result;
        
    }
}
