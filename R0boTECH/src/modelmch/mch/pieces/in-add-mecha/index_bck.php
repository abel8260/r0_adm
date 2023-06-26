<?php

  require '../../add-process/db/conexao.php';
$nome_mecha = $_POST['nome'];
$src_mecha = $_POST['source'];

$sql2 = $pdo-> prepare("INSERT INTO mecha(id_psl, nome_psl, url_psl)  VALUES (NULL, '$nome_mecha','$src_mecha');");
$sql2-> execute();
header("location: ../vehicle_menu/index.php");
?>