<!DOCTYPE html>
  <html>

    <?php 


    
      require '../../add-process/db/conexao.php';
      require '../../../offset/offcommon.php';
      echo "<a href=''><img src='../../../../../img/hero.png' width='500px' height='100px'/>;</a>";
    echo "<hr/>";
    echo "<p> Lista de veiculos:</p>" ;
    $sql=$pdo->prepare("SELECT * FROM `veiculo_1_2` ; ");
    
   

    $sql-> execute();

    $clientes = $sql -> fetchALL(); 

    foreach ($clientes as $key => $value ){

       echo "<hr/>";
       echo "<img src='".$value ['src_v12']."' width='50px' height='50px'/>;";
       echo "<br/>";
       echo "Vehicle: ".$value['nome_v12'];
       $valor_comunicado = $value['nome_v12'];
       echo "<br/>";
       
   
       echo "<img src='".$value['ite1_v12']."' width='50px' height='50px'/>;";
       
      
       echo "<img src='".$value['ite2_v12']."' width='50px' height='50px'/>;";
       
      

       echo "<img src='".$value['ite3_v12']."' width='50px' height='50px'/>;";
       
      

       echo "<img src='".$value['ite4_v12']."' width='50px' height='50px'/>;";
       
       echo "<br/>";
       
      
       echo "<hr/>";
      }
      echo "<hr/>";
     echo "<a href='../in-add-vehicle/index.php'><img src='../../../../../img/input_add.png' width='50px' height='50px'/></a>";
       echo "<hr/>";
       echo "<hr/>";

    ?>

    <body>


  

   <br/>



<hr/>
<?php
require '../../begin/home/index.php';
?>


  
    </body>


  </html> 