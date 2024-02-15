<?php
//tipos primitivos
$testeInteiro = 10;
$testeDecimal = 10.5;

$testeSoma = $testeInteiro + $testeDecimal;

$testeString = "teste";

$testeBoolean = true;


echo gettype($testeInteiro). "\n";
echo gettype($testeDecimal). "\n";
echo gettype($testeSoma). "\n";
echo gettype($testeString). "\n";
echo gettype($testeBoolean). "\n";