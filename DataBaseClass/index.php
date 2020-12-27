<?php
declare (strict_types = 1);

require 'Produto.php';

$p = new Produto();

switch ($_GET['operacao']) {

    case 'list':
        echo '<h3>Produtos: </h3>'. PHP_EOL;

        foreach ($p->list() as $value) {

            echo 'Id: ' .$value['id'] . '<br> Descrição: ' . $value['descricao'] . '<hr>';
        }

        break;
        
    case 'insert':
       $status =  $p->insert('Produto teste');
        if(!$status) {
            echo "Não foi possível executar a operação";
            return false;
        }
            echo "Registro inserido com sucesso";
        break;

    case 'update':
        $status =  $p->update('Produto alterado', 12);

        if(!$status) {
            echo "Não foi possível executar a operação";
            return false;
        }
        echo "Registro atualizado com sucesso";
        break;


    case 'delete':
        $status =  $p->delete(12);

        if(!$status) {
            echo "Não foi possível executar a operação";
            return false;
        }
        echo "Registro removido com sucesso";
        break;
    default:



}

