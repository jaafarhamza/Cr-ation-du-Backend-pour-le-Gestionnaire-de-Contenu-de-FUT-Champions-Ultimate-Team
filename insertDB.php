<?php include 'dashboard.php';
require './DB_conn.php';
require './function.php'
?>

<?php
// add data nationality
if (isset($_POST['saveNationality'])) {

    $nation_name = valid($_POST['nationalityName']);

    $upload_image = 'uploads/';

    if (move_uploaded_file($_FILES['flagLogo']['tmp_name'], $upload_image . $_FILES['flagLogo']['name'])) {

        $query = "INSERT INTO nationality (name, flag) 
                  VALUES ('$nation_name', '$upload_image" . $_FILES['flagLogo']['name'] . "')";
        $result = mysqli_query($conn, $query);

        if ($result) {
            echo "nation added successfully!";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    } else {
        echo "File upload failed!";
    }
    mysqli_close($conn);
}
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

<?php
// add data player
if (isset($_POST['savePlayer'])) {
    $palyer_name = valid($_POST['playerName']);
    $position = valid($_POST['playerPosition']);
    $nation = valid($_POST['playerNationality']);
    $club = valid($_POST['playerClub']);
    $pace = valid($_POST['playerPace']);
    $shooting = valid($_POST['playerShooting']);
    $passing = valid($_POST['playerPassing']);
    $dribbling = valid($_POST['playerDribbling']);
    $defending = valid($_POST['playerDefending']);
    $physical = valid($_POST['playerPhysical']);

    $upload_image = 'uploads/';

    if (move_uploaded_file($_FILES['playerPhoto']['tmp_name'], $upload_image . $_FILES['playerPhoto']['name'])) {
        $query = "INSERT INTO players (name,photo,position,nationality_id,club_id,pace,shooting,passing,dribbling,defending,physical)
                VALUES ('$palyer_name','$upload_image" . $_FILES['playerPhoto']['name'] . "','$position','$nation','$club','$pace','$shooting','$passing','$dribbling','$defending','$physical')";

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

<?php

?>

