<?php
try
{
    $database=new PDO("mysql:host=localhost;dbname=mvc;port=3307;charset=utf8","root","root",[PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION]);

}
catch(EXCEPTION $e){
 
    echo 'erreur:'.$e->getMessage();

    die();
}

?>