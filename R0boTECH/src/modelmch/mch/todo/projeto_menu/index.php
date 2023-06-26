<!DOCTYPE html>
  <html>

    <?php 


       require '../../add-process/db/conexao.php';
      require '../../../offset/offcommon.php';
    echo "<a href=''><img src='../../../../../img/hero.png' width='500px' height='100px'/>;</a>";
    echo "<hr/>";
    echo "<p> Lista de projetos:</p>" ;
    $sql=$pdo->prepare("SELECT * FROM project_6 ; ");
    
   

    $sql-> execute();

    $clientes = $sql -> fetchALL(); 

    foreach ($clientes as $key => $value ){

       echo "<hr/>";
       echo "Nome do projeto: ".$value['name_6'];
       echo "<br/>";
       echo "Descrição: ".$value['texto_6'];
     
       

       echo "<br/>";
     

       
      
       echo "<hr/>";
      }
       echo "<hr/>";
     echo "<a href='../in-add-projeto/index.php'><img src='../../../../../img/input_add.png' width='50px' height='50px'/></a>";
       echo "<hr/>";
       echo "<hr/>";


    ?>

    <body>

<hr/>
<?php
require '../../begin/home/index.php';
?>
  
    </body>


  </html> 