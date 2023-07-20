<?php

DEFINE('HOST', 'localhost');
DEFINE('USUARIO', 'root');
DEFINE('SENHA', '');
DEFINE('DBNAME', 'formprof');


try {

$conexao = new pdo('mysql:host=' . HOST . ';dbname=' .
                                 DBNAME, USUARIO, SENHA);
} catch (PDOException $e) {
echo "Erro: Conexão com banco de dados não foi realizada com sucesso.
 Erro gerado " . $e->getMessage();
}


?>