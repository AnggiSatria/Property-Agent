<?php 

require "/laragon/www/server/config/index.php";

function getAllData($table) {
    global $conn;
    $sql = "SELECT * FROM $table";
    $result = $conn->query($sql);
    return $result;
}

function getDataByID($table, $id) {
    global $conn;
    $sql = "SELECT * FROM $table WHERE id = $id";
    $result = $conn->query($sql);
    return $result;
}

function getDataByParams($table, $key, $params) {
    global $conn;
    $sql = "SELECT * FROM $table WHERE $key LIKE $params";
    $result = $conn->query($sql);
    return $result;
}

function updatedData($table, $id, $value, $value2, $value3, $value4, $value5, $column, $column2, $column3, $column4, $column5) {
    global $conn;
    // $sql = "DELETE FROM $table WHERE id=$id";
    $sql = "UPDATE $table SET ";
    return $conn->query($sql);
}

function deleteData($table, $id) {
    global $conn;
    $sql = "DELETE FROM $table WHERE id=$id";
    return $conn->query($sql);
}

?>