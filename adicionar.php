<?php
$nome = FILTER_INPUT(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
if(isset($nome) and (!empty($nome))){
    $nome = ucwords(strtolower($nome));
    if(file_exists('lista.txt')){
        $nomes = file_get_contents('lista.txt');
        $nomes .= '\n' .$nome;
        file_put_contents('lista.txt', $nomes);
    } else {
        file_put_contents('lista.txt', $nome);
    }
}
header('Location: index.php');
exit;





