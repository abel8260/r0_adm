<?php

  require '../../add-process/db/conexao.php';
$nome_set = $_POST['nome'];
$numero_set = $_POST['poder'];
$src_set = $_POST['source'];

$sql2 = $pdo-> prepare("INSERT INTO set_136(id_136,  src_136,   pw_136,  name_136   	)  VALUES (NULL, '$src_set',  '$numero_set','$nome_set');");
$sql2-> execute();
header("location: ../set_menu/index.php");
?>