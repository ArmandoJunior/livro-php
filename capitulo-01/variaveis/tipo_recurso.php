<?php

/*
 * Recurso (resource) é uma variável que mantém uma referência de recurso externo.
 * Recursos são criados e utilizados por funções como aquelas que criam cinexões
 * de banco de dados. As funções mysql_connest(), por exemplo, ao conectarem-se
 * ao banco de dados. retornam uma variável de referência do tipo recurso.
 */

resource mysql_connect([string $server[, string $username[, string $password [, bool $new_link [, int $client_flags ]]]]] );

resource pg_connect (string $connection_string);

// Uma variável do tipo recurso não pode ser serializada.
