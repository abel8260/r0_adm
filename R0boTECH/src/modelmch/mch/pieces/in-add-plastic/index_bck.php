<?php

  require '../../add-process/db/conexao.php';
$nome_plastic = $_POST['nome'];
$src_plastic = $_POST['source'];

$sql2 = $pdo-> prepare("INSERT INTO plastic_7(id_pl7,  name_pl7, src_pl7    )  VALUES (NULL, '$nome_plastic', '$src_plastic');");
$sql2-> execute();
header("location: ../plastic_menu/index.php");
?>