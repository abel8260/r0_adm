
<!DOCTYPE html>
  <html>

    <?php 


      require '../db/conexao.php';
      require '../../../offset/offcommon.php';
      echo "<a href=''><img src='../../../../../img/hero.png' width='500px' height='100px'/>;</a>";
      echo "<hr/>";
      echo "<hr/>";

    ?>

    <body>


   <p>Adicionar:</p>

   <form method="POST" action="./index_bck.php">

    <ul style="line-height:80%">
      <li><input style="background-color: grey;" name="nome" placeholder="Descrição da reposição..."/></li>
      <li><input style="background-color: grey;" name="numero" placeholder="Serial da reposição..."/></li>
      <li><input style="background-color: grey;" name="path" placeholder="PATH da reposição..."/></li>
    </ul>
      
    <button type='submit'>+</button>
   
   </form>


<hr/>
<?php
require '../../begin/home/index.php';
?>


  
    </body>


  </html> 