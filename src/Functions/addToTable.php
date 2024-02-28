<?php

function addToTable($connection, $inputArray, $tableName){
//    require "../common.php";
//    require_once '../src/DBconnect.php';
    try {
    $sql = sprintf(
        "INSERT INTO %s (%s) values (%s)",
        "$tableName",
        implode(", ", array_keys($inputArray)),
        ":" . implode(", :", array_keys($inputArray))
    );
    $statement = $connection->prepare($sql);
    $statement->execute($inputArray);
    } catch(PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }
}

// https://www.php.net/manual/en/pdostatement.fetchobject.php
function getForeignKey($connection, $tableName, $primaryKey){
    require_once '../src/DBconnect.php';;
    try {
        $sql = "SELECT MAX(" . $primaryKey . ") FROM " . $tableName;
        $statement = $connection->prepare($sql);
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_ASSOC);
        if(empty($result) || $result['MAX('.$primaryKey.')'] === null) {
            $tempArray = array("1");
            return $tempArray;
        }
        print_r($result);
        return $result;
    } catch(PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }
}
