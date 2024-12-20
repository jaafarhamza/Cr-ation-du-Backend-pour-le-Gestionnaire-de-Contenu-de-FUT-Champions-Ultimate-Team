<?php
require './DB_conn.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-stone-200">
    <div class="flex flex-col md:flex-row min-h-screen">
        <aside class="w-full md:w-64 bg-gradient-to-r from-stone-500 flex flex-col">
            <div class="p-4 text-center text-4xl font-extrabold">
                Dashboard
            </div>
            <nav class="flex-1 p-4">
                <ul class="space-y-4">
                    <li>
                        <a href="#" onclick="show('players')" class="playerBottun block p-2 bg-gradient-to-r from-green-600 font-bold rounded-l-full  hover:bg-green-400 duration-700 ">Players</a>
                    </li>

                    <li>
                        <a href="#" onclick="show('GKs')" class="GKBottun block p-2 bg-gradient-to-r from-green-600 font-bold rounded-l-full  hover:bg-green-400 duration-700 ">Goalkeeper</a>
                    </li>

                    <li>
                        <a href="#" onclick="show('nationality')" class="nationalityBottun block p-2 bg-gradient-to-r from-green-600 font-bold rounded-l-full hover:bg-green-400 duration-700">Nationality</a>
                    </li>
                    <li>
                        <a href="#" onclick="show('club')" class="clubBottun block p-2 bg-gradient-to-r from-green-600 font-bold rounded-l-full hover:bg-green-400 duration-700">Club</a>
                    </li>
                </ul>
            </nav>
        </aside>

        <main class="flex-1 p-6 ">
            <!-- Players Section -->
            <section id="players" class="players mb-8">
                <h2 class="text-2xl font-bold mb-4">Players</h2>
                <div class="overflow-x-auto bg-white shadow rounded-lg">
                    <table class="table-auto w-full text-left">
                        <thead>
                            <tr class="bg-gray-200">
                                <th class="px-4 py-2">Player ID</th>
                                <th class="px-4 py-2">Name</th>
                                <th class="px-4 py-2">photo</th>
                                <th class="px-4 py-2">Position</th>
                                <th class="px-4 py-2">Club</th>
                                <th class="px-4 py-2">Nationality</th>
                                <th class="px-4 py-2">Pace</th>
                                <th class="px-4 py-2">Shooting</th>
                                <th class="px-4 py-2">Passing</th>
                                <th class="px-4 py-2">Dribbling</th>
                                <th class="px-4 py-2">Defending</th>
                                <th class="px-4 py-2">Physical</th>
                                <th class="px-4 py-2">Rating</th>
                                <th class="px-4 py-2">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql = 'SELECT players.player_id, players.name, players.photo, players.position, nationality.name as nationality_name, club.name as club_name, players.pace, players.shooting, players.passing, players.dribbling, players.defending, players.physical, players.rating 
                            FROM players 
                            join nationality on players.nationality_id = nationality.nationality_id 
                            join club on players.club_id = club.club_id ';
                            $result = mysqli_query($conn, $sql);

                            if ($result) {
                                while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                                    <tr>
                                        <td class="border px-4 py-2"><?= $row['player_id'] ?></td>
                                        <td class="border px-4 py-2"><?= $row['name'] ?></td>
                                        <td class="border px-4 py-2"><img src="<?= $row['photo'] ?>" alt="player image" class="w-10 h-10"></td>
                                        <td class="border px-4 py-2"><?= $row['position'] ?></td>
                                        <td class="border px-4 py-2"><?= $row['club_name'] ?></td>
                                        <td class="border px-4 py-2"><?= $row['nationality_name'] ?></td>
                                        <td class="border px-4 py-2"><?= $row['pace'] ?></td>
                                        <td class="border px-4 py-2"><?= $row['shooting'] ?></td>
                                        <td class="border px-4 py-2"><?= $row['passing'] ?></td>
                                        <td class="border px-4 py-2"><?= $row['dribbling'] ?></td>
                                        <td class="border px-4 py-2"><?= $row['defending'] ?></td>
                                        <td class="border px-4 py-2"><?= $row['physical'] ?></td>
                                        <td class="border px-4 py-2"><?= $row['rating'] ?></td>
                                        <td class="border px-4 py-2">
                                            <button class="text-blue-600 mr-4 ">
                                                <i class="fas fa-pencil-alt"></i>
                                            </button>
                                            <span>
                                                <a href="delete.php?id=<?= $row['player_id']; ?>&table=players&idColumn=player_id" class="btn-delete" onclick="return confirm('Voulez-vous vraiment supprimer cet étudiant ?')">
                                                    <i class='fa-solid fa-trash-can cursor-pointer text-red-600'></i>
                                                </a>
                                            </span>
                                        </td>
                                    </tr>
                            <?php
                                }
                            } else {
                                echo 'error:' . mysqli_error($conn);
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
                <div class="flex justify-center mx-auto mt-4">
                    <button type="button" name="add_player" class="add_player border bg-green-500 rounded-xl pl-2 pr-2 p-1  font-bold hover:text-stone-200 duration-500 ">ADD player</button>
                </div>

            </section>

            <section id="GKs" class="GKs mb-8 hidden">
                <h2 class="text-2xl font-bold mb-4">Goalkeepers</h2>
                <div class="overflow-x-auto bg-white shadow rounded-lg">
                    <table class="table-auto w-full text-left">
                        <thead>
                            <tr class="bg-gray-200">
                                <th class="px-4 py-2">Player ID</th>
                                <th class="px-4 py-2">Name</th>
                                <th class="px-4 py-2">photo</th>
                                <th class="px-4 py-2">Position</th>
                                <th class="px-4 py-2">Club</th>
                                <th class="px-4 py-2">Nationality</th>
                                <th class="px-4 py-2">Diving</th>
                                <th class="px-4 py-2">Handling</th>
                                <th class="px-4 py-2">Kicking</th>
                                <th class="px-4 py-2">Reflexes</th>
                                <th class="px-4 py-2">Speed</th>
                                <th class="px-4 py-2">Positioning</th>
                                <th class="px-4 py-2">Rating</th>
                                <th class="px-4 py-2">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql = 'SELECT goalkeeper.player_id, goalkeeper.name, goalkeeper.photo, goalkeeper.position, nationality.name as nationality_name, club.name as club_name, goalkeeper.diving, goalkeeper.handling, goalkeeper.kicking, goalkeeper.reflexes, goalkeeper.speed, goalkeeper.positioning, goalkeeper.rating 
                            FROM goalkeeper 
                            join nationality on goalkeeper.nationality_id = nationality.nationality_id 
                            join club on goalkeeper.club_id = club.club_id ';
                            $result = mysqli_query($conn, $sql);

                            if ($result) {
                                while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                                    <tr>
                                        <td class="border px-4 py-2"><?= $row['player_id']; ?></td>
                                        <td class="border px-4 py-2"><?= $row['name']; ?></td>
                                        <td class="border px-4 py-2"><img src="<?= $row['photo']; ?>" alt="photo GK" class="w-10 h-10"></td>
                                        <td class="border px-4 py-2"><?= $row['position']; ?></td>
                                        <td class="border px-4 py-2"><?= $row['club_name']; ?></td>
                                        <td class="border px-4 py-2"><?= $row['nationality_name']; ?></td>
                                        <td class="border px-4 py-2"><?= $row['diving']; ?></td>
                                        <td class="border px-4 py-2"><?= $row['handling']; ?></td>
                                        <td class="border px-4 py-2"><?= $row['kicking']; ?></td>
                                        <td class="border px-4 py-2"><?= $row['reflexes']; ?></td>
                                        <td class="border px-4 py-2"><?= $row['speed']; ?></td>
                                        <td class="border px-4 py-2"><?= $row['positioning']; ?></td>
                                        <td class="border px-4 py-2"><?= $row['rating']; ?></td>
                                        <td class="border px-4 py-2">
                                            <span>
                                                <a href="delete.php?id=<?= $row['player_id']; ?>&table=goalkeeper&idColumn=player_id"><i
                                                        class='fa-solid fa-pen-to-square cursor-pointer text-green-600'></i></a>
                                            </span>
                                            <span>
                                                <a href="delete.php?id=<?= $row['player_id']; ?>&table=goalkeeper&idColumn=player_id" class="btn-delete" onclick="return confirm('Voulez-vous vraiment supprimer cet étudiant ?')">
                                                    <i class='fa-solid fa-trash-can cursor-pointer text-red-600'></i>
                                                </a>
                                            </span>
                                        </td>
                                    </tr>
                            <?php
                                }
                            } else {
                                echo 'error:' . mysqli_error($conn);
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
                <div class="flex justify-center mx-auto mt-4">
                    <button type="button" name="add_GK" class="add_GK border bg-green-500 rounded-xl pl-2 pr-2 p-1  font-bold hover:text-stone-200 duration-500 ">ADD GK</button>
                </div>

            </section>

            <section id="nationality" class="nationality mb-8 hidden">
                <h2 class="text-2xl font-bold mb-4">Nationality</h2>
                <div class="overflow-x-auto bg-white shadow rounded-lg">
                    <table class="table-auto w-full text-left">
                        <thead>
                            <tr class="bg-gray-200">
                                <th class="px-4 py-2">Nationality ID</th>
                                <th class="px-4 py-2">Name</th>
                                <th class="px-4 py-2">Flag</th>
                                <th class="px-4 py-2">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql = "SELECT * from nationality";
                            $result = mysqli_query($conn, $sql);

                            if ($result) {
                                while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                                    <tr>
                                        <td class="border px-4 py-2"><?= $row['nationality_id'] ?></td>
                                        <td class="border px-4 py-2"><?= $row['name'] ?></td>
                                        <td class="border px-4 py-2"><img src="<?= $row['flag'] ?>" alt="Spain Flag" class="w-10 h-10"></td>
                                        <td class="border px-4 py-2">
                                            <button class="text-blue-600 mr-4 ">
                                                <i class="fas fa-pencil-alt"></i>
                                            </button>
                                            <span>
                                                <a href="delete.php?id=<?= $row['nationality_id']; ?>&table=nationality&idColumn=nationality_id" class="btn-delete" onclick="return confirm('Voulez-vous vraiment supprimer cet étudiant ?')">
                                                    <i class='fa-solid fa-trash-can cursor-pointer text-red-600'></i>
                                                </a>
                                            </span>
                                        </td>
                                    </tr>
                            <?php
                                }
                            } else {
                                echo "eroor:" . mysqli_error($conn);
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
                <div class="flex justify-center mx-auto mt-4">
                    <button type="button" name="add_nationality" class="add_nationality border bg-green-500 rounded-xl pl-2 pr-2 p-1  font-bold hover:text-stone-200 duration-500 ">ADD nationality</button>
                </div>
            </section>
            <section id="club" class="club mb-8 hidden">
                <h2 class="text-2xl font-bold mb-4">Club</h2>
                <div class="overflow-x-auto bg-white shadow rounded-lg">
                    <table class="table-auto w-full text-left">
                        <thead>
                            <tr class="bg-gray-200">
                                <th class="px-4 py-2">Club ID</th>
                                <th class="px-4 py-2">Name</th>
                                <th class="px-4 py-2">Logo</th>
                                <th class="px-4 py-2">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql = "SELECT * FROM club";
                            $result = mysqli_query($conn, $sql);

                            if ($result) {
                                while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                                    <tr>
                                        <td class="border px-4 py-2"><?= $row['club_id'] ?></td>
                                        <td class="border px-4 py-2"><?= $row['name'] ?></td>
                                        <td class="border px-4 py-2"><img src="<?= $row['logo'] ?>" alt="FC Barcelona Logo" class="w-10 h-10"></td>
                                        <td class="border px-4 py-2">
                                            <button class="text-blue-600 mr-4">
                                                <i class="fas fa-pencil-alt"></i>
                                            </button>
                                            <span>
                                                <a href="delete.php?id=<?= $row['club_id']; ?>&table=club&idColumn=club_id" class="btn-delete" onclick="return confirm('Voulez-vous vraiment supprimer cet étudiant ?')">
                                                    <i class='fa-solid fa-trash-can cursor-pointer text-red-600'></i>
                                                </a>
                                            </span>
                                        </td>
                                    </tr>

                            <?php
                                }
                            } else {
                                echo 'error:' . mysqli_error($conn);
                            }

                            ?>
                        </tbody>
                    </table>
                </div>
                <div class="flex justify-center mx-auto mt-4">
                    <button type="button" name="add_club" class="add_club border bg-green-500 rounded-xl pl-2 pr-2 p-1  font-bold hover:text-stone-200 duration-500">ADD club</button>
                </div>
            </section>

            <!-- Modal Club -->
            <div id="addClubModal" class="modalClub hidden  fixed inset-0 bg-stone-200 bg-opacity-50  backdrop-blur-sm flex justify-center items-center">
                <div class="bg-stone-400 p-6 rounded-lg w-1/3 ">
                    <h2 class="text-2xl font-bold mb-4">Add New Club</h2>
                    <form id="addClubForm" action="insertDB.php" method="post" enctype="multipart/form-data">
                        <label for="clubName" class="block text-sm font-semibold">Club Name</label>
                        <input type="text" id="clubName" name="clubName" placeholder="Enter club name" class="w-full p-2 border rounded mb-4">

                        <label for="clubLogo" class="block text-sm font-semibold">Club Logo</label>
                        <input type="file" id="clubLogo" name="clubLogo" placeholder="Enter club logo" class="w-full p-2 border rounded mb-4">

                        <div class="flex justify-between mt-4">
                            <button type="button" id="closeClubModal" class="CancelClub border bg-red-800 text-white p-2 w-20 rounded-md hover:bg-stone-400 hover:text-red-800 duration-300 hover:font-bold">Cancel</button>
                            <button type="submit" id="submitClubModal" name="saveClub" class="border bg-green-800 text-white p-2 w-20 rounded-md hover:bg-stone-400 hover:text-green-800 duration-300 hover:font-bold">Save</button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- model nationality -->
            <div id="addNationalityModal" class="modalNationality hidden fixed inset-0 bg-stone-200 bg-opacity-50  backdrop-blur-sm flex justify-center items-center">
                <div class="bg-stone-400 p-6 rounded-lg w-1/3">
                    <h2 class="text-2xl font-bold mb-4">Add New Nationality</h2>
                    <form id="addNationalityForm" action="insertDB.php" method="post" enctype="multipart/form-data">

                        <label for="nationalityName" class="block text-sm font-semibold">Nationality Name</label>
                        <input type="text" id="nationalityName" name="nationalityName" placeholder="Enter nationality name" class="w-full p-2 border rounded mb-4">

                        <label for="flagURL" class="block text-sm font-semibold">Flag URL</label>
                        <input type="file" id="flagLogo" name="flagLogo" placeholder="Enter flag image URL" class="w-full p-2 border rounded mb-4">

                        <div class="flex justify-between mt-4">
                            <button type="button" id="closeNationalityModal" class="CancelNationality border bg-red-500 text-white p-2 w-20 rounded-md hover:bg-stone-400 hover:text-red-800 duration-300 hover:font-bold">Cancel</button>
                            <button type="submit" id="submitNationalityModal" name="saveNationality" class="border bg-green-500 text-white p-2 w-20 rounded-md hover:bg-stone-400 hover:text-green-800 duration-300 hover:font-bold">Save</button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- modal players -->
            <div id="addPlayerModal" class="modalPlayer hidden fixed inset-0 bg-stone-200 bg-opacity-50  backdrop-blur-sm flex items-center justify-center">
                <div class="bg-stone-400 rounded-lg w-96 p-6">
                    <h2 class="text-2xl font-bold mb-4">Add Player</h2>
                    <form id="playerForm" action="insertDB.php" method="post" enctype="multipart/form-data">
                        <div class="mb-4">
                            <label for="playerName" class="block text-sm font-medium">Player Name</label>
                            <input type="text" id="playerName" name="playerName" class="w-full border rounded px-3 py-2 mt-1" placeholder="Enter player name" />
                        </div>
                        <div class="mb-4">
                            <label for="playerPosition" class="block text-sm font-medium">Position</label>
                            <select id="playerPosition" name="playerPosition" class="w-full border rounded px-3 py-2 mt-1" required>
                                <option value="ST">ST</option>
                                <option value="RW">RW</option>
                                <option value="LW">LW</option>
                                <option value="CM">CM</option>
                                <option value="CDM">CDM</option>
                                <option value="CB">CB</option>
                                <option value="LB">LB</option>
                                <option value="RB">RB</option>
                            </select>
                        </div>
                        <label for="playerPhoto" class="block text-sm font-semibold">player photo</label>
                        <input type="file" id="playerPhoto" name="playerPhoto" placeholder="Enter de Photo player" class="w-full p-2 border rounded mb-4">
                        <div class="grid grid-cols-2 gap-2">
                            <div class="mb-4">
                                <label for="playerClub" class="block text-sm font-medium">Club</label>
                                <select name="playerClub" id="playerClub" class="w-full border rounded px-3 py-2 mt-1" required>
                                    <?php
                                    $sql = 'SELECT * from club';
                                    $result = mysqli_query($conn, $sql);
                                    if ($result) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                            <option value="<?= $row['club_id'] ?>">
                                                <?= $row['name'] ?>
                                            </option>
                                    <?php
                                        }
                                    } else {
                                        echo 'error:' . mysqli_error($conn);
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="mb-4">
                                <label for="playerNationality" class="block text-sm font-medium">Nationality</label>
                                <select name="playerNationality" id="playerNationality" class="w-full border rounded px-3 py-2 mt-1" required>
                                    <?php
                                    $sql = 'SELECT * from nationality';
                                    $result = mysqli_query($conn, $sql);
                                    if ($result) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                            <option value="<?= $row['nationality_id'] ?>">
                                                <?= $row['name'] ?>
                                            </option>
                                    <?php
                                        }
                                    } else {
                                        echo 'error:' . mysqli_error($conn);
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="mb-4">
                                <label for="playerPace" class="block text-sm font-medium">Pace</label>
                                <input type="number" id="playerPace" name="playerPace" class="w-full border rounded px-3 py-2 mt-1" placeholder="Enter pace" />
                            </div>
                            <div class="mb-4">
                                <label for="playerShooting" class="block text-sm font-medium">Shooting</label>
                                <input type="number" id="playerShooting" name="playerShooting" class="w-full border rounded px-3 py-2 mt-1" placeholder="Enter shooting" />
                            </div>
                            <div class="mb-4">
                                <label for="playerPassing" class="block text-sm font-medium">Passing</label>
                                <input type="number" id="playerPassing" name="playerPassing" class="w-full border rounded px-3 py-2 mt-1" placeholder="Enter passing" />
                            </div>
                            <div class="mb-4">
                                <label for="playerDribbling" class="block text-sm font-medium">Dribbling</label>
                                <input type="number" id="playerDribbling" name="playerDribbling" class="w-full border rounded px-3 py-2 mt-1" placeholder="Enter dribbling" />
                            </div>
                            <div class="mb-4">
                                <label for="playerDefending" class="block text-sm font-medium">Defending</label>
                                <input type="number" id="playerDefending" name="playerDefending" class="w-full border rounded px-3 py-2 mt-1" placeholder="Enter defending" />
                            </div>
                            <div class="mb-4">
                                <label for="playerPhysical" class="block text-sm font-medium">Physical</label>
                                <input type="number" id="playerPhysical" name="playerPhysical" class="w-full border rounded px-3 py-2 mt-1" placeholder="Enter physical" />
                            </div>
                        </div>
                        <div class="flex justify-between mt-4">
                            <button type="button" id="cancelPlayerModal" class="CancelPlayer border bg-red-500 text-white p-2 w-20 rounded-md hover:bg-stone-400 hover:text-red-800 duration-300 hover:font-bold">Cancel</button>
                            <button type="submit" id="submitPlayerModal" name="savePlayer" class="border bg-green-500 text-white p-2 w-20 rounded-md hover:bg-stone-400 hover:text-green-800 duration-300 hover:font-bold">Save</button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- modal GK -->
            <div id="addGKModal" class="modalGK hidden fixed inset-0 bg-stone-200 bg-opacity-50 backdrop-blur-sm flex items-center justify-center">
                <div class="bg-stone-400 rounded-lg w-96 p-6">
                    <h2 class="text-2xl font-bold mb-4">Add Goalkeeper</h2>
                    <form id="goalkeeperForm" action="insertDB.php" method="post" enctype="multipart/form-data">
                        <div class="mb-4">
                            <label for="goalkeeperName" class="block text-sm font-medium">Goalkeeper Name</label>
                            <input type="text" id="goalkeeperName" name="goalkeeperName" class="w-full border rounded px-3 py-2 mt-1" placeholder="Enter goalkeeper name" />
                        </div>
                        <label for="GKPhoto" class="block text-sm font-semibold">player photo</label>
                        <input type="file" id="GKPhoto" name="GKPhoto" placeholder="Enter de GK player" class="w-full p-2 border rounded mb-4">
                        <div class="grid grid-cols-2 gap-2">
                            <div class="mb-4">
                                <label for="playerClub" class="block text-sm font-medium">Club</label>
                                <select name="playerClub" id="playerClub" class="w-full border rounded px-3 py-2 mt-1" required>
                                    <?php
                                    $sql = 'SELECT * from club';
                                    $result = mysqli_query($conn, $sql);
                                    if ($result) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                            <option value="<?= $row['club_id'] ?>">
                                                <?= $row['name'] ?>
                                            </option>
                                    <?php
                                        }
                                    } else {
                                        echo 'error:' . mysqli_error($conn);
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="mb-4">
                                <label for="playerNationality" class="block text-sm font-medium">Nationality</label>
                                <select name="playerNationality" id="playerNationality" class="w-full border rounded px-3 py-2 mt-1" required>
                                    <?php
                                    $sql = 'SELECT * from nationality';
                                    $result = mysqli_query($conn, $sql);
                                    if ($result) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                            <option value="<?= $row['nationality_id'] ?>">
                                                <?= $row['name'] ?>
                                            </option>
                                    <?php
                                        }
                                    } else {
                                        echo 'error:' . mysqli_error($conn);
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="grid grid-cols-2 gap-2">
                            <div class="mb-4">
                                <label for="goalkeeperReflexes" class="block text-sm font-medium">Reflexes</label>
                                <input type="number" id="goalkeeperReflexes" name="goalkeeperReflexes" class="w-full border rounded px-3 py-2 mt-1" placeholder="Enter reflexes" />
                            </div>
                            <div class="mb-4">
                                <label for="goalkeeperDiving" class="block text-sm font-medium">Diving</label>
                                <input type="number" id="goalkeeperDiving" name="goalkeeperDiving" class="w-full border rounded px-3 py-2 mt-1" placeholder="Enter diving" />
                            </div>
                            <div class="mb-4">
                                <label for="goalkeeperHandling" class="block text-sm font-medium">Handling</label>
                                <input type="number" id="goalkeeperHandling" name="goalkeeperHandling" class="w-full border rounded px-3 py-2 mt-1" placeholder="Enter handling" />
                            </div>
                            <div class="mb-4">
                                <label for="goalkeeperKicking" class="block text-sm font-medium">Kicking</label>
                                <input type="number" id="goalkeeperKicking" name="goalkeeperKicking" class="w-full border rounded px-3 py-2 mt-1" placeholder="Enter kicking" />
                            </div>
                            <div class="mb-4">
                                <label for="goalkeeperPositioning" class="block text-sm font-medium">Positioning</label>
                                <input type="number" id="goalkeeperPositioning" name="goalkeeperPositioning" class="w-full border rounded px-3 py-2 mt-1" placeholder="Enter positioning" />
                            </div>
                            <div class="mb-4">
                                <label for="goalkeeperPhysical" class="block text-sm font-medium">Physical</label>
                                <input type="number" id="goalkeeperPhysical" name="goalkeeperPhysical" class="w-full border rounded px-3 py-2 mt-1" placeholder="Enter physical" />
                            </div>
                        </div>
                        <div class="flex justify-between mt-4">
                            <button type="button" id="cancelGoalkeeperModal" class="CancelGK border bg-red-500 text-white p-2 w-20 rounded-md hover:bg-stone-400 hover:text-red-800 duration-300 hover:font-bold">Cancel</button>
                            <button type="submit" id="submitGoalkeeperModal" name="saveGoalkeeper" class="border bg-green-500 text-white p-2 w-20 rounded-md hover:bg-stone-400 hover:text-green-800 duration-300 hover:font-bold">Save</button>
                        </div>
                    </form>
                </div>
            </div>

        </main>
    </div>
    <!-- <script src="/script_dashboard.js?php echo time(); ?>"></script> -->
    <!-- <script src="http://localhost/script_dashboard.js"></script> -->
    <script src="./script/script_dashboard.js"></script>
</body>
<?php
mysqli_close($conn);
?>

</html>