<?php
 
 require '../con/conexao.php';

 echo "<hr/>";
    $sql=$pdo->prepare("SELECT * FROM clientes ");
    
   

    $sql-> execute();

    $clientes = $sql -> fetchALL(); 

    foreach ($clientes as $key => $value ){

       echo "<hr/>";
       echo "Nome: ".$value ['nome'];

       echo "<br/>";

       echo "Cargo: ".$value['cargo'];

       echo "<br/>";
      
       echo "<hr/>";
      }
       echo "<hr/>";
	?>