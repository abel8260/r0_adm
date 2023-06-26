
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
      <li><input style="background-color: grey;" name="nome" placeholder="Nome do set..."/></li>
      <li><input style="background-color: grey;" name="poder" placeholder="função do set..."  /></li>
      <li><input style="background-color: grey;" name="source" placeholder="src do set..."/></li>
    </ul>
      
    <button type='submit'>+</button>
   
   </form>


<hr/>
<?php
require '../../begin/home/index.php';
?>


  
    </body>


  </html> 