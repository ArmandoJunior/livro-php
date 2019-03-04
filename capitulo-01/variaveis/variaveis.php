<?php

/*
 * Variáveis são identufucadires utilizados para representar valores mutáveis e volátris,
 * que só existem durante a execução do programa. Elas são armazenadas na memória RAM
 * e seu conteúdo é destruído após a execução do programa. Para criar uma variável em PHP,
 * precisamos atribuir-lhe um nome de identificação, sempre precedido pelo caractere cifrão ($).
 * Veja os exemplos a seguir:
 */

 $nome = 'Armando';
 $sobrenome = 'Junior';

 echo "$sobrenome, $nome" . '<br>' . PHP_EOL;

 /*
  * ALGUMAS DICAS
  *
  * - Nunca inicie a nimenclatura de variáveis com números.
  * - Nunca utilize espaços em branco no meio do identificador da variável.
  * - Nunca utilize caracteres especiais(!@#$%¨&*...) na nomenclatura das variáveis.
  * - Evite criar variáveis com mamis de 15 caracteres em virtude da clareza do código-fonte.
  * - Nomes de variáveis devem ser significativos e transmitir a ideia de seu conteúdo dentro do contexto 
  *   no qual a variável está inserida.
  * - Utilize preferencialmente palavras em letras minúsculas separadas por "_"
  *   ou somente as primeiras letras em maiúsculas quando da ocorrência de
  *   mais palavras.
  */

 $codigo_cliente = 'exemplo de variável';
 $codigoCliente  = 'exemplo de variável: Camel Case';

 //mais exemplos...
 
 $variavel = 'nome'; // define o nome da variável

 $$variavel = 'maria'; // cria variável identificada pelo conteúdo de $variavel

 echo $nome . '<br>' . PHP_EOL; // exibe a vaariável $nome na tela

 // mais exemplos...

 $a = 5;

 $b = $a;

 $b = 10;

 echo $a; // imprime 5

 echo ' '; // imprime um espaço

 echo $b . '<br>' . PHP_EOL; // imprime ??? :)

 /*
  * Para criar referencia entre variáveis. ou seja, duas variáveis apontando para a mesma região
  * da memória, a atribuição deve ser precedida pelo operadr &. Assim, qualquer alteração e 
  * qualquer ema das variáveis reflete na outra.
  *
  * ex:
  */

 $c = 5;

 $d = &$c;

 $d = 10;

 echo $c; // imprime ??

 echo ' ';

 echo $d . '<br>' . PHP_EOL; // imprime 10

 /*
  * Objetos são sempre copiados por referência, independentemente de utilizarmos
  * o operadr & na operação de atribuição. Objeros planos podem ser criados no
  * PHP a partir da classe stdClass. Neste exemplo demonstramos que objetos são
  * copiados por referência. Assim alterações em um objeto implicam em alterações 
  * em sua réplica.
  */

 $a1 = new stdClass; // cria objeto

 $a1->nome = 'Maria'; // define atributo

 $b1 = $a1; // cria réplica

 $b1->nome = 'Joana'; // define atributo

 print $a1->nome; // resultado?

 echo ' '; // espaço

 print $b1->nome; // resultado?


 
