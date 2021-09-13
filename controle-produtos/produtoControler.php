    <?php

function adicionarProduto()
{
    echo("-----------------------ADICIONAR PRODUTO----------------------" . PHP_EOL);
    $nome = readLine("Informe o nome do produto: ");
    $valor = readline("Informe o valor do produto: ");
    $dataToFile = "{$nome};{$valor}|";//Estrutura para adição de arquivos
    file_put_contents("data.db", $dataToFile, FILE_APPEND);
    readline("Produto adicionado com sucesso! Pressiome ENTER");
    buildMenu();
}

function listarProdutos()
{
    echo("----------------LISTAR PRODUTOS-----------------" . PHP_EOL);
    $dados = file_get_contents("data.db", FILE_TEXT);
    $produtos = array_filter(explode ("|",$dados)); // | pipe definido como separador
    echo("--PRODUTO: \t-- PREÇO --" . PHP_EOL);
    echo("------------------------" . PHP_EOL);

    foreach ($produtos as $item) {
        $produto = explode(";", $item);
        echo(" {$produto[0]} \t {$produto[1]} " . PHP_EOL);

    }
    readline("Presione ENTER para voltar ao menu...");
    buildMenu();

}

function limpaDb()
{
    file_put_contents("data.db", "");
    echo("Todos os produtos foram excluidos...");
    readline("Pressione ENTER para voltar ao menu...");
    buildMenu();
}

function atualizar(){

}
