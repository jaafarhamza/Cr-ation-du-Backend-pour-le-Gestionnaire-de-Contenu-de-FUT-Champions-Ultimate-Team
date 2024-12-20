<?php
require './DB_conn.php';
require './function.php'; 

if (isset($_GET['id'], $_GET['table'], $_GET['idColumn'])) {
    $id = $_GET['id'];
    $table = $_GET['table'];
    $idColumn = $_GET['idColumn'];

    deleteRecord($conn, $table, $idColumn, $id);
} else {
    echo '$id';
    echo 'table';
    echo 'Invalid request';
}
