<?php
require './DB_conn.php';
?>

<?php
function valid($conn, $input)
{
    return mysqli_real_escape_string($conn, trim($input));
}
?>


<!-- function insert data -->

<?php
function insertDB($conn, $table, $data, $files = null)
{
    $columns = implode(',', array_keys($data));
    $values = "'" . implode("','", array_values($data)) . "'";

    if ($files) {
        $upload_image = 'uploads/';
        $file_colums = key($files);
        $file = $files[$file_colums];

        if (move_uploaded_file($file['tmp_name'], $upload_image . $file['name'])) {
            $data[$file_colums] = $upload_image . $file['name'];
            $columns = implode(',', array_keys($data));
            $values = "'" . implode("','", array_values($data)) . "'";
        } else {
            echo 'File upload failed!';
            return;
        }
    }

    $sql = "INSERT INTO $table ($columns) VALUES ($values)";
    if (mysqli_query($conn, $sql)) {
        echo 'Data inserted successfully.';
    } else {
        echo 'Error inserting data: ' . mysqli_error($conn);
    }
}

?>

<!-- function delete  -->
<?php
function deleteRecord($conn, $table, $idColumn, $id)
{

    $id = valid($conn, $id);

    $sql = "DELETE FROM `$table` WHERE `$idColumn` = '$id'";

    if (mysqli_query($conn, $sql)) {
        echo 'Record deleted successfully';
    } else {
        echo 'Error deleting record: ' . mysqli_error($conn);
    }
    mysqli_close($conn);

}

?>