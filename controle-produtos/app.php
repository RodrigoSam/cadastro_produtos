<?php
require_once("produtoControler.php");

function buildMenu()
{
    $menuOptions = [1, 2, 3, "Q", "q",];



    do {
        system("clear");
        echo("---------------------CADASTRO DE PRODUTOS---------------" . PHP_EOL);
        echo("1 - Adicionar novo produto: " . PHP_EOL);
        echo("2 - Listar produtos: " . PHP_EOL);
        echo("3 - Apagar todos os itens da memória..." . PHP_EOL);
        echo("Q - Sair: " . PHP_EOL);
        echo("");

        $option = readline("Selecione uma opção: ");
    } while (!in_array($option, $menuOptions));

    switch ($option) {
        case "1":
            adicionarProduto();
            break;
        case "2":
             listarProdutos();
            break;
        case "3":
            limpadb();
            break;
        case "q":

        case "Q":

                exit;

    }
}
buildMenu();


