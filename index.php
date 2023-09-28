<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Sasha2844 - Neverland Universe</title>
        <!---- Style Link ---->
        <link rel="stylesheet" href="style.css" />
        <!---- CDN Links ---->
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
        <script src="https://kit.fontawesome.com/7ea424b8bb.js" crossorigin="anonymous"></script>
    </head>
    <body>

        <!---- Navigation Section ---->
        <nav>
            <input type="checkbox" name="check" id="check">
            <label for="check"><i class="fa-solid fa-bars"></i></label>
            <!---- Navigations List ---->
            <ul>
                <li><a href="#main">Utama</a></li>
                <li><a href="#map">Peta</a></li>
                <li><a href="#characters">Karakter</a></li>
                <li><a href="#credits">Kredit</a></li>
                <li><a href="#contact">Kontak</a></li>
                <li class="dropdown">Join<i class="fa-solid fa-caret-down"></i>
                    <div class="drop-ls">
                        <a href="join.html#register">Register</a>
                        <a href="join.html#login">Log-in</a>
                    </div>
                </li>
            </ul>
        </nav>

        <!---- Displayer Section ---->
        <div id="main" class="displayer">
            <img src="img/queens_cover.jpeg" alt="Queens Cover">
            <ul>
                <li><span class="title">Judul : </span></span class="title-text">Queen's Saga:Beloved Childs</span></li>
                <li><span class="author">By Masagus Ahmad R.</span></li>
            </ul>
            <button><a href="https://editor.reedsy.com/s/jCGJEg5" target="_blank"><span>Baca</span><i class="fa-solid fa-download"></i></a></button>
            <button><a href="https://file.io/P4GwKE7Nm38S" target="_blank"><span>Unduh</span><i class="fa-brands fa-readme"></i></a></button>
            <button><a href="#info-overlay"><span>Informasi</span><i class="fa-solid fa-circle-info"></i></a></button>
            <!---- Information Overlay ---->
            <div id="info-overlay">
                <button><a href="#"><i class="fa-solid fa-x"></i></a></button>
                <div class="info-container">
                    <h2>Informasi :</h2>
                    <div class="side box-1">
                        <span>Judul</span><br>
                        <span>Author</span><br>
                        <span>Jumlah Halaman</span><br>
                        <span>Jumlah Bab</span><br>
                        <span>Genre</span><br>
                        <span>Tipe</span><br>
                        <span>Sinopsis</span>
                    </div>
                    <div class="side box-2">
                        <span>: Queen's Saga:Beloved Childs</span><br>
                        <span>: Masagus Ahmad R.</span><br>
                        <span>: 64 Halaman</span><br>
                        <span>: 14 Bab</span><br>
                        <span>: Historical-Fiction/Fantasy/Romance</span><br>
                        <span>: Online Novel</span><br>
                        <span>: -</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="line"></div>
        
        <!---- Map Section ---->
        <div id="map">
            <h2 class="subhead">Peta :</h2>
            <div class="map-container">
                <!---- Map Left Side : Map Thumbnail ---->
                <div class="map-box">
                    <a href="#map-overlay"><img src="img/vollenvorth_map.jpg" alt="Vonllenvorth Map"></a>
                    <!---- Map Overlay ---->
                    <div id="map-overlay">
                        <p><img src="img/vollenvorth_map.jpg" alt="Vollenvorth Map"></p>
                        <button><a href="#map"><i class="fa-solid fa-x"></i></a></button>
                    </div>
                </div>
                <!---- Map Right Side : Region Description ---->
                <div class="map-box">
                    <!---- Regions Navigation ---->
                    <div class="radio-region">
                        <input type="radio" name="reg" id="dorchester" value="dorchestre" onclick="regionDesc('1')"><label for="dorchester">Dorchester</label>
                        <input type="radio" name="reg" id="höfferlandt" value="höfferlandt" onclick="regionDesc('2')"><label for="höfferlandt">Höfferlandt</label>
                        <input type="radio" name="reg" id="sciermicz" value="sciermicz" onclick="regionDesc('3')"><label for="sciermicz">Sciermicz</label>
                        <input type="radio" name="reg" id="aeslarent" value="aeslarent" onclick="regionDesc('4')"><label for="aeslarent">Aeslarent</label>
                    </div>
                    <!---- Regions Description ---->
                    <?php

                    $regData = file_get_contents("Datas/reg-data.json");
                    $regions = json_decode($regData, true);

                    for ($i = 0; $i < count($regions); $i++) {
                        echo '<div class="desc-box" id="reg-' . ($i + 1) . '">
                        <h3>' . $regions[$i]["reg"] . '</h3>
                        <p><b>Iklim : </b>' . $regions[$i]["ikl"] . '<br></p>
                        <b>Sistem Pemerintahan : </b>' . $regions[$i]["sis"] . '<br>
                        <b>Karakteristik : </b>' . $regions[$i]["kar"] . '<br>
                        <b>Geografi : </b>' . $regions[$i]["geo"] . '<br>
                        <b>Profesi : </b>' . $regions[$i]["prof"] . '<br>
                        <b>Data : </b>' . $regions[$i]["dat"] . '<br>
                        <b>Provinsi : </b>
                        <ul>';
                        for ( $j = 0; $j < count($regions[$i]["prov"]); $j++) {
                            echo '<li>' . $regions[$i]["prov"][$j] . '</li>';
                        };
                        echo '</ul></p>
                        </div>';
                    };

                    ?>
                </div>
            </div>
        </div>

        <div class="line"></div>

        <!---- Character Section ---->
        <div id="characters">
            <h2 class="subhead">Karakter :</h2>
            <div class="char-container" id="char-container">
                <?php

                $charData = file_get_contents("Datas/char-data.json");
                $characters = json_decode($charData, true);

                for ($i = 0; $i < count($characters); $i++) {
                    echo '<div class="char-box">
                    <img class="image' . $characters[$i]["index"] . '" src="img/Characters/' . $characters[$i]["index"] . '.jpeg">
                    <p class="caption' . $characters[$i]["index"] . '">
                    <span>' . $characters[$i]["name"] . '</span><br>
                    <span>' . $characters[$i]["age"] . ' Tahun</span><br>
                    <span>Dari ' . $characters[$i]["from"] . '</span><br>
                    <span>' . $characters[$i]["label"] . '</span><br>
                    </p>
                    </div>';
                };

                ?>
            </div>
        </div>

        <div class="line"></div>

        <!---- Credit Section ---->
        <div id="credits">
            <h2 class="subhead">Kredit :</h2>
            <div class="credits-container">
                <?php

                $creditData = file_get_contents("Datas/credit-data.json");
                $credits = json_decode($creditData, true);

                for ($i = 0; $i < count($credits); $i++) {
                    echo '<div class="credits-box">
                    <h4>' . $credits[$i]["role"] . ' :</h4>
                    <ul>';
                    for ( $j = 0 ; $j < count($credits[$i]["names"]); $j++) {
                        echo '<li>' . $credits[$i]["names"][$j] . '</li>';
                    };
                    echo '</ul>
                    </div>';
                };

                ?>
            </div>
        </div>

        <!---- Footer + Contact Section ---->
        <footer id="contact">
            <h4>Follow Us :</h4>
            <ul>
                <li><a href="https://web.whatsapp.com/" target="_blank"><i class="fa-brands fa-whatsapp"></i></a></li>
                <li><a href="https://www.instagram.com/masagus_ahmad_r/" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                <li><a href="https://github.com/Ashonst2844" target="_blank"><i class="fa-brands fa-github"></i></a></li>
                <li><a href="https://discord.gg/yaRpZZV8" target="_blank"><i class="fa-brands fa-discord"></i></a></li>
                <li><a href="https://www.linkedin.com/in/mang-agui-792462279/" target="_blank"><i class="fa-brands fa-linkedin"></i></a></li>
            </ul>
            <span>Copyright &copy; 2023 <b>Sasha2844</b> | All Rights Reserved.</span>
        </footer>

        <!---- Script Link ---->
        <script src="main.js"></script>
        <script src="jquery.js"></script>
    </body>
</html>