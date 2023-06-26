<!DOCTYPE html>
  <html>

    <?php 


    require '../../add-process/db/conexao.php';
    require '../../../offset/offcommon.php';
    echo "<a href=''><img src='../../../../../img/hero.png' width='500px' height='100px'/>;</a>";
    echo "<hr/>";
    echo "<p> Lista de coleções:</p>" ;
    $sql=$pdo->prepare("SELECT * FROM collection_30 ; ");
    
   

    $sql-> execute();

    $clientes = $sql -> fetchALL(); 

    foreach ($clientes as $key => $value ){

       echo "<hr/>";
       echo "<img src='".$value ['src_30']."' width='50px' height='50px'/>;";
      
       echo "<br/>";
       echo "Collection: ".$value['nome_30'];

     
       

       echo "<br/>";
     

       
      
       echo "<hr/>";
      }
       echo "<hr/>";
       echo "<a href='../in-add-collection/index.php'><img src='../../../../../img/input_add.png' width='50px' height='50px'/></a>";
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