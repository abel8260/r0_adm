<!DOCTYPE html>
  <html>

    <?php 


      
     require '../../add-process/db/conexao.php';
      require '../../../offset/offcommon.php';

    echo "<a href=''><img src='../../../../../img/hero.png' width='500px' height='100px'/>;</a>";
    echo "<hr/>";
    echo "<p> Lista de peças:</p>" ;
    $sql=$pdo->prepare("SELECT * FROM pieces_1_7 ; ");
    
   

    $sql-> execute();

    $clientes = $sql -> fetchALL(); 

    foreach ($clientes as $key => $value ){

       echo "<hr/>";
       echo "<img src='".$value ['src_p17']."' width='50px' height='50px'/>;";
       echo "<br/>";
       echo "Piece: ".$value['name_p17'];
       echo "<br/>";
       echo "Numero: ".$value['pw_p17'];
       echo "<br/>";
       echo "Efeito: ".$value['effect_p17'];

       echo "<br/>";
     

       
      
       echo "<hr/>";
      }
       echo "<hr/>";
     echo "<a href='../in-add-piece/index.php'><img src='../../../../../img/input_add.png' width='50px' height='50px'/></a>";
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