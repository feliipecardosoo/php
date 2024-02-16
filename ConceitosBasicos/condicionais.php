<?php

$idade = 18;
$nacionalidade = "Brasileira";

$aprovado = false;


if($idade >= 18 && $nacionalidade == "Brasileira" && $aprovado) {
    echo "voce tem $idade anos. Pode entrar" . PHP_EOL;
} else {
    echo "Desculpa mas voce nao pode dirigir." . PHP_EOL;
}

echo PHP_EOL;
echo "Adeus!";