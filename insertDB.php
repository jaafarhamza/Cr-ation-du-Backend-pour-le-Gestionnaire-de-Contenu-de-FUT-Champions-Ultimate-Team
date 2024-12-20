<?php include 'dashboard.php';
require './DB_conn.php';
require './function.php'
?>

<?php
// add data nationality
if (isset($_POST['saveNationality'])) {

    $nation_name = valid($conn, $_POST['nationalityName']);

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

    $club_name = valid($conn, $_POST['clubName']);

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
    $palyer_name = valid($conn, $_POST['playerName']);
    $position = valid($conn, $_POST['playerPosition']);
    $nation = valid($conn, $_POST['playerNationality']);
    $club = valid($conn, $_POST['playerClub']);
    $pace = valid($conn, $_POST['playerPace']);
    $shooting = valid($conn, $_POST['playerShooting']);
    $passing = valid($conn, $_POST['playerPassing']);
    $dribbling = valid($conn, $_POST['playerDribbling']);
    $defending = valid($conn, $_POST['playerDefending']);
    $physical = valid($conn, $_POST['playerPhysical']);

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
// add data GKs
if (isset($_POST['saveGoalkeeper'])) {

    $data = [
        'name' => valid($conn, $_POST['goalkeeperName']),
        'club_id' => valid($conn, $_POST['playerClub']),
        'nationality_id' => valid($conn, $_POST['playerNationality']),
        'reflexes' => valid($conn, $_POST['goalkeeperReflexes']),
        'diving' => valid($conn, $_POST['goalkeeperDiving']),
        'handling' => valid($conn, $_POST['goalkeeperHandling']),
        'kicking' => valid($conn, $_POST['goalkeeperKicking']),
        'Positioning' => valid($conn, $_POST['goalkeeperPositioning']),
        'speed' => valid($conn, $_POST['goalkeeperPhysical']),
    ];

    $files = [
        'photo' => $_FILES['GKPhoto']
    ];

    if (insertDB($conn, 'goalkeeper', $data, $files)) {
        echo "Goalkeeper added ";
    } else {
        echo "Error adding goalkeeper";
    }
}

?>

