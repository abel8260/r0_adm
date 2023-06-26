<?php
/*
 * Melhor prática usando Prepared Statements
 *
 */


try {
    $pdo = new PDO('mysql:host=localhost;dbname=r0botech','root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

   

 
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}

 ?>