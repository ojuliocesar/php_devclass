<?php

function connect() {
    $pdo = new \PDO("mysql:host=localhost;dbname=db_users;charset=utf8", 'root', 'root');

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
}

function create($table, $fields) {

    if(!is_array($fields)) {
        $fields = (array) $fields;
    }

    $sql = "insert into {$table}";
    $sql.="(" .implode(',', array_keys($fields)). ")";
    $sql.= " values (" .':'.implode(',:', array_keys($fields)). ")";
}

function update() {

}

function find() {

}

function delete() {

}