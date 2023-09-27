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
            <button><a href="https://editor.reedsy.com/s/4KHMnQp/r/ZHS_y81b4yqgKpUB/copyright" target="_blank"><span>Baca</span><i class="fa-solid fa-download"></i></a></button>
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
                    <div class="desc-box" id="reg-1">
                        <h3>Dorchester</h3>
                        <pPedagang><b>Iklim</b> : Tropis<br>
                        <b>Sistem Pemerintahan</b> : Monarki Konstitusional<br>
                        <b>Karakteristik</b> : Dorchester adalah negara paling yang terbuka, yang menciptakan hubungan yang sangat erat dengan negara lain.<br> 
                        <b>Geografi</b> : Dataran Dorchester sangat indah, bunga warna-warni menyelimuti beberapa wilayah di negara ini, Dorchester dikelilingi oleh pegunungan yang menjulang tinggi, bahkan gunung tertinggi yang sangat bersejarah berada di negara ini.<br>
                        <b>Profesi</b> : [Pedagang, Petani, Nelayan, Pemburu]<br>
                        <b>Data</b> : luas Dorchester adalah sekitar ±6,95 juta Km² dengan jumlah penduduk hanya ±8 juta jiwa.<br>
                        <b>Provinsi</b> :
                        <ul>
                            <li>Central Dorchester : [Arial City, Cantera Town, Virgia City, Librana Wasteland]</li>
                            <li>West Dorchester : [Aquoust Harbor, Piscia Town, Sagitia Town, Capricia City]</li>
                            <li>East Dorchester : [Scorpia City, Leox Land, Geminia Town, Torro Town]</li>
                        </ul></p>
                    </div>
                    <div class="desc-box" id="reg-2">
                        <h3>Höfferlandt</h3>
                        <p><b>Iklim</b> : Tropis<br>
                        <b>Sistem Pemerintahan</b> : Monarki Konstitusional<br>
                        <b>Karakteristik</b> : Höfferlandt adalah negara yang tidak cukup berkembang jika dibandingkan dengan negara-negara tetangganya, bentuk struktur bangunannya, budaya leluhurnya masih sangat kuno disana, oleh karena itu, Höfferlandt menjadi negara yang cukup tertutup, tetapi negara ini adalah negara yang paling indah di Vollenvorth.<br> 
                        <b>Geografi</b> : Daratan Höfferlandt memiliki dua wajah, Sebelah utara sebagai dataran yang dipenuhi dengan pepohonan dan pantai sedangkan di sebelah selatan yang diselimuti dengan padang pasir yang tandus dan oasis beberapa titik di selatan.<br>
                        <b>Profesi</b> :<br>
                        ->Utara : [Nelayan, Petani, Pedagang]<br>
                        ->Selatan : [Pengemara, Penjual Unta, Pedagang]<br>
                        <b>Data</b> : Höfferlandt adalah negara paling terkecil di Vollenvorth tetapi memiliki penduduk padat, luasnya hanya mencapai ±3,9 dan memiliki penduduk ±7 juta jiwa.<br>
                        <b>Provinsi</b> :
                        <ul>
                            <li>Friaize : [Monorith Town, Forbidden Badlands]</li>
                            <li>Arlbech : [Vorakh Town, Diluçon Valley, Villión Town]</li>
                            <li>Le Cathèl : [Astrunada City, Lunara City]</li>
                            <li>Flandre : [Caravan City, Nariyah City]</li>
                        </ul></p>
                    </div>
                    <div class="desc-box" id="reg-3">
                        <h3>Sciermicz</h3>
                        <Pedagang><b>Iklim</b> : Tropis<br>
                        <b>Sistem Pemerintahan</b> : Monarki Konstitusional<br>
                        <b>Karakteristik</b> : Sciermicz adalah negara yang sangat terbuka, ia memiliki hubungan yang erat dengan negara lain karena sering membantu negara yang sedang dalam masa sulit.<br>
                        <b>Geografi</b> : Dengan datarannya yang rendah Sciermicz adalah negara yang memiliki wilayah terbesar diantara semua negara di benua Vollenvorth, tetapi dengan jumlah penduduk yang cukup sedikit, hampir seluruh wilayahnya dipenuhi dengan rerumputan yang hijau dan hutan belantara yang luas.<br>
                        <b>Profesi</b> : [Pedagang, Pengrajin Kayu, Pengembara]<br>
                        <b>Data</b> : luas Sciermicz adalah ±7,55 juta Km² dengan jumlah penduduk hanya ±8,6 juta  jiwa.<br>
                        <b>Provinsi</b> :
                        <ul>
                            <li>Northwich : [Ashér City, Mount Fjördth]</li>
                            <li>Béthune : [Viedma City, Jimara City]</li>
                            <li>Autréche : [Bithvia City, Sigils Land]</li>
                            <li>Alttentheich : [Xioth Waste, Nivara City, Tigma City]</li>
                            <li>Auxérre : [Bovus Valley, Venyr City]</li>
                        </ul></p>
                    </div>
                    <div class="desc-box" id="reg-4">
                        <h3>Aeslarent</h3>
                        <Militer><b>Iklim</b> : Dingin<br>
                        <b>Sistem Pemerintahan</b> : Monarki Mutlak<br>
                        <b>Karakteristik</b> : Aeslarenth adalah negara yang sangat tertutup, namun, walaupun tertutup, ia tetap akan membantu negara lain jika dalam masalah yang mendesak, dan kebiasaan dari negara ini adalah wajibnya bagi anak laki-laki untuk mendapatkan pendidikan wajib militer sejak dini, oleh sebab itu, negara Aeslarenth adalah negara paling kuat di Vollevorth.<br> 
                        <b>Geografi</b> : Aeslarenth memiliki cuaca yang sangat dingin hampir sekitar 70% wilayah disini selalu ditutupi salju, dan dikelilingi dengan gunung yang tinggi dan lembah yang sangat curam, menambah kesan dari besarnya kekuatan dan kengerian negara ini.<br>
                        <b>Profesi</b> : [Militer, Pedagang]<br>
                        <b>Data</b> : Luas dari negara ini adalah ±4,2 juta Km², dengan jumlah penduduk ±6,3 juta jiwa<br>
                        <b>Provinsi</b> :
                        <ul>
                            <li>Röchdale : [Savansa Town, Viraaz Town, Northem Valley]</li>
                            <li>Amarath : [Blythery Canyon, Northhollow, Ecrin Town, Cryis Town]</li>
                        </ul></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="line"></div>

        <!---- Character Section ---->
        <div id="characters">
            <h2 class="subhead">Karakter :</h2>
            <div class="char-container" id="char-container">
                <?php

                $charData = file_get_contents("char-data.json");
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
                <div class="credits-box">
                    <h4>Story/Idea Planner:</h4>
                    <ul>
                        <li>Masagus Ahmad R.</li>
                        <li>Irsan Atha Khalid</li>
                    </ul>
                </div>
                <div class="credits-box">
                    <h4>Cover Artist:</h4>
                    <ul>
                        <li>Masagus Ahmad R.</li>
                    </ul>
                </div>
                <div class="credits-box">
                    <h4>Writer:</h4>
                    <ul>
                        <li>Masagus Ahmad R.</li>
                    </ul>
                </div>
                <div class="credits-box">
                    <h4>Proofreaders:</h4>
                    <ul>
                        <li>Jakaria Arjuna Dipa</li>
                        <li>M. Fabian Ali Messi</li>
                    </ul>
                </div>
                <div class="credits-box">
                    <h4>Illustrators:</h4>
                    <ul>
                        <li>Masagus Ahmad R.</li>
                        <li>Fatimah Az Azahra Isk.</li>
                    </ul>
                </div>
                <div class="credits-box">
                    <h4>Reviewer/Advisor:</h4>
                    <ul>
                        <li>M. Adli Banyu</li>
                        <li>M. Fabian Ali Messi</li>
                        <li>Irsan Atha Khalid</li>
                    </ul>
                </div>
                <div class="credits-box">
                    <h4>Translator:</h4>
                    <ul>
                        <li>M. Adli Banyu</li>
                        <li>Latetia Irene Satriawan</li>
                    </ul>
                </div>
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