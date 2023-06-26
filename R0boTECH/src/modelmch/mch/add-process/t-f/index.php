<!DOCTYPE html>
  <html>

    <?php 


      require '../db/conexao.php';


    ?>

    <body>
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">id_psl</th>
      <th scope="col">nome</th>
      <th scope="col">url</th>
      <th scope="col">privacity</th>
    </tr>
  </thead>
  <tbody>

   <?php
    
    


$result_usuarios= $pdo-> prepare( "SELECT * FROM mecha ORDER BY id_psl");
$result_usuarios-> execute();
$resultado_usuarios = $result_usuarios-> fetchAll( PDO::FETCH_ASSOC );

foreach($resultado_usuarios as  $row_usuario) {
         


echo "<form action='key_12enemy1_bck.php' method='POST'>";
      echo "<div class='buttoin'>";
            echo "<div class='card-content'>";
            echo "<div class='content'>";
     
           

          echo "<tr>";

          echo "<td>" .$row_usuario["id_psl"]. "</td>";

          echo "<td>" .$row_usuario["nome_psl"]. "</td>";
      
          echo "<td>" . $row_usuario['url_psl'] . "</td>";
      

          echo "<td>" . $row_usuario['privacity'] . "</td>";

          echo "</tr>";

        

 echo "</div>";
            echo "</div>";
            echo "<div class='buttons'>";
       
      echo "</div>";
            echo "</div>";

           
         
      echo "</form>";
            
        
         

























           
    }
  
  
  
 
 

 ?>
   
     </body>
</html>

    
 
