<?php

  require '../../add-process/db/conexao.php';
$nome_30 = $_POST['nome'];
$src_30 = $_POST['source'];


$sql_30 = $pdo-> prepare("INSERT INTO collection_30(id_30, nome_30, src_30)  VALUES (NULL, '$nome_30',  '$src_30');");
$sql_30-> execute();
header("location: ../collection_menu/index.php");
?>