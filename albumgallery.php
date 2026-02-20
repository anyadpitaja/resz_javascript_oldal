<!DOCTYPE html>
<html lang="hu">

<head>
    <link rel="stylesheet" href="esportstyle.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Album galléria</title>
</head>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "albumprojekt";
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM gallery";
$result = mysqli_query($conn, $sql);


$cimek = [];
$mufajok = [];
$artists = [];
$links = [];
$kiadasok = [];
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $cimek[] = $row["cim"];
        $mufajok[] = $row["mufaj"];
        $artists[] = $row["artist"];
        $links[] = $row["link"];
        $kiadasok[] = $row["kiadas"];
    }
}

?>

<body class="dark">
    <div class="cim">
        <h1>Album galléria</h1>
        <button onclick=toggleMode() id="gomb">Világos mód </button>
    </div>
    <div class="yap">
        <h1>galléria</h1>
        <p>Ezzen az oldalon az előzőleg bemutatott műfajokhoz megfelelő és más független műfajok albumjai is szerepelnek
        </p>
        <br>
        <p>Itt nincsenek hang minták hanem linkek lesznek amik az egész albumhoz vezetnek, a bemutatás is minimális és
            csak a meta információk szerepelnek</p>

    </div>

    <!-- Ezt ctrl + c, ctrl + v annyiszor amennyiszer kell-->
    <div class="albumcardcontainer">
        <div class="albumcard">
            <div class="kisalbumcover">
                <img src="https://upload.wikimedia.org/wikipedia/en/4/46/Music_for_Airports.jpg" alt="fosszar">
                <span><?php echo $cimek[9]; ?></span>
                <div class="balszoveg abracadabra">
                    <ul>
                        <li><?php echo $mufajok[9]; ?></li>
                        <li><?php echo $artists[9]; ?></li>
                        <li><?php echo $kiadasok[9]; ?></li>
                    </ul>
                </div>
            </div>
            <div class="nagyszoveg abracadabra">
                <span></span>
                <div class="linkszoveg abracadabra">
                    <a href='<?php echo $links[9]; ?>'>Link</a>
                </div>
            </div>
        </div>

        <div class="albumcard">
            <div class="kisalbumcover">
                <img src="https://upload.wikimedia.org/wikipedia/en/a/a5/The_Plateaux_of_Mirror.jpg" alt="fosszar">
                <span><?php echo $cimek[15]; ?></span>
                <div class="balszoveg abracadabra">
                    <ul>
                        <li><?php echo $mufajok[15]; ?></li>
                        <li><?php echo $artists[15]; ?></li>
                        <li><?php echo $kiadasok[15]; ?></li>
                    </ul>
                </div>
            </div>
            <div class="nagyszoveg abracadabra">
                <span></span>
                <div class="linkszoveg abracadabra">
                    <a href='<?php echo $links[15]; ?>'>Link</a>
                </div>
            </div>
        </div>

        <div class="albumcard">
            <div class="kisalbumcover">
                <img src="https://upload.wikimedia.org/wikipedia/en/2/28/Day_of_Radiance_2.jpg" alt="fosszar">
                <span><?php echo $cimek[3]; ?></span>
                <div class="balszoveg abracadabra">
                    <ul>
                        <li><?php echo $mufajok[3]; ?></li>
                        <li><?php echo $artists[3]; ?></li>
                        <li><?php echo $kiadasok[3]; ?></li>
                    </ul>
                </div>
            </div>
            <div class="nagyszoveg abracadabra">
                <span></span>
                <div class="linkszoveg abracadabra">
                    <a href='<?php echo $links[3]; ?>'>Link</a>
                </div>
            </div>
        </div>

        <div class="albumcard">
            <div class="kisalbumcover">
                <img src="https://upload.wikimedia.org/wikipedia/en/9/93/Brian_Eno_On_Land.jpg" alt="fosszar">
                <span><?php echo $cimek[10]; ?></span>
                <div class="balszoveg abracadabra">
                    <ul>
                        <li><?php echo $mufajok[10]; ?></li>
                        <li><?php echo $artists[10]; ?></li>
                        <li><?php echo $kiadasok[10]; ?></li>
                    </ul>
                </div>
            </div>
            <div class="nagyszoveg abracadabra">
                <span></span>
                <div class="linkszoveg abracadabra">
                    <a href='<?php echo $links[10]; ?>'>Link</a>
                </div>
            </div>
        </div>

        <div class="albumcard">
            <div class="kisalbumcover">
                <img src="https://f4.bcbits.com/img/a0328474783_10.jpg" alt="fosszar">
                <span><?php echo $cimek[11]; ?></span>
                <div class="balszoveg abracadabra">
                    <ul>
                        <li><?php echo $mufajok[11]; ?></li>
                        <li><?php echo $artists[11]; ?></li>
                        <li><?php echo $kiadasok[11]; ?></li>
                    </ul>
                </div>
            </div>
            <div class="nagyszoveg abracadabra">
                <span></span>
                <div class="linkszoveg abracadabra">
                    <a href='<?php echo $links[11]; ?>'>Link</a>
                </div>
            </div>
        </div>

        <div class="albumcard">
            <div class="kisalbumcover">
                <img src="https://upload.wikimedia.org/wikipedia/en/e/e8/Lustmord-heresy-cdcover.jpg" alt="fosszar">
                <span><?php echo $cimek[5]; ?></span>
                <div class="balszoveg abracadabra">
                    <ul>
                        <li><?php echo $mufajok[5]; ?></li>
                        <li><?php echo $artists[5]; ?></li>
                        <li><?php echo $kiadasok[5]; ?></li>
                    </ul>
                </div>
            </div>
            <div class="nagyszoveg abracadabra">
                <span></span>
                <div class="linkszoveg abracadabra">
                    <a href='<?php echo $links[5]; ?>'>Link</a>
                </div>
            </div>
        </div>
    </div>
    <div class="navibar">
        <a href="furcsazenek.html" class="navibargombok">Főoldal</a>
        <a href="mufajok.html" class="navibargombok">Műfajok</a>
        <a href="albumgallery.php" class="navibargombok">Album galléria</a>
    </div>
    <script src="projekt.js"></script>
</body>

</html>