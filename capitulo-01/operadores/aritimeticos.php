<?php

/*
 * Operadores aritméticos são utilizados para realização de cálculos matemáticos.
 *
 * Operadores		Descrição
 * ______________________________________________________________________
 *    +			Adição
 *    -			Subtração
 *    *			Multiplicação
 *    /			Divisão
 *    %			Módulo (resto da divisão)
 *
 * Em cálculos comoplexos, procure utizar parênteses, sempre observando as
 * prioridades aritméticas. Por exemplo:
 */

$a = 2;

$b = 4;

echo $a + 3 * 4 + 5 * $b . ' '; // resultado?? (34)

echo ($a + 3) * 4 + (5 * $b) . ' '; // resultado ?? (40)

/*
 * O PHP realiza automaticamente a conbersão de tipos em operações:
 *
 * declaração de uma string contendo 10
 */

$ten = '10';

echo $ten + 5; // resultado?? (10)
