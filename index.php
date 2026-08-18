<?php
/*
* @author: Pablo Leite
* version: 1.0
* date: 17-08-2026. 
*/ 

// anexando a pagina classContato.php
require_once "classContato.php";

// instanciando o objeto.
$contato1 = new Contato("Pablo", "pablo@gmail.com", 992920536);

// mostrando o retorno de todos os dados.
echo $contato1->exibirDados();

echo "<p>Testando Gets...<br>";
echo $contato1->getNome() . "<br>";
echo $contato1->getEmail() . "<br>";
echo $contato1->getTelefone() . "<br>";

// setando novos valores...
$contato1->setNome("Pablo Leite");
$contato1->setEmail("Paaabloooo@gmail.com");
$contato1->setTelefone(99991212);

echo "<br>";

// mostrando o retorno de todos os dados atualizados...
echo $contato1->exibirDados();



