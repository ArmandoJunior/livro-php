<?php

/*
 * Uma constante é um valor que não sofre modificações durante a execução do
 * programa. Ela é representada por um identificador, assim como as variáveis, 
 * com a exceção de que só pode conter valores escalares (booleano, inteiro, 
 * ponto flutuante e string) ou arrays. As regras de nomenclatura de constantes 
 * seguem as mesmas regras das variáveis, com a exceção de que as constantes não 
 * são precedidas pelo sinal de cifrão ($) e geralmente utilizam nomes em letras maiúsculas.
 *
 * Você pode definir uma constante utilizando a função define(). Quando uma constante
 * é definida, ela não pode mais ser modificada ou anulada. Exemplo:
 */

define('MAXIMO_CLIENTES', 100);

echo MAXIMO_CLIENTES;
