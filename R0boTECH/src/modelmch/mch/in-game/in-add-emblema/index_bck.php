<?php

  require '../../add-process/db/conexao.php';
$nome_emblema = $_POST['nome'];
$numero_emblema = $_POST['poder'];
$src_emblema = $_POST['source'];

$sql2 = $pdo-> prepare("INSERT INTO emblem_1_2_4(id_e124, src_e124, pw_e124, name_e124 	)  VALUES (NULL, '$src_emblema',  $numero_emblema,'$nome_emblema');");
$sql2-> execute();
header("location: ../emblema_menu/index.php");
?>