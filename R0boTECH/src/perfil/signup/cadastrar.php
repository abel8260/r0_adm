<?php 

session_start(); 
include('../../../con/conexao.php');

$data2 = $_POST['nome'];
$nome = $data2;

$data3 = $_POST['senha'];
$senhaa = md5($data3);

$data4 = $_POST['usuario'];
$usuarioo  = $data4;

$resultado2=$pdo->prepare("SELECT count(*) AS total  FROM users where usuarioo_user= '$usuarioo'");


 $resultado2-> execute();

$total = $resultado2 ->  fetchALL();



    foreach ($total[0]  as $key => $value ){

       echo "<hr/>";
       echo $key.": ".$value;

       echo "<br/>";

      
       echo "<hr/>";
      };
       echo "<hr/>";
       

     
    
 

if($total[0]['total']> 0){
	$_SESSION['usuario_existe'] = true ;
	header('location: index.php'); 
	exit;
}else{


try {

$sth = $pdo->prepare("INSERT INTO users (nome_user, usuarioo_user, senhaa_user) VALUES( ?, ?, ?)");

$sth->bindParam(1, $nome, PDO::PARAM_STR, 255);
$sth->bindParam(2, $usuarioo, PDO::PARAM_STR, 255);
$sth->bindParam(3, $senhaa, PDO::PARAM_STR, 32);
$sth->execute();

  

  echo $sth ->rowCount();
  var_dump($sth); 
  
} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}
  /* ?>
 
    $resultado=$pdo->prepare("( id, nome, usuarioo, senha) VALUES(null, $nome , $usuario, $senha");
    
  

    $resultado-> execute();

    $usuario = $resultado -> fetchALL();
 var_dump($usuario);

$usuario = $resultado -> fetchALL(); */

    

    

 };

	header('location: index.php'); 
	exit; 

?>