<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Usuarios
 *
 * @author Nilson Barros
 */
class Usuarios {

    private $sql;
    private $id;
    private $nome;
    private $email;
    private $foto;
    private $senha;
    private $dtregisto;

    const BANCO = " usuarios";
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

        public function __construct() {

        $this->sql = new Sql();
    }

    public function getNome() {
        return $this->nome;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getFoto() {
        return $this->foto;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function getDtregisto() {
        return $this->dtregisto;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setFoto($foto) {
        $this->foto = $foto;
    }

    public function setSenha($senha) {
        $this->senha = $senha;
    }

    public function setDtregisto($dtregisto) {
        $this->dtregisto = $dtregisto;
    }

    public function busacarEmail() {
        $stm = $this->sql->mysql('SELECT', Usuarios::BANCO, ['email' => $this->getEmail()]);
        return $stm;
    }
    public function dadosId(){
         $stm = $this->sql->mysql('SELECT', Usuarios::BANCO, ['id' => $this->getId()]);
       foreach ($stm as $value) {
            
        }
        return $value;
    }

    public function inserirUsuario() {
        $result = $this->busacarEmail();
        $senha = password_hash($this->getSenha(), PASSWORD_DEFAULT);
        $result=$this->sql->mysql('INSERT', Usuarios::BANCO, [
            'nome' => $this->getNome(),
            'email' => $this->getEmail(),
            'senha' => $senha
        ]);
        return $result;
        
    }

    public function dados() {
        $dados = $this->busacarEmail();
        foreach ($dados as $value) {
            
        }
        return $value;
    }

}
