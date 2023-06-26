<?php

  require '../../add-process/db/conexao.php';
$nome_p = $_POST['nome'];
$numero_p = $_POST['poder'];


$sql2 = $pdo-> prepare("INSERT INTO project_6(id_6,  name_6,  texto_6   )  VALUES (NULL, '$nome_p ',  '$numero_p');");
$sql2-> execute();
header("location: ../projeto_menu/index.php");
?>