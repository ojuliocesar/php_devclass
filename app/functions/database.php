<?php

function connect() {

define('DRIVER', 'mysql');
define('HOST', 'locahost');
define('DB', 'db_users');
define('DBUSER','root');
define('DBPASS','');
define('OPTIONS', [
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
    PDO::ATTR_CASE => PDO::CASE_NATURAL
]);

    try{
        $pdo = new PDO(
            DRIVER.":host=".HOST.";dbname=".DB,
            DBUSER,
            DBPASS,
            OPTIONS
        );
       $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
       return $pdo;
   }catch(PDOException $e){
       throw new \Exception($e->getMessage());
   }
}

function create($table, $fields) {

    $sql = "insert into {$table}";
    $sql.="(" .implode(',', array_keys($fields)). ")";
    $sql.= " values (" . implode(',', array_values($fields)). ")";

    $pdo = connect();

    $sth = $pdo->query('SELECT * FROM '.$table);
    $sth->execute();

    $result = $sth->fetchAll();
    print_r($result);

    $insert = $pdo->prepare($sql);
    $insert->execute();
    $result = $insert->fetchAll();
}

function update() {

}

function delete() {

}