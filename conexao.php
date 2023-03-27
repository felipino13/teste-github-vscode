<?php


$usuario = 'root';
$senha = '';
$db = 'upload';
$host = 'localhost';



$mysqli = new mysqli($host, $usuario, $senha, $db);

if($mysqli->error){
    die("falha ao conectar com o banco de dados:".$mysqli->error);
}

/*
function formatar_data($data){
    return implode('/', array_reverse(explode('_', $data)));
}


function formatar_telefone($telefone){
    $ddd = substr($telefone, 0, 2);
    $parte1 = substr($telefone, 2, 5);
    $parte2 = substr($telefone, 7);
    return"($ddd) $parte1-$parte2";
}
*/

?>