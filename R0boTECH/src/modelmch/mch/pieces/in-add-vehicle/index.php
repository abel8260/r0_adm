
<!DOCTYPE html>
  <html>

    <?php 


      require '../../add-process/db/conexao.php';
      require '../../../offset/offcommon.php';
      echo "<a href=''><img src='../../../../../img/hero.png' width='500px' height='100px'/>;</a>";
      echo "<hr/>";
      echo "<hr/>";

    ?>

    <body>


   <p>Adicionar:</p>

   <form method="POST" action="./index_bck.php">

    <ul style="line-height:80%">
      <li><input style="background-color: grey;" name="nome" placeholder="nome do veiculo..."/></li>
      <li><input style="background-color: grey;" name="ite1" placeholder="item 1 do veiculo..."  /></li>
      <li><input style="background-color: grey;" name="ite2" placeholder="item 2 do veiculo..."/></li>
      <li><input style="background-color: grey;" name="ite3" placeholder="item 3 do veiculo..."/></li>
      <li><input style="background-color: grey;" name="ite4" placeholder="item 4 do veiculo..."  /></li>
      <li><input style="background-color: grey;" name="source" placeholder="src do veiculo..."/></li>

    </ul>
      
    <button type='submit'>+</button>
   
   </form>


<hr/>
<?php
require '../../begin/home/index.php';
?>


  
    </body>


  </html> 