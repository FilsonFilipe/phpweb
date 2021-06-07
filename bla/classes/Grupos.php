<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Grupos
 *
 * @author Marisa F Canga
 */
class Grupos {

    private $sql;
    private $id;
    private $nome;
    private $foto;
    private $admin;
    private $membros;
    const BANCO="grupos";

    function __construct() {
        $this->sql = new Sql();
    }

    public function getId() {
        return $this->id;
    }

    public function getNome() {
        return $this->nome;
    }

    

    public function setId($id) {
        $this->id = $id;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    
    public function grupos() {
        $grupos= $this->sql->mysql('SELETALL', Grupos::BANCO,[]);
        return $grupos;
    }
    public function grupo(){
        $grupos= $this->sql->mysql('SELETALL', Grupos::BANCO,['id'=> $this->getId()]);
        
        foreach ($grupos as $value) {
            
        }
        return $value;
    }

}
