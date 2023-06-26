<?php

  require '../../add-process/db/conexao.php';
$nome_vehicle = $_POST['nome'];
$ite1_vehicle = $_POST['ite1'];
$ite2_vehicle = $_POST['ite2'];
$ite3_vehicle = $_POST['ite3'];
$ite4_vehicle = $_POST['ite4'];
$src_vehicle = $_POST['source'];

$sql2 = $pdo-> prepare("INSERT INTO veiculo_1_2(id_v12,  nome_v12,  ite1_v12,  ite2_v12,  ite3_v12,  ite4_v12,  src_v12    	)  VALUES (NULL, '$nome_vehicle',   '$ite1_vehicle','$ite2_vehicle','$ite3_vehicle','$ite4_vehicle' ,'$src_vehicle');");
$sql2-> execute();
header("location: ../vehicle_menu/index.php");
?>