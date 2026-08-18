<?php

require_once "classContato.php";

$contato1 = new Contato("Pablo", "pablo@gmail.com", 992920536);
echo $contato1->exibirDados();

echo "<p>Testando Gets...<br>";
echo $contato1->getNome();
echo "<br>";
echo $contato1->getEmail();
echo "<br>";
echo $contato1->getTelefone();
echo "<br>";

$contato1->setNome("Pablo Leite");
$contato1->setEmail("Paaabloooo@gmail.com");
$contato1->setTelefone(99991212);
echo "<br>";
echo $contato1->exibirDados();



