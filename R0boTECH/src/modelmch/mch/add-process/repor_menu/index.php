
<!DOCTYPE html>
  <html>

    <?php 


      require '../db/conexao.php';
      require '../../../offset/offcommon.php';
      echo "<a href=''><img src='../../../../../img/hero.png' width='500px' height='100px'/>;</a>";
    echo "<hr/>";
    echo "<p> Lista de reposições:</p>" ;
    $sql=$pdo->prepare("SELECT * FROM repor_pedido; ");
    
   

    $sql-> execute();

    $clientes = $sql -> fetchALL(); 

    foreach ($clientes as $key => $value ){

       echo "<hr/>";
       echo "<img src='".$value ['src_reporpddpc']."' width='50px' height='50px'/>;";

       echo "<br/>";
       echo "O que é para trocar: ".$value['nome_reporpddpc'];

       echo "<br/>";
       echo "=> Peça trocada: ".$value['nompdd_reporpddpc'];

       echo "<br/>";
     

       
      
       echo "<hr/>";
      }
       echo "<a href='../in-add/index.php'><img src='../../../../../img/input_add.png' width='50px' height='50px'/></a>";
       echo "<hr/>";
       echo "<hr/>";

    ?>

    <body>


   <p>  => lista de reposições.</p>

   
   
<hr/>
<?php
require '../../begin/home/index.php';
?>


  
    </body>


  </html> 