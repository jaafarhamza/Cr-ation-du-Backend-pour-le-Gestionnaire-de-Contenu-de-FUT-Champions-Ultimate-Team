<?php

require './DB_conn.php';

function valid ($input){
    global $conn;
    return mysqli_real_escape_string($conn,$input);
}


?>