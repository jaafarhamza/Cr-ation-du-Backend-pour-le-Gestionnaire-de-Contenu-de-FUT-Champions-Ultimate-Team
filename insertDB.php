<?php include 'dashboard.php';
require './DB_conn.php';
require './function.php'
?>

<?php
// add data club
if (isset($_POST['saveClub'])) {

    $club_name = valid($_POST['clubName']);

    $upload_image = 'uploads/';

    if (move_uploaded_file($_FILES['clubLogo']['tmp_name'], $upload_image . $_FILES['clubLogo']['name'])) {

        $query = "INSERT INTO club (name, logo) 
                  VALUES ('$club_name', '$upload_image" . $_FILES['clubLogo']['name'] . "')";
        $result = mysqli_query($conn, $query);

        if ($result) {
            echo "Club added successfully!";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    } else {
        echo "File upload failed!";
    }
    mysqli_close($conn);
}
?>

