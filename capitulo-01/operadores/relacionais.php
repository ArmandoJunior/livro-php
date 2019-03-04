<?php

/*
 * Operadores relacionais são utilizados para realizar comparações entre valores ou
 * expressões, resultando sempre um valor boolean (TRUE ou FALSE).
 *
 * Comparadores		Descrição
 * __________________________________________________________________________________________
 *   ==			Igual. Resulta verdadeiro (TRUE) se as expressões forem iguais.
 *   ===		Idênticos. Resulta verdadeiro (TRUE) se as expressões forem
 *   			do mesmo tipo de dados.
 *   != ou <>		Diferente. Resulta verdadeiro (TRUE) se as variáveis forem diferentes.
 *   <			Menor que.
 *   >			Maior que.
 *   <=			Menor ou igual que.
 *   >=			Maior ou igual que.
 *
 *   Veja a seguir alguns testes lógicos e seus respectivos resultados. No primeiro caso
 *   vemos a utilização errada do operador de atribuição = para realizar uma comparação: o
 *   valor operador sempre retorna o valor atribuído.
 *
 */

if ($a = 5) {
	echo 'essa operação atribui 5 à variável $a';
}

/*
 * No exemplo que segue declaramos duas variáveis, uma integer e outra string
 * Neste caso vemos a utilização dos operadores de comparação == e !=.
 */

$integer = 1234;

$string = '1234';

if ($integer == $string) {
	echo '$integer e $dtring são iguais';

} else if ($integer != $string) {
	echo '$integer e $string são diferentes';

}

/*
 * No próximo caso além da comparação entre as variáveis, comparamos também
 * os tipos de dados das variáveis.
 */

if  ($integer === $string {
	echo '$integer e $string são iguais e do mesmo tipo';

} 

if ($integer !== $string) {
	echo '$integer e $string são de tipos diferentes';

}

/*
 * O PHP considera o zero (0) como sendo falso em comparações lógicas. Para
 * evitar erros semânticos em retorno de valores calculados por funções que podem
 * retornar tanto um valor booleano quanto um inteiro, podemos utilizar as seguintes
 * comparações:
 */

$zero = 0;

if ($zero == FALSE) {
	echo '$zero é falso';

}

if ($zero === FALSE) {
	echo '$zero é FALSE e do tipo boolean ';

}

if ($zero === 0) {
	echo '$zero é zero mesmo';

}
