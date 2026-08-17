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

// $contato1 = new Contato("Pablo", "pablo@gmail.com", 992920536);
// echo $contato1->exibirDados();

// echo "<p>Testando Gets...<br>";
// echo $contato1->getNome();
// echo "<br>";
// echo $contato1->getEmail();
// echo "<br>";
// echo $contato1->getTelefone();
// echo "<br>";

// $contato1->setNome("Pablo Leite");
// $contato1->setEmail("Paaabloooo@gmail.com");
// $contato1->setTelefone(99991212);
// echo "<br>";
// echo $contato1->exibirDados();

