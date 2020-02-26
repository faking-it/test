<?php

$host   = "mysql";
$user   = "root";
$pass   = "root";
$dbname = "test";

$dsn = "mysql:host=$host;dbname=$dbname";

$options = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");

try {
    $link= new \PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e){
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}


// Connection aux tables de la base de données 'test'
$tables = array(
    "jobs",
    "jobs_info",
    "infos_bulle");

foreach($tables as $table){
    

    $sql = "SELECT * FROM $table";
    $sth = $link->prepare($sql);
    $sth->execute();

    $$table = $sth->fetchAll(PDO::FETCH_OBJ);
    $sth->closeCursor();
    $sth = null;
}
//Fin

?>