<?php

require 'rb.php';
R::setup( 'mysql:host=localhost;dbname=projectalex',
'root', 'root' );
//try{
 //   $db = new PDO('mysql:host=localhost;dbname=projectalex','root','root');
//} catch(PDOException $e){
    echo $e->getmessage();
//}
session_start();?>