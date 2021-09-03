<?php
//connexion
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "google_plante";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//fin de connexion
//if (isset($_POST['submit'])){
$research = $_POST['search'];
//$search = "mar";
$research  = $research . "%";
//echo "s :".$search;

$sql = "SELECT* FROM tableinformationplante WHERE TypePlante LIKE '$research'";
//$sql = "SELECT tableinfofleurimage.IDImagePlante, tableinfofleurimage.IDInformationPlante,tableinfofleurimage.LienPlante,tableinformationplante.IDplante,tableinformationplante.NomPlante, tableinformationplante.TypePlante, tableinformationplante.DesciptionPlante, tableinformationplante.DateEnrgPlante FROM tableinfofleurimage INNER JOIN  tableinformationplante ON tableinfofleurimage.IDImagePlante = tableinformationplante.IDplante
//WHERE tableinformationplante.TypePlante LIKE '$search'%";
$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while ($row = mysqli_fetch_assoc($result)) { // tant qu'il y a des information

        $id = $row['IDplante'];
        $plantType = $row['TypePlante'];
        $Nom = $row['NomPlante'];
        $plantDescription = $row['DesciptionPlante'];
        // Get image information : Requete pour avoir l'image de la fleur concernée en fonction de son ID
        $getImg = "SELECT* FROM tableinfofleurimage WHERE IDInformationPlante = '$id'";
        $imgResultEx = mysqli_query($conn, $getImg); //execute la requel $getImg
        $rowImg = mysqli_fetch_assoc($imgResultEx); //connection a la base
        $imagefleure = $rowImg['LienPlante'];
        //---- Start HTML -----------
?>
        < <?php
            //--- End HTMl --------------------
            //echo "<img src=".$imagefleure."><br>";
            //echo "Nom : ".$Nom."<br>Type : ".$plantType."<br>Description : ".$plantDescription."<br>";
        }
    } else {
        echo "0 results";
    }

    //}
    mysqli_close($conn);
            ?> <!DOCTYPE html>
            <html lang="fr">

            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=, initial-scale=1.0">
                <title>Google</title>


                <link rel="stylesheet" type="text/css" href="page3.css">
                <link rel="icon" href="image1/favicon.png">

            </head>

            <body>
                <div style="align-items: center;">


                    <img src="img2/google.png" style="width: 140px; margin-top: 3px;">
                    <div style="margin-top: -44px; margin-left: 11%; ">

                        <input type="text" class="text">

                        <img src="img/loupe.png" style="width:20px ; margin-left: -4%; margin-bottom: -7px ;">
                        <img src="img/vs.png" style="width: 15px; margin-left: -5%; margin-bottom: -7px;">
                        <img src="img/cam.jpg" style="width: 35px; margin-left: -5%; margin-bottom: -12px; opacity: 0.4;">
                    </div>
                </div>

                <nav>
                    <ul>
                        <a href="#">
                            <li> <img src="img/loupe.png" style="width: 20px; margin-right: 5px; ">all</li>
                        </a>
                        <a href="#">
                            <li><img src="img2/iconimage.png" style="width: 20px; margin-right: 5px; ">images</li>
                        </a>
                        <a href="#">
                            <li><img src="img2/images.png" style="width: 20px; margin-right: 5px;">videos</li>
                        </a>
                        <a href="#">
                            <li><img src="img2/logoposi.png" . style="width: 20px; margin-right: 2px;">maps</li>
                        </a>
                        <a href="#">
                            <li><img src="img2/news-paper-vector-icon-png_308917.jpg" style="width: 20px; margin-right: 5px;">news</li>
                        </a>
                        <a href="#">
                            <li> <img src="img2/three-dots.jpg" style="width: 20px; margin-right: 5px;">more</li>
                        </a>
                    </ul>
                </nav><br>
                <p id="tools">tools</p>
                </div>

                <!-- alignement de texte et image -->

                <div class="bannière">
                    <div class="ban">
                        <img src="img2/Roses cJFC 670.jpeg" alt="fleur" class="fleur">
                        <span>rose</span>
                    </div>
                    <div class="ban2">
                        <img src="img2/fleurs-locales_c93ed81e6bbfd86626d3807d1ed68918.jpg" .j alt="fleur" class="fleur">
                        <span>bouquet</span>
                    </div>
                    <div class="ban2">
                        <img src="img2/depositphotos_185308152-stock-photo-close-up-view-of-beautiful.jpg" alt="fleur" class="fleur">
                        <span>love</span>
                    </div>
                    <div class="ban2">
                        <img src="img2/pexels-eva-elijas-6149915.jpg" alt="fleur" class="fleur">
                        <span>blanc</span>
                    </div>
                    <div class="ban2">
                        <img src="img2/pexels-karolina-grabowska-4497731.jpg" alt="fleur" class="fleur">
                        <span>nature</span>
                    </div>
                    <div class="ban2">
                        <img src="img2/quelles-fleurs-choisir-pour-quelqu-un-qu-on-aime-670.jpg" alt="fleur" class="fleur">
                        <span>flowers</span>
                    </div>
                    <div class="ban2">
                        <img src="img2/fleurs-en-ligne-1280x720.jpg" alt="fleur" class="fleur">
                        <span>belles</span>
                    </div>
                    <div class="ban2">
                        <img src="img2/mise-en-avant-fleurs-feutrine.jpg" alt="fleur" class="fleur">
                        <span>petit</span>
                    </div>
                    <div class="ban2">
                        <img src="img2/Oiellet de poete.jpg" alt="fleur" class="fleur">
                        <span>Oiellet</span>
                    </div>
                    <div class="ban2">
                        <img src="img2/pexels-dina-nasyrova-4725971.jpg" alt="fleur" class="fleur">
                        <span>vase</span>
                    </div>
                    <div class="ban2">
                        <img src="img2/les-fleurs.jpg" alt="fleur" class="fleur">
                        <span>gala</span>
                    </div>


                </div>





            </body>

            </html>