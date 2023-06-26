<?php

  require '../../add-process/db/conexao.php';
$nome_roldana = $_POST['nome'];
$src_roldana = $_POST['source'];

$sql2 = $pdo-> prepare("INSERT INTO roldana_124(id_no124,     name_no124, src_no124   )  VALUES (NULL, '$nome_roldana','$src_roldana');");
$sql2-> execute();
header("location: ../roldana_menu/index.php");
?>