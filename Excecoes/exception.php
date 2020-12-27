<?php

function validaUsuario(array $usuario)
{
    if (empty($usuario['codigo']) || empty($usuario['nome'])
    || empty($usuario['idade'])) {
        throw new Exception("Campos obrigatórios não foram preenchidos\n");
      
    }
     return true;
}

$usuario = [
    'codigo' => 1,
    'nome' => '',
    'idade' => 51,
];

try {
$usuarioValido = validaUsuario($usuario);

   } catch (Exception $e)  {
        echo $e -> getMessage();
        die();
   }


//throw new Exception("Essa é uma excessão!");

echo '\n ...executando ...\n';