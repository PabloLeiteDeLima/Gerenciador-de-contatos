<?php

class Contato{
    // Atributos...
    private $nome;
    private $email;
    private $telefone;

    // Métodos...

    // Método construtor...
    public function __construct($nome, $email, $telefone){
        $this->nome = $nome;
        $this->email = $email;
        $this->telefone = $telefone;
    }

    // Métodos Gets...
    public function getNome(){
        return "Nome: $this->nome ";
    }

    public function getEmail(){
        return $this->email;
    }

    public function getTelefone(){
        return $this->telefone;
    }

    // Métodos Sets...
    public function setNome($nome){
        $this->nome = $nome;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function setTelefone($telefone){
        $this->telefone = $telefone;
    }

    // Método para visualizar retorno dos dados...
    public function exibirDados(){
        return  
        "Nome: " . $this->nome . 
        "<br>E-mail: " . $this->email . 
        "<br>Telefone: " . $this->telefone . 
        "<br>";
    }

}