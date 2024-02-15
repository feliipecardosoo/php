<?php

// Qual a diferenca de umas aspas duplas ou simples

// Aspas duplas se usa para concatenacao 

$nome = "Felipe";
$idade = 20;

/* 

\n	Nova linha
\r	Retorno de carro
\t	Tabulação horizontal
\v	Tabulação vertical
\e	Escape
\f	Form feed
\\	contrabarra ou barra invertida

*/

echo "Olá $nome seja bem vindo! vi que voce tem $idade anos..." . PHP_EOL;
echo "\t a \n";