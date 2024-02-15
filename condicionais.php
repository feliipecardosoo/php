<?php

$idade = 18;
$nome = "Felipe";

$felipe = true;

echo "Carteira de motorista!" . PHP_EOL;

if(!$felipe) {
    echo "voce tem $idade anos. Pode entrar";
} else {
    echo "Desculpa mas com $idade anos, voce nao pode dirigir...." . PHP_EOL;
    echo "Aguarde mais um tempo até poder dirigir....";
}