<?php
include_once 'config/constantes.php';
include_once 'config/conexao.php';
include_once 'func/funcoes.php';

$controle = filter_input(INPUT_POST, 'controle', FILTER_SANITIZE_STRING);


if (isset($controle) && !empty($controle)) {

    switch ($controle) {
        case 'listaProp';
            include_once 'prp.php';
            break;
        case 'listaProduto';
            include_once 'prod.php';
            break;
            case 'produtoAdd';
            include_once 'prodAdd.php';
            break;
            case 'produtoAlt';
            include_once 'produtoAlt.php';
            break;
            case 'produtoExc';
            include_once 'produtoExc.php';
            break;
        default:
            echo 'Menu inesistente';
    }

    /*     if ($controle == 'listaGenero') {
        echo 'Você clicou no botão Genero';
    } else if ($controle == 'listaCliente') {
        echo 'Você clicou no botão Cliente';
    } else if ($controle == 'listaFilme') {
        echo 'Você clicou no botão Filme';
    } else {
        echo 'Menu indisponível';
    } */
} else {
    echo 'Pagina inesistente';
}
