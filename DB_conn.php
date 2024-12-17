<?php
$data_server = "localhost";
$data_user = "root";
$data_pass = "haisenSQLBD@ORACLE8";
$data_name = "fut_champions_ultimate_team";

$conn = mysqli_connect($data_server, $data_user, $data_pass, $data_name);

if ($conn) {
    echo "Connected to database";
} else {
    echo "Not connected to database";
}

?>