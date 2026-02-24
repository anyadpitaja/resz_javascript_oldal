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
                <img src="https://images.genius.com/687e598d9301433314676bd0bad8c316.1000x1000x1.png" alt="...Because Im Young Arrogant and Hate Everything You Stand For">
                <span><?php echo $cimek[0]; ?></span>
                <div class="balszoveg abracadabra">
                    <ul>
                        <li><?php echo $mufajok[0]; ?></li>
                        <li><?php echo $artists[0]; ?></li>
                        <li><?php echo $kiadasok[0]; ?></li>
                    </ul>
                </div>
            </div>
            <div class="nagyszoveg abracadabra">
                <span>Az együttes első albumja ami igazán nagy sikert és elismerést hozott. Kritikailag nem fogadták olyan jól a 2014- es WLFGRl albumjukat, viszont ez hozta összeségében a legtöbb halgatót</span>
                <div class="linkszoveg abracadabra">
                    <a href='<?php echo $links[0]; ?>'>Link</a>
                </div>
            </div>
        </div>

        <div class="albumcard">
            <div class="kisalbumcover">
                <img src="https://f4.bcbits.com/img/a2042124925_16.jpg" alt="A Blaze In The Northen Sky">
                <span><?php echo $cimek[1]; ?></span>
                <div class="balszoveg abracadabra">
                    <ul>
                        <li><?php echo $mufajok[1]; ?></li>
                        <li><?php echo $artists[1]; ?></li>
                        <li><?php echo $kiadasok[1]; ?></li>
                    </ul>
                </div>
            </div>
            <div class="nagyszoveg abracadabra">
                <span>Az albumon az együttesnek a norvég black metal színtéren nagy névnek számító Varg Vikernes írt több szöveget és zenei részt. Mivel Vikernes később több botrány része is volt ezért a banda elhatárolódott tőle</span>
                <div class="linkszoveg abracadabra">
                    <a href='<?php echo $links[1]; ?>'>Link</a>
                </div>
            </div>
        </div>

        <div class="albumcard">
            <div class="kisalbumcover">
                <img src="https://f4.bcbits.com/img/a1963147034_10.jpg" alt="Consume Red">
                <span><?php echo $cimek[2]; ?></span>
                <div class="balszoveg abracadabra">
                    <ul>
                        <li><?php echo $mufajok[2]; ?></li>
                        <li><?php echo $artists[2]; ?></li>
                        <li><?php echo $kiadasok[2]; ?></li>
                    </ul>
                </div>
            </div>
            <div class="nagyszoveg abracadabra">
                <span>A japán kisérleti és zaj zenének egyik megkerülhetetlen darabja, az album egyetlen hosszú számból áll. A zeneszámban a fő motívum négy saxsophone melódia ismétlése. A zene progresszívan lesz egyre zavarosabb és kisérletezőbb, a felénél éri el a legkatartikusabb részét ahol egy egész együttes szál rá a zenére.</span>
                <div class="linkszoveg abracadabra">
                    <a href='<?php echo $links[2]; ?>'>Link</a>
                </div>
            </div>
        </div>

        <div class="albumcard">
            <div class="kisalbumcover">
                <img src="https://cdn-images.dzcdn.net/images/cover/fc47afa30143788059bba53c49e9dfdd/0x1900-000000-80-0-0.jpg" alt="dataplex">
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
                <span>Minimalista és nagyon kisérletező album. Érdekesen használja fel a minimalista hangokat mint zenei motívum és ezzel kialakítva egy olyan hangzás világot ami sok embernek zavaró lehet, hosszabb távon fejfájás is lehetséges hiszen nagyon sokszor szerepelnek benne zavaróan magas stagnáló hangok</span>
                <div class="linkszoveg abracadabra">
                    <a href='<?php echo $links[3]; ?>'>Link</a>
                </div>
            </div>
        </div>

        <div class="albumcard">
            <div class="kisalbumcover">
                <img src="https://cdn-images.dzcdn.net/images/cover/471ecb5e41eee93b71bdedcbfe765082/0x1900-000000-80-0-0.jpg" alt="Day Of Radiance">
                <span><?php echo $cimek[4]; ?></span>
                <div class="balszoveg abracadabra">
                    <ul>
                        <li><?php echo $mufajok[4]; ?></li>
                        <li><?php echo $artists[4]; ?></li>
                        <li><?php echo $kiadasok[4]; ?></li>
                    </ul>
                </div>
            </div>
            <div class="nagyszoveg abracadabra">
                <span>Egy nagyon komor és nyomasztó hangzás szerepel az albumon, azt érezteti mintha egy sivatagban lennél és tudod előre hogy ott fogsz meghalni. A számok között minimális vágás észlelhető ezért halgatás közben el lehet könnyen veszíteni időérzékedet és meghalgatni a különböző számokat úgy, hogy egynek érződjön</span>
                <div class="linkszoveg abracadabra">
                    <a href='<?php echo $links[4]; ?>'>Link</a>
                </div>
            </div>
        </div>

        <div class="albumcard">
            <div class="kisalbumcover">
                <img src="https://cdn-images.dzcdn.net/images/cover/84ab3eb653275903b014b8ea6cf261bc/0x1900-000000-80-0-0.jpg" alt="Druksq">
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
                <span>Kisérletező album ami kilép a megszokott IDM zenéből és inkább Ambient formát ölt, több benne a zene amit az ember passzívan halgatna a hátérben mint aktívan oda figyelve és elemezve minden megmozdulást</span>
                <div class="linkszoveg abracadabra">
                    <a href='<?php echo $links[5]; ?>'>Link</a>
                </div>
            </div>
        </div>

        <div class="albumcard">
            <div class="kisalbumcover">
                <img src="https://images.genius.com/81316cbfbfdc7398b589a88f6de8c3b5.1000x1000x1.png" alt="Exmillitary">
                <span><?php echo $cimek[6]; ?></span>
                <div class="balszoveg abracadabra">
                    <ul>
                        <li><?php echo $mufajok[6]; ?></li>
                        <li><?php echo $artists[6]; ?></li>
                        <li><?php echo $kiadasok[6]; ?></li>
                    </ul>
                </div>
            </div>
            <div class="nagyszoveg abracadabra">
                <span>Rendkívül egyedi és fülbemászó mixtape album, sok fajta stílus van rajta ötvözve de viszont minden egyes számon észrevehető az abszurd hangzás amit eddig nem sokan értek el. Nagyon kisérletező az idejéhez képest és igazán könnyen tudja taszítani a halgatókat</span>
                <div class="linkszoveg abracadabra">
                    <a href='<?php echo $links[6]; ?>'>Link</a>
                </div>
            </div>
        </div>

        <div class="albumcard">
            <div class="kisalbumcover">
                <img src="https://f4.bcbits.com/img/a3589746424_16.jpg" alt="F# A# ∞">
                <span><?php echo $cimek[7]; ?></span>
                <div class="balszoveg abracadabra">
                    <ul>
                        <li><?php echo $mufajok[7]; ?></li>
                        <li><?php echo $artists[7]; ?></li>
                        <li><?php echo $kiadasok[7]; ?></li>
                    </ul>
                </div>
            </div>
            <div class="nagyszoveg abracadabra">
                <span>Egy remek album ami nagyon jól használja fel a Spiderland által lefektetett alapokat. A zenék teljesen instrumentálisak és a megszokott Rock zenei hangszerek kiegészülnek: hegedűkkel, zongorákkal és szinfónikus hangszerrel ahogyan szétvágott hangfelvételekkel is</span>
                <div class="linkszoveg abracadabra">
                    <a href='<?php echo $links[7]; ?>'>Link</a>
                </div>
            </div>
        </div>

        <div class="albumcard">
            <div class="kisalbumcover">
                <img src="https://f4.bcbits.com/img/a0234568232_16.jpg" alt="fosszar">
                <span><?php echo $cimek[8]; ?></span>
                <div class="balszoveg abracadabra">
                    <ul>
                        <li><?php echo $mufajok[8]; ?></li>
                        <li><?php echo $artists[8]; ?></li>
                        <li><?php echo $kiadasok[8]; ?></li>
                    </ul>
                </div>
            </div>
            <div class="nagyszoveg abracadabra">
                <span>Nagyon sötét viszont egészen művészi hangzás világot kölcsönöz az album. Miközben az ember halgatja teljesen összefolynak a számok közötti tér és feltünés mentesen halad az elejétől a végéig megfogva azt az érzést amit a címe 'Heresy' is ad</span>
                <div class="linkszoveg abracadabra">
                    <a href='<?php echo $links[8]; ?>'>Link</a>
                </div>
            </div>
        </div>

        <div class="albumcard">
            <div class="kisalbumcover">
                <img src="https://f4.bcbits.com/img/a3733775472_16.jpg" alt="fosszar">
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
                <span>Egy nagyon rövid viszont nagyon kiváló EBM album ami az elején nem is de végén igazán jó ritmusával képes halgatásra bírni. Erős a ritmusa akár egy durvább Techno albumnak viszont a szövege érdekes témákat dolgoz fel</span>
                <div class="linkszoveg abracadabra">
                    <a href='<?php echo $links[9]; ?>'>Link</a>
                </div>
            </div>
        </div>

        <div class="albumcard">
            <div class="kisalbumcover">
                <img src="https://f4.bcbits.com/img/a3636119674_16.jpg" alt="fosszar">
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
                <span>Az album a Godspeed You! Black Emperor alfája és omegája, ez az album van beállítva mint az egyik legjobb kisérleti album valaha, hangzása nagyon disztópikus és melankólikus viszont minden percét megéri. Az albumon minden szám 20 perc vagy hosszabb és hasonló tagolással vannak, mindig az eljén van egy nagyon lassú felvezetés és a végén berobban minden hangszer és minden vágott hangrészlet amik általában az akkoriban aktuális politikai és társadalmi helyzetet dolgozta fel</span>
                <div class="linkszoveg abracadabra">
                    <a href='<?php echo $links[10]; ?>'>Link</a>
                </div>
            </div>
        </div>

        <div class="albumcard">
            <div class="kisalbumcover">
                <img src="https://f4.bcbits.com/img/a1480521390_16.jpg" alt="fosszar">
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
                <span>Rövid album összesen négy számmal viszont remek halgatási élménnyel. A négy szám külöbnböző elektronikus zenei műfajban készült de mindegyiken érződik az együttes esszenciája</span>
                <div class="linkszoveg abracadabra">
                    <a href='<?php echo $links[11]; ?>'>Link</a>
                </div>
            </div>
        </div>

        <div class="albumcard">
            <div class="kisalbumcover">
                <img src="https://cdn-images.dzcdn.net/images/cover/aebeffc36e10cfd8e63db1e6fcb5afd3/0x1900-000000-80-0-0.jpg" alt="fosszar">
                <span><?php echo $cimek[12]; ?></span>
                <div class="balszoveg abracadabra">
                    <ul>
                        <li><?php echo $mufajok[12]; ?></li>
                        <li><?php echo $artists[12]; ?></li>
                        <li><?php echo $kiadasok[12]; ?></li>
                    </ul>
                </div>
            </div>
            <div class="nagyszoveg abracadabra">
                <span>Nagyon remek japán nyelvű debütáló album. Energikus és érzelem dús. A torzított gitár és erős dobok adnak az egészne egy elég rendezetlen hangzást viszont a női vokál tökéletesen illik ehhez a nagyon erős hangulathoz</span>
                <div class="linkszoveg abracadabra">
                    <a href='<?php echo $links[12]; ?>'>Link</a>
                </div>
            </div>
        </div>

        <div class="albumcard">
            <div class="kisalbumcover">
                <img src="https://f4.bcbits.com/img/a1491903041_16.jpg" alt="fosszar">
                <span><?php echo $cimek[13]; ?></span>
                <div class="balszoveg abracadabra">
                    <ul>
                        <li><?php echo $mufajok[13]; ?></li>
                        <li><?php echo $artists[13]; ?></li>
                        <li><?php echo $kiadasok[13]; ?></li>
                    </ul>
                </div>
            </div>
            <div class="nagyszoveg abracadabra">
                <span>Egy számból álló mixtape album ahol a banda inkább olyan zenéket rakott bele amiket egy klubban vagy rave-en játszanának. Az egésznek van egy nagyon jó hangulata és kicsit emlékeztet a hangzása a Prodigy-ra</span>
                <div class="linkszoveg abracadabra">
                    <a href='<?php echo $links[13]; ?>'>Link</a>
                </div>
            </div>
        </div>

        <div class="albumcard">
            <div class="kisalbumcover">
                <img src="https://cdn-images.dzcdn.net/images/cover/c4ae667b0e909274ee408dd0712e6ae2/0x1900-000000-80-0-0.jpg" alt="fosszar">
                <span><?php echo $cimek[14]; ?></span>
                <div class="balszoveg abracadabra">
                    <ul>
                        <li><?php echo $mufajok[14]; ?></li>
                        <li><?php echo $artists[14]; ?></li>
                        <li><?php echo $kiadasok[14]; ?></li>
                    </ul>
                </div>
            </div>
            <div class="nagyszoveg abracadabra">
                <span>Nyugodt lágy és láthatatlan. Minden ember számára befogadható a hangzás és az egyszerű zongora játéka. Az egész zene elsimul a háttérben és semmit meg nem zavarva hagyja hogy halgasd és közben végezz akármilyen aktivitást</span>
                <div class="linkszoveg abracadabra">
                    <a href='<?php echo $links[14]; ?>'>Link</a>
                </div>
            </div>
        </div>

        <div class="albumcard">
            <div class="kisalbumcover">
                <img src="https://cdn-images.dzcdn.net/images/cover/0651360337caffc8ea8963054dd0a693/0x1900-000000-80-0-0.jpg" alt="fosszar">
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
                <span>Mély és nyomasztó hangzás ami egybe olvad a háttér zajokkal és feltünés mentesen alakítja át az érzetedet. Nem próbál igazán erősen hatni hanem ikább a hosszú elnyútott hangok és zajok probálnak rád hatni és csak akkor nyomsztani amikor igazán figyelsz rájuk</span>
                <div class="linkszoveg abracadabra">
                    <a href='<?php echo $links[15]; ?>'>Link</a>
                </div>
            </div>
        </div>

        <div class="albumcard">
            <div class="kisalbumcover">
                <img src="https://cdn-images.dzcdn.net/images/cover/f497be47a91701996a289bf532838c30/0x1900-000000-80-0-0.jpg" alt="fosszar">
                <span><?php echo $cimek[16]; ?></span>
                <div class="balszoveg abracadabra">
                    <ul>
                        <li><?php echo $mufajok[16]; ?></li>
                        <li><?php echo $artists[16]; ?></li>
                        <li><?php echo $kiadasok[16]; ?></li>
                    </ul>
                </div>
            </div>
            <div class="nagyszoveg abracadabra">
                <span>Egy erős album egy nagyon kemény hangzással. Az banda hozza az eddig megszokotatt és alakítja úgy hogy a megegyező alapanyag ismét másképp hason, erősebben és karcosabban</span>
                <div class="linkszoveg abracadabra">
                    <a href='<?php echo $links[16]; ?>'>Link</a>
                </div>
            </div>
        </div>

        <div class="albumcard">
            <div class="kisalbumcover">
                <img src="https://f4.bcbits.com/img/a0328474783_16.jpg" alt="fosszar">
                <span><?php echo $cimek[17]; ?></span>
                <div class="balszoveg abracadabra">
                    <ul>
                        <li><?php echo $mufajok[17]; ?></li>
                        <li><?php echo $artists[17]; ?></li>
                        <li><?php echo $kiadasok[17]; ?></li>
                    </ul>
                </div>
            </div>
            <div class="nagyszoveg abracadabra">
                <span>Hangulata hozza a H.P. Lovecraft által felállított kozmikus horror hangulatot egy modernebb köntösben. Hangzása egyszerű de mégis komplexen hat, nagyon komor hangulatát furcsán előadaja mivel a halgatás közben érzed mintha egy felsőbb lény akinek te jelentéktelen vagy éppen rád figyel, a hangzásban észlelhető az egyszerű horror amit egy ilyen omnipotens lény képes lenne megtenni</span>
                <div class="linkszoveg abracadabra">
                    <a href='<?php echo $links[17]; ?>'>Link</a>
                </div>
            </div>
        </div>

        <div class="albumcard">
            <div class="kisalbumcover">
                <img src="https://f4.bcbits.com/img/a1367886411_16.jpg" alt="fosszar">
                <span><?php echo $cimek[18]; ?></span>
                <div class="balszoveg abracadabra">
                    <ul>
                        <li><?php echo $mufajok[18]; ?></li>
                        <li><?php echo $artists[18]; ?></li>
                        <li><?php echo $kiadasok[18]; ?></li>
                    </ul>
                </div>
            </div>
            <div class="nagyszoveg abracadabra">
                <span>Nagyon érdekes, nagyon furcsa és egyben magával ragadó. Az album úgy fordítja és alakítja a műfajt amiben készült ahogyan csak akarja. Az alapjául egy kínai opera szolgál és nagyrészt jazz és progressive rock.os instrumentációval ötvözve. A hangzás káoszos mégis egyedi és felismeerhető viszont sok embernek csak értelmetlen zajok sokasága lesz, ez az állítás igaz is de mégis a zajokat és érthetetlen hangokat ügyesen fordítja a pozitívra ezzel előadva egy hangzást amit az ember többet szeretne de mégse találhat mivel csak erre az alkotásra érvényes</span>
                <div class="linkszoveg abracadabra">
                    <a href='<?php echo $links[18]; ?>'>Link</a>
                </div>
            </div>
        </div>

        <div class="albumcard">
            <div class="kisalbumcover">
                <img src="https://f4.bcbits.com/img/a1573754732_16.jpg" alt="fosszar">
                <span><?php echo $cimek[19]; ?></span>
                <div class="balszoveg abracadabra">
                    <ul>
                        <li><?php echo $mufajok[19]; ?></li>
                        <li><?php echo $artists[19]; ?></li>
                        <li><?php echo $kiadasok[19]; ?></li>
                    </ul>
                </div>
            </div>
            <div class="nagyszoveg abracadabra">
                <span>Az elektronikus zene egyik csúcsa. Hangzása egyszerű mégis sokkal többet képes adni mint kortársai vagy hasonló stíluú társai. Nagyon jól van ötvözve a Techno és a EDM hogy létrehozzon egy hangzást ami vagy leköti az ember figyelmét vagy nem de biztos hogy halgatásra készteti</span>
                <div class="linkszoveg abracadabra">
                    <a href='<?php echo $links[19]; ?>'>Link</a>
                </div>
            </div>
        </div>

        <div class="albumcard">
            <div class="kisalbumcover">
                <img src="https://cdn-images.dzcdn.net/images/artist/7ee9d4d26405b28667089846ab7b1b3a/1900x1900-000000-81-0-0.jpg" alt="fosszar">
                <span><?php echo $cimek[20]; ?></span>
                <div class="balszoveg abracadabra">
                    <ul>
                        <li><?php echo $mufajok[20]; ?></li>
                        <li><?php echo $artists[20]; ?></li>
                        <li><?php echo $kiadasok[20]; ?></li>
                    </ul>
                </div>
            </div>
            <div class="nagyszoveg abracadabra">
                <span>Halk és folyamatos hangzása azt a hatást éri el mintha a saját agyad háttér zaját halanád. Minden hang benne nagyon halk és minimális mintha ott se lenne, viszont maga a zene jelenlévő mégis minimális </span>
                <div class="linkszoveg abracadabra">
                    <a href='<?php echo $links[20]; ?>'>Link</a>
                </div>
            </div>
        </div>

        <div class="albumcard">
            <div class="kisalbumcover">
                <img src="https://f4.bcbits.com/img/a1572558368_16.jpg" alt="fosszar">
                <span><?php echo $cimek[21]; ?></span>
                <div class="balszoveg abracadabra">
                    <ul>
                        <li><?php echo $mufajok[21]; ?></li>
                        <li><?php echo $artists[21]; ?></li>
                        <li><?php echo $kiadasok[21]; ?></li>
                    </ul>
                </div>
            </div>
            <div class="nagyszoveg abracadabra">
                <span>Nagyon energikus és átadja a banda inkább újabb hangzását mégis rövid hossza miatt fel se tűnik hogy a zene mennyire egyedi és jól összerakott, a három számos menet ideje alatt nem dobja el a figyemed hiszen a ritmus és a zenei alap megtartja a figyelmed és ne is engedi a végéig</span>
                <div class="linkszoveg abracadabra">
                    <a href='<?php echo $links[21]; ?>'>Link</a>
                </div>
            </div>
        </div>

        <div class="albumcard">
            <div class="kisalbumcover">
                <img src="https://cdn-images.dzcdn.net/images/cover/078e414889e91347a098f9d370997f2c/0x1900-000000-80-0-0.jpg" alt="fosszar">
                <span><?php echo $cimek[22]; ?></span>
                <div class="balszoveg abracadabra">
                    <ul>
                        <li><?php echo $mufajok[22]; ?></li>
                        <li><?php echo $artists[22]; ?></li>
                        <li><?php echo $kiadasok[22]; ?></li>
                    </ul>
                </div>
            </div>
            <div class="nagyszoveg abracadabra">
                <span>Az alkotó elmondása szerint ez az ő művei között az ő pop albumja, viszont nem szó szerint kell ezt értelmezni inkább úgy mint egy kicsit hátrább szorult a kisérletezős hangzás jobban befogadhatóbb lett, Techno és Acid House hangzása tökéletessé teszi egy buliban mint zene</span>
                <div class="linkszoveg abracadabra">
                    <a href='<?php echo $links[22]; ?>'>Link</a>
                </div>
            </div>
        </div>

        <div class="albumcard">
            <div class="kisalbumcover">
                <img src="https://cdn-images.dzcdn.net/images/cover/35b86a4ff52a33628f5737f4da97d98d/0x1900-000000-80-0-0.jpg" alt="fosszar">
                <span><?php echo $cimek[23]; ?></span>
                <div class="balszoveg abracadabra">
                    <ul>
                        <li><?php echo $mufajok[23]; ?></li>
                        <li><?php echo $artists[23]; ?></li>
                        <li><?php echo $kiadasok[23]; ?></li>
                    </ul>
                </div>
            </div>
            <div class="nagyszoveg abracadabra">
                <span>Agresszív és energikus és remek mint műfajának első dedikált alkotása. A hangzás alapja sokkal durvább mint az időben megszokott a Techno és House zene, sokkal gyorsabb és agresszívabb már egészen egy punk-os attitűdöt hozz</span>
                <div class="linkszoveg abracadabra">
                    <a href='<?php echo $links[23]; ?>'>Link</a>
                </div>
            </div>
        </div>
        <div class="albumcard">
            <div class="kisalbumcover">
                <img src="https://cdn-images.dzcdn.net/images/cover/8bc4926f2361aec49ce613f9f5844998/200x200.jpg" alt="fosszar">
                <span><?php echo $cimek[24]; ?></span>
                <div class="balszoveg abracadabra">
                    <ul>
                        <li><?php echo $mufajok[24]; ?></li>
                        <li><?php echo $artists[24]; ?></li>
                        <li><?php echo $kiadasok[24]; ?></li>
                    </ul>
                </div>
            </div>
            <div class="nagyszoveg abracadabra">
                <span>A banda legominózusabb albumja. Ha őke halgatod megkerülhetetlen, hangzása kisérletező de képes tartani az alapjául szolgáló Hip-Hop ritmust ötvözve inkább Punk Rock-ra hasonlító vokálra. A Death Grips legmagasabban értékelt albumja és sokak belépője a banda diszkográfiájába</span>
                <div class="linkszoveg abracadabra">
                    <a href='<?php echo $links[24]; ?>'>Link</a>
                </div>
            </div>
        </div>


        <div class="albumcard">
            <div class="kisalbumcover">
                <img src="https://cdn-images.dzcdn.net/images/cover/89d0501ef77b7785f2838a40d4ddc4e4/500x500.jpg" alt="fosszar">
                <span><?php echo $cimek[25]; ?></span>
                <div class="balszoveg abracadabra">
                    <ul>
                        <li><?php echo $mufajok[25]; ?></li>
                        <li><?php echo $artists[25]; ?></li>
                        <li><?php echo $kiadasok[25]; ?></li>
                    </ul>
                </div>
            </div>
            <div class="nagyszoveg abracadabra">
                <span>Halk és csendes és az album sorozatában ugyan úgy erős darab mint három másik társa. Nem próbál aktív zene lenni inkább háttérbe szorul és próbál nem zavarni. Fontos a zene láthatatlansága a zenének hiszen műfaj alotó mű</span>
                <div class="linkszoveg abracadabra">
                    <a href='<?php echo $links[25]; ?>'>Link</a>
                </div>
            </div>
        </div>

        <div class="albumcard">
            <div class="kisalbumcover">
                <img src="https://cdn-images.dzcdn.net/images/cover/a78e46235130b786806846fe6835b3f5/1900x1900-000000-80-0-0.jpg" alt="fosszar">
                <span><?php echo $cimek[26]; ?></span>
                <div class="balszoveg abracadabra">
                    <ul>
                        <li><?php echo $mufajok[26]; ?></li>
                        <li><?php echo $artists[26]; ?></li>
                        <li><?php echo $kiadasok[26]; ?></li>
                    </ul>
                </div>
            </div>
            <div class="nagyszoveg abracadabra">
                <span>A skandináv black metal legfelismerhetőbb alkotása. Hangzása pont olyan amilyen a műfajról elterjedt sztereotípiák: vad, agresszív és karcos, tökéletlen</span>
                <div class="linkszoveg abracadabra">
                    <a href='<?php echo $links[26]; ?>'>Link</a>
                </div>
            </div>
        </div>
        <div class="albumcard">
            <div class="kisalbumcover">
                <img src="https://cdn-images.dzcdn.net/images/cover/c0c7758d48647a137a9c97d8932f92e3/0x1900-000000-80-0-0.jpg" alt="fosszar">
                <span><?php echo $cimek[27]; ?></span>
                <div class="balszoveg abracadabra">
                    <ul>
                        <li><?php echo $mufajok[27]; ?></li>
                        <li><?php echo $artists[27]; ?></li>
                        <li><?php echo $kiadasok[27]; ?></li>
                    </ul>
                </div>
            </div>
            <div class="nagyszoveg abracadabra">
                <span>Meghatározó album hiszen ez indította el a Machine Girl-t mint egy olyan projekt ami igazán maradandót alkotott műfajában. A hngzása nagyrészt elektronikus és vokálként hang kivágások szolgálnak a 2008-as Machine Girl című japán sci-fi és drámából</span>
                <div class="linkszoveg abracadabra">
                    <a href='<?php echo $links[27]; ?>'>Link</a>
                </div>
            </div>
        </div>
        <div class="albumcard">
            <div class="kisalbumcover">
                <img src="https://cdn-images.dzcdn.net/images/cover/c595214ee53a87d0bf1ead263c8a1b4c/0x1900-000000-80-0-0.jpg" alt="fosszar">
                <span><?php echo $cimek[28]; ?></span>
                <div class="balszoveg abracadabra">
                    <ul>
                        <li><?php echo $mufajok[28]; ?></li>
                        <li><?php echo $artists[28]; ?></li>
                        <li><?php echo $kiadasok[28]; ?></li>
                    </ul>
                </div>
            </div>
            <div class="nagyszoveg abracadabra">
                <span>A Mass Of The Fermenting Dregs és Japán egyik legjobb albumjának tartják. Hangzása érzelmes és magával ragadó, a vokál finomsága kontrasztott állítt a hangszerelés nagyon is szervezett agresszivitásához képest. Az albumborítója azonnal felismerhető és nagyo egyedi, látványán érzékelhető az album érzelem teljes hangzása</span>
                <div class="linkszoveg abracadabra">
                    <a href='<?php echo $links[28]; ?>'>Link</a>
                </div>
            </div>
        </div>
        <div class="albumcard">
            <div class="kisalbumcover">
                <img src="https://f4.bcbits.com/img/a2072134049_16.jpg" alt="fosszar">
                <span><?php echo $cimek[29]; ?></span>
                <div class="balszoveg abracadabra">
                    <ul>
                        <li><?php echo $mufajok[29]; ?></li>
                        <li><?php echo $artists[29]; ?></li>
                        <li><?php echo $kiadasok[29]; ?></li>
                    </ul>
                </div>
            </div>
            <div class="nagyszoveg abracadabra">
                <span>Nem annyira ismert album mint az együttes más alkotásai viszont ugyan úgy hozza a szintet mint minden másik albumjuk. Hangzása háborús jelegű és mondhatni egyszerű mivel főként gitárok és hegedűk a dominánsak persze minden másik hangszerrel amivel egy tökéletes harmóniát alkotnak</span>
                <div class="linkszoveg abracadabra">
                    <a href='<?php echo $links[29]; ?>'>Link</a>
                </div>
            </div>
        </div>
        <div class="albumcard">
            <div class="kisalbumcover">
                <img src="https://cdn-images.dzcdn.net/images/cover/69a3f31dd0a839d098d1bfd30b5a6ac1/500x500.jpg" alt="fosszar">
                <span><?php echo $cimek[30]; ?></span>
                <div class="balszoveg abracadabra">
                    <ul>
                        <li><?php echo $mufajok[30]; ?></li>
                        <li><?php echo $artists[30]; ?></li>
                        <li><?php echo $kiadasok[30]; ?></li>
                    </ul>
                </div>
            </div>
            <div class="nagyszoveg abracadabra">
                <span>Hangzása nagyon megtartja a banda hangzását mégis úgy alakíta át hogy teljesen újnak és frissnek hasson. Hangzása változatlanul érzelmes a vokál terén és erős és agresszív a hangszerelés terén</span>
                <div class="linkszoveg abracadabra">
                    <a href='<?php echo $links[30]; ?>'>Link</a>
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