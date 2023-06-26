<?php

require '../db/conexao.php';
$nome_repor = $_POST['nome'];
$numero_repor = $_POST['numero'];
$src_repor = $_POST['path'];

$sql0 = $pdo-> prepare("INSERT INTO repor_pedido(id_reporpddpc, 	nome_reporpddpc, 	nompdd_reporpddpc, 	src_reporpddpc)  VALUES (NULL, '$nome_repor', '$numero_repor', '$src_repor');");
$sql0-> execute();
header("location: ../repor_menu/index.php");
?>