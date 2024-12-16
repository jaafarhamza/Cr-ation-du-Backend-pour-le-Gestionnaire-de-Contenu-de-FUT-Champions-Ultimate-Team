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
                            <tr>
                                <td class="border px-4 py-2">1</td>
                                <td class="border px-4 py-2">Lionel Messi</td>
                                <td class="border px-4 py-2">RW</td>
                                <td class="border px-4 py-2">FC Barcelona</td>
                                <td class="border px-4 py-2">Argentina</td>
                                <td class="border px-4 py-2">95</td>
                                <td class="border px-4 py-2">92</td>
                                <td class="border px-4 py-2">89</td>
                                <td class="border px-4 py-2">91</td>
                                <td class="border px-4 py-2">36</td>
                                <td class="border px-4 py-2">65</td>
                                <td class="border px-4 py-2">90</td>
                                <td class="border px-4 py-2">
                                    <button class="text-blue-600 mr-4 ">
                                        <i class="fas fa-pencil-alt"></i>
                                    </button>
                                    <button class="text-red-600 ">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </td>
                            </tr>
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
                            <tr>
                                <td class="border px-4 py-2">1</td>
                                <td class="border px-4 py-2">David De Gea</td>
                                <td class="border px-4 py-2">GK</td>
                                <td class="border px-4 py-2">Manchester United</td>
                                <td class="border px-4 py-2">Spain</td>
                                <td class="border px-4 py-2">90</td>
                                <td class="border px-4 py-2">85</td>
                                <td class="border px-4 py-2">75</td>
                                <td class="border px-4 py-2">92</td>
                                <td class="border px-4 py-2">80</td>
                                <td class="border px-4 py-2">88</td>
                                <td class="border px-4 py-2">85</td>
                                <td class="border px-4 py-2">
                                    <button class="text-blue-600 mr-4">
                                        <i class="fas fa-pencil-alt"></i>
                                    </button>
                                    <button class="text-red-600">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </td>
                            </tr>
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
                            <tr>
                                <td class="border px-4 py-2">1</td>
                                <td class="border px-4 py-2">Spain</td>
                                <td class="border px-4 py-2"><img src="spain_flag.png" alt="Spain Flag" class="w-10 h-10"></td>
                                <td class="border px-4 py-2">
                                    <button class="text-blue-600 mr-4 ">
                                        <i class="fas fa-pencil-alt"></i>
                                    </button>
                                    <button class="text-red-600 ">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </td>
                            </tr>
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
                            <tr>
                                <td class="border px-4 py-2">1</td>
                                <td class="border px-4 py-2">FC Barcelona</td>
                                <td class="border px-4 py-2"><img src="barcelona_logo.png" alt="FC Barcelona Logo" class="w-10 h-10"></td>
                                <td class="border px-4 py-2">
                                    <button class="text-blue-600 mr-4">
                                        <i class="fas fa-pencil-alt"></i>
                                    </button>
                                    <button class="text-red-600 ">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </td>
                            </tr>
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
                    <form id="addClubForm">
                        <label for="clubName" class="block text-sm font-semibold">Club Name</label>
                        <input type="text" id="clubName" name="clubName" placeholder="Enter club name" class="w-full p-2 border rounded mb-4">

                        <label for="clubLogo" class="block text-sm font-semibold">Club Logo URL</label>
                        <input type="url" id="clubLogo" name="clubLogo" placeholder="Enter club logo" class="w-full p-2 border rounded mb-4">

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
                    <form id="addNationalityForm">

                        <label for="nationalityName" class="block text-sm font-semibold">Nationality Name</label>
                        <input type="text" id="nationalityName" name="nationalityName" placeholder="Enter nationality name" class="w-full p-2 border rounded mb-4">

                        <label for="flagURL" class="block text-sm font-semibold">Flag URL</label>
                        <input type="url" id="flagURL" name="flagURL" placeholder="Enter flag image URL" class="w-full p-2 border rounded mb-4">

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
                    <form id="playerForm">
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
                        <div class="grid grid-cols-2 gap-2">
                            <div class="mb-4">
                                <label for="playerClub" class="block text-sm font-medium">Club</label>
                                <input type="text" id="playerClub" name="playerClub" class="w-full border rounded px-3 py-2 mt-1" placeholder="Enter player club" />
                            </div>
                            <div class="mb-4">
                                <label for="playerNationality" class="block text-sm font-medium">Nationality</label>
                                <input type="text" id="playerNationality" name="playerNationality" class="w-full border rounded px-3 py-2 mt-1" placeholder="Enter player nationality" />
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
                    <form id="goalkeeperForm">
                        <div class="mb-4">
                            <label for="goalkeeperName" class="block text-sm font-medium">Goalkeeper Name</label>
                            <input type="text" id="goalkeeperName" name="goalkeeperName" class="w-full border rounded px-3 py-2 mt-1" placeholder="Enter goalkeeper name" />
                        </div>
                        <div class="grid grid-cols-2 gap-2">
                            <div class="mb-4">
                                <label for="goalkeeperClub" class="block text-sm font-medium">Club</label>
                                <input type="text" id="goalkeeperClub" name="goalkeeperClub" class="w-full border rounded px-3 py-2 mt-1" placeholder="Enter goalkeeper club" />
                            </div>
                            <div class="mb-4">
                                <label for="goalkeeperNationality" class="block text-sm font-medium">Nationality</label>
                                <input type="text" id="goalkeeperNationality" name="goalkeeperNationality" class="w-full border rounded px-3 py-2 mt-1" placeholder="Enter goalkeeper nationality" />
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
    <script src="/script_dashboard.js"></script>
</body>

</html>