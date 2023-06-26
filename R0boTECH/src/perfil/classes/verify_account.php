<?php 

 require 'verify_sample.php';
 require '../../../con/conexao.php';


if(isset($_SESSION['user'])){
    $pesquisar = $_SESSION['user'];
    

 $resultado=$pdo->prepare("SELECT nome FROM usuarios  WHERE usuario = '$pesquisar'");
    
   

    $resultado-> execute();

    $usuarios = $resultado -> fetchALL();

var_dump($usuarios); 

}else{
   
};





?>