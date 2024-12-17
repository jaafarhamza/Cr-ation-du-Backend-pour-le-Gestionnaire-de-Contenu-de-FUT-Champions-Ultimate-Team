<?php
require './DB_conn.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link
        href="https://cdn.jsdelivr.net/npm/tailwindcss@3.3.3/dist/tailwind.min.css"
        rel="stylesheet" />
    <link
        rel="icon"
        type="image/x-icon"
        href="/Champions-Web-App-Ultimate-Team/assest/Southernhay_Chambers_logo-1.svg" />
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>"/>
    <title>Squad Tactic</title>
</head>

<body
    class="bg-[url('/Champions-Web-App-Ultimate-Team/assest/last.jpg')] max-w-screen min-h-screen bg-cover bg-center bg-no-repeat h-full w-screen backdrop-blur-sm backdrop-brightness-[0.7]">
    <div class="flex items-center justify-between mx-auto">
        <nav
            class="bg-[rgb(255,255,255,0)] bg-[linear-gradient(0deg,_rgba(255,255,255,0)_0%,_rgba(0,0,0,1)_100%)] justify-center items-center w-full p-4 sm:flex sm:items-center sm:justify-around flex">
            <div
                class="logo w-full flex justify-around items-center gap-48 sm:flex sm:items-center sm:justify-around md:w-auto">
                <a href="/Champions-Web-App-Ultimate-Team/index.html">
                    <img
                        src="/Champions-Web-App-Ultimate-Team/assest/Southernhay_Chambers_logo-1.svg"
                        alt="Squad Tactic"
                        class="w-8" />
                </a>
                <button
                    data-collapse-toggle="navbar-default"
                    type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="navbar-default"
                    aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg
                        class="w-5 h-5"
                        aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 17 14">
                        <path
                            stroke="currentColor"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
            </div>

            <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                <ul
                    class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0">
                    <li>
                        <a
                            href="/Champions-Web-App-Ultimate-Team/index.html"
                            class="block py-2 px-3 text-white bg-green-300 rounded md:bg-transparent md:text-green-300 md:p-0 dark:text-white md:dark:text-green-300"
                            aria-current="page">Home</a>
                    </li>
                    <li>
                        <a
                            href="#"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-green-300 md:p-0 dark:text-white md:dark:hover:text-green-300 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">About</a>
                    </li>
                    <li>
                        <a
                            href="#"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-green-300 md:p-0 dark:text-white md:dark:hover:text-green-300 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Services</a>
                    </li>
                    <li>
                        <a
                            href="#"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-green-300 md:p-0 dark:text-white md:dark:hover:green-300 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Pricing</a>
                    </li>
                    <li>
                        <a
                            href="#"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-green-300 md:p-0 dark:text-white md:dark:hover:text-green-300 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    <div class="ml-12 mt-4 lg:ml-52 ease-out duration-1000 ">
        <a href="/index.html">
            <p class="flex items-center gap-1 text-gray-500 text-sm font-bold">
                Home
                <span class="pt-[0.16rem]"><img
                        src="/Champions-Web-App-Ultimate-Team/assest/arrow_forward_ios_24dp_E8EAED_FILL0_wght400_GRAD0_opsz24.svg"
                        alt="" /></span><span class="pt-[0.15rem]">EA FC 25 Tactics & Formations</span>
            </p>
        </a>
        <h2 class="text-2xl font-bold text-white">
            EA FC 25 Tactics & Formations
        </h2>
        <p class="text-white font-light">Build Custom Tactics & Formations</p>
    </div>

    <section
        class="w-screen h-full bg-[rgba(1,1,1,0)] bg-[linear-gradient(180deg,_rgba(124,124,124,9)_0%,_rgba(255,255,255,0)_0%,_rgba(40,40,41,9)_60%,_rgba(40,40,40,1)_100%)] bg-cover bg-center bg-no-repeat justify-center items-center flex flex-col gap-x-[5px] gap-y-[5px]">
        <!-- terain -->
        <div class=" grid ">
            <div
                 class="entreneur w-screen h-screen bg-no-repeat bg-contain bg-center grid place-content-center sm:pl-28 sm:pr-28 lg:pr-60 lg:pl-60 md:w-full lg:w-screen lg:h-screen ">
                <div
                    class="player ST bg-[url('/Champions-Web-App-Ultimate-Team/assest/download.webp')]  bg-no-repeat bg-cover bg-center flex justify-center flex-col">
                    <img src="" alt="" />
                    <p class="nomST text-xs "></p>
                    <span>ST</span>
                </div>
                <div
                    class="player LW bg-[url('/Champions-Web-App-Ultimate-Team/assest/download.webp')] bg-no-repeat bg-cover bg-center flex justify-center flex-col">
                    <img src="" alt="" />
                    <p class="nomLW bg-black rounded-md text-xs"></p>
                    <span>LW</span>
                </div>
                <div
                    class="player RW bg-[url('/Champions-Web-App-Ultimate-Team/assest/download.webp')] bg-no-repeat bg-cover bg-center flex justify-center flex-col">
                    <img src="" alt="" />
                    <p class="nomRW bg-black rounded-md text-xs"></p>
                    <span>RW</span>
                </div>
                <div
                    class="player CM3 bg-[url('/Champions-Web-App-Ultimate-Team/assest/download.webp')] bg-no-repeat bg-cover bg-center flex justify-center flex-col">
                    <img src="" alt="" />
                    <p class="nomCM3 bg-black rounded-md text-xs"></p>
                    <span>CM</span>
                </div>
                <div
                    class="player CM2 bg-[url('/Champions-Web-App-Ultimate-Team/assest/download.webp')] bg-no-repeat bg-cover bg-center flex justify-center flex-col">
                    <img src="" alt="" />
                    <p class="nomCM2 bg-black rounded-md text-xs"></p>
                    <span>CM</span>
                </div>
                <div
                    class="player CM1 bg-[url('/Champions-Web-App-Ultimate-Team/assest/download.webp')] bg-no-repeat bg-cover bg-center flex justify-center flex-col">
                    <img src="" alt="" />
                    <p class="nomCM1 bg-black rounded-md text-xs"></p>
                    <span>CM</span>
                </div>
                <div
                    class="player LB bg-[url('/Champions-Web-App-Ultimate-Team/assest/download.webp')] bg-no-repeat bg-cover bg-center flex justify-center flex-col">
                    <img src="" alt="" />
                    <p class="nomLB bg-black rounded-md text-xs"></p>
                    <span>LB</span>
                </div>
                <div
                    class="player RB bg-[url('/Champions-Web-App-Ultimate-Team/assest/download.webp')] bg-no-repeat bg-cover bg-center flex justify-center flex-col">
                    <img src="" alt="" />
                    <p class="nomRB bg-black rounded-md text-xs"></p>
                    <span>RB</span>
                </div>
                <div
                    class="player CB2 bg-[url('/Champions-Web-App-Ultimate-Team/assest/download.webp')] bg-no-repeat bg-cover bg-center flex justify-center flex-col">
                    <img src="" alt="" />
                    <p class="nomCB2 bg-black rounded-md text-xs"></p>
                    <span>CB2</span>
                </div>
                <div
                    class="player CB1 bg-[url('/Champions-Web-App-Ultimate-Team/assest/download.webp')] bg-no-repeat bg-cover bg-center flex justify-center flex-col">
                    <img src="" alt="" />
                    <p class="nomCB1 bg-black rounded-md text-xs"></p>
                    <span>CB1</span>
                </div>
                <div
                    class="player GK bg-[url('/Champions-Web-App-Ultimate-Team/assest/download.webp')] bg-no-repeat bg-cover bg-center flex justify-center flex-col">
                    <img src="" alt="" />
                    <p class="nomGK bg-black rounded-md text-xs"></p>
                    <span>GK</span>
                </div>
            </div>
        </div>

        <!-- substitutes -->

        <div
            id="sub"
            class=" pl-9 pr-9 flex flex-wrap justify-center items-start">
            <div class="substitutesSQ hidden">
                <div
                    class="bg-[url('/Champions-Web-App-Ultimate-Team/assest/BADGE/badge_gold.webp')] bg-center bg-no-repeat bg-cover w-[25vh] max-h-full">
                    <div
                        class="grid place-content-center grid-cols-[1fr] grid-rows-[repeat(3,_1fr)] gap-x-[5px] gap-y-[5px] mt-[-5px]">
                        <div
                            class="[grid-area:1_/_1_/_3_/_2] flex items-center justify-around">
                            <img
                                src=""
                                alt=""
                                class="photoPlayers w-[15.5vh] pt-[60px] relative" />
                            <div class="flex flex-col items-center absolute pr-32 pl-2">
                                <p class="rating text-3xl font-bold"></p>
                                <p class="position font-semibold text-lg mt-[-7px]"></p>
                            </div>
                            <img src="" alt="" class="photoNation absolute pr-32 pt-36" />
                            <img
                                src=""
                                alt=""
                                class="photoClub absolute pt-36 pl-[125px]" />
                        </div>

                        <div
                            class="[grid-area:3_/_1_/_4_/_2] flex flex-col items-center justify-between mt-[-7px]">
                            <div>
                                <p class="name text-lg font-bold"></p>
                            </div>
                            <div
                                class="flex items-center justify-between gap-[8px] pb-[40px] pl-3 pr-3">
                                <div class="flex flex-col items-center leading-4">
                                    <p class="font-semibold text-[10px]">PAC</p>
                                    <p class="pace font-bold text-[14px]"></p>
                                </div>
                                <div class="flex flex-col items-center leading-4">
                                    <p class="font-semibold text-[10px]">SHO</p>
                                    <p class="shooting font-bold text-[14px]"></p>
                                </div>
                                <div class="flex flex-col items-center leading-4">
                                    <p class="font-semibold text-[10px]">PAS</p>
                                    <p class="passing font-bold text-[14px]"></p>
                                </div>
                                <div class="flex flex-col items-center leading-4">
                                    <p class="font-semibold text-[10px]">DRI</p>
                                    <p class="dribbling font-bold text-[14px]"></p>
                                </div>
                                <div class="flex flex-col items-center leading-4">
                                    <p class="font-semibold text-[10px]">DEF</p>
                                    <p class="defending font-bold text-[14px]"></p>
                                </div>
                                <div class="flex flex-col items-center leading-4">
                                    <p class="font-semibold text-[10px]">PHY</p>
                                    <p class="physical font-bold text-[14px]"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="substitutesGK hidden">
                <div
                    class="bg-[url('/Champions-Web-App-Ultimate-Team/assest/BADGE/badge_gold.webp')] bg-center bg-no-repeat bg-cover w-[25vh] max-h-full">
                    <div
                        class="grid place-content-center grid-cols-[1fr] grid-rows-[repeat(3,_1fr)] gap-x-[5px] gap-y-[5px] mt-[-5px]">
                        <div
                            class="[grid-area:1_/_1_/_3_/_2] flex items-center justify-around">
                            <img
                                src=""
                                alt=""
                                class="photoPlayers w-[15.5vh] pt-[60px] relative" />
                            <div class="flex flex-col items-center absolute pr-32 pl-2">
                                <p class="rating text-3xl font-bold"></p>
                                <p class="position font-semibold text-lg mt-[-7px]"></p>
                            </div>
                            <img src="" alt="" class="photoNation absolute pr-32 pt-36" />
                            <img
                                src=""
                                alt=""
                                class="photoClub absolute pt-36 pl-[125px]" />
                        </div>

                        <div
                            class="[grid-area:3_/_1_/_4_/_2] flex flex-col items-center justify-between">
                            <div>
                                <p class="name text-lg font-bold mt-[-7px]"></p>
                            </div>
                            <div
                                class="flex items-center justify-between gap-[8px] pb-[41px]">
                                <div class="flex flex-col items-center leading-4">
                                    <p class="font-semibold text-[10px]">DIV</p>
                                    <p class="diving font-bold text-[14px]"></p>
                                </div>
                                <div class="flex flex-col items-center leading-4">
                                    <p class="font-semibold text-[10px]">HAN</p>
                                    <p class="handling font-bold text-[14px]"></p>
                                </div>
                                <div class="flex flex-col items-center leading-4">
                                    <p class="font-semibold text-[10px]">KIC</p>
                                    <p class="kicking font-bold text-[14px]"></p>
                                </div>
                                <div class="flex flex-col items-center leading-4">
                                    <p class="font-semibold text-[10px]">REF</p>
                                    <p class="reflexes font-bold text-[14px]"></p>
                                </div>
                                <div class="flex flex-col items-center leading-4">
                                    <p class="font-semibold text-[10px]">SPD</p>
                                    <p class="speed font-bold text-[14px]"></p>
                                </div>
                                <div class="flex flex-col items-center leading-4">
                                    <p class="font-semibold text-[10px]">POS</p>
                                    <p class="positioning font-bold text-[14px]"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div id="popup" class="popup hidden fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center flex-col flex-wrap">
        <div id="popupContent" class="relative flex frex-col justify-center flex-wrap  bg-green-300 text-white px-6 py-2 rounded-2xl shadow-md  p-4 w-screen sm:w-[40vw] bg-opacity-20  backdrop-blur-sm border-gray-300 border ">
            <button
                type="button"
                id="closePopup"
                class="mt-4 bg-red-500 text-white px-4 py-2 rounded-md absolute bottom-2 right-2 ">
                Close
            </button>
        </div>
    </div>


    <script src="/Champions-Web-App-Ultimate-Team/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>