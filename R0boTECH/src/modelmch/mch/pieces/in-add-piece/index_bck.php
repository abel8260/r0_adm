<?php

  require '../../add-process/db/conexao.php';
$nome_piece = $_POST['nome'];
$pw_piece = $_POST['pw'];
$effect_piece = $_POST['effect'];
$src_piece = $_POST['source'];

$sql2 = $pdo-> prepare("INSERT INTO pieces_1_7(id_p17,     name_p17,  pw_p17,  effect_p17, src_p17   )  VALUES (NULL, '$nome_piece',   '$pw_piece','$effect_piece','$src_piece');");
$sql2-> execute();
header("location: ../pieces_menu/index.php");
?>