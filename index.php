<html>
<head>
    <meta charset="UTF-8" />
    <title>Adicionar nomes</title>
</head>
<body>
<form method='POST' action='adicionar.php'>
    <input type='text' name='nome'>
    <input type='submit' name='submit' value='Adicionar'>
</form>
<h2>Lista de Nomes</h2>
<?php
if(file_exists('lista.txt')){
    $dados = file_get_contents('lista.txt');
    $nomes = explode('\n', $dados);
    echo '<ul>';
    foreach($nomes as $nome){
        echo '<li>'.$nome.'</li>';
    }
      echo '<ul>';
    } else {
    echo "Arquivo não encontrado!";
}

//while (list($regexp,$code) = each($error_regexps)) {

?>
























