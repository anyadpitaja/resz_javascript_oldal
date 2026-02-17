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
if (mysqli_num_rows($result) > 0){
    while ($row = mysqli_fetch_assoc($result)){
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
        <br>
        <ul>
            <li>Ambient: </li>
            <li>Music for Airports</li>
            <li>Permafrost</li>
            <li>Purifying Fire</li>
            <li>Heresy</li>
            <li>Lowercase: </li>
            <li>Forms of Paper</li>
            <li>Shimmer/...</li>
            <li>...</li>
            <li>Microsounds: </li>
            <li>Dataplex</li>
            <li>Time machine</li>
            <li>...</li>
            <li>Breakcore: </li>
            <li>Nostril</li>
            <li>Rossz Csillag alatt született</li>
            <li>WLFGRL</li>
            <li>Soundcollage: </li>
            <li>Revolutionary Pekenise Opera</li>
            <li>Calanix 5</li>
            <li>...</li>
            <li></li>
        </ul>
    </div>

    <!-- Ezt ctrl + c, ctrl + v annyiszor amennyiszer kell-->
    <div class="albumcard">
        <div class="kisalbumcover">
            <img src="Névtelen.png" alt="placeholder">
            <span><?php echo $cimek[0]?></span>
            <div class="balszoveg abracadabra">
                <ul>
                    <li><?php echo $mufajok[0]?></li>
                    <li><?php echo $artists[0]?></li>
                    <li><?php echo $kiadasok[0]?></li>
                </ul>
            </div>
        </div>
        <div class="nagyszoveg abracadabra">
            <span>apad</span>
            <div class="linkszoveg abracadabra">
                <a href='<?php echo $links[0]?>'>Link</a>
            </div>
        </div>
    </div>
        
    <div class="albumcard">
        <div class="kisalbumcover">
            <img src="Névtelen.png" alt="placeholder">
            <span>ez soha nem lesz kész!</span>
            <div class="balszoveg abracadabra">
                <ul>
                    <li>cickány1</li>
                    <li>cickány2</li>
                </ul>
            </div>
        </div>
        <div class="nagyszoveg abracadabra">
            <span>apad</span>
            <div class="linkszoveg abracadabra">
                <a href="">anád</a>
            </div>
        </div>
    </div>
    

    <script src="projekt.js"></script>
</body>

</html>