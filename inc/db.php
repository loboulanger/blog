<?php

try
  {
      $pdo = new PDO('mysql:host=localhost;dbname=blog-2;charset=utf8', 'root', 'root',array(
                  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
                                      )
              );
  }
  catch (Exception $e)
  {
      die('Erreur : ' . $e->getMessage());
  }
  
?>