<?php

/*
 * Um objeto é uma entidade com um determinado comportamento definido por
 * seus métodos (ações) e propriedades (dados). Para criar um objeto deve-se utilizar
 * o operador new. Neste exemplo criamos um objeto plano (stdClass) e atribuimos
 * algumas propriedades para ele. No capítulo 2 veremos como manipular classes
 * e objetos.
 */

$carro = new stdClass;
$carro->modelo = 'Palio';
$carro->ano    = 2002;
$carro->cor    = 'Azul';

print_r($carro);
print $carro->modelo . ' ';
print $carro->ano . ' ';
print $carro->cor . ' ';


