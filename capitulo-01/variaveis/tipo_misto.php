<?php

/*
 * O tipo misto (mixed) é uma identificação que representa diversos (não necessariamente todos)
 * tipos de dados que podem ser usados em um mesmo parâmetro. Um parâmetro do tipo mixed 
 * indica que a função aceita diversos tipos de dados como parâmetro. Um exemplo é a função
 * gettype(), que ogtém o tipo da variável passada como parâmetro (que pode ser integer, string
 * array, objeto, entre outros).
 */

string gettype(mixed var);

// Veja alguns resultados possiveis:
"boolean"  "integer"  "double"  "sstring"  "array"  "object"  "NULL"

