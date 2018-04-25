<?php

//Database Connection
function get_database_connection() {
$hostname = "mssql.iproject.icasites.nl";
$username = "iproject9";
$password = "PXDDupJ2bw";
$dbname = "iproject9";

try {$dbh = new PDO ("sqlsrv:Server=$hostname;
    Database=$dbname;
    ConnectionPooling=0",
    "$username", "$password");
    // set the PDO error mode to exception
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'De Connectie is gelegd!' . "<br>";
    get_test($dbh);
    }
catch(PDOException $e)
    {
    echo "Error: " . $e->getMessage();
    }
}


//Haal gegevens uit 'Vraag'
function get_test($dbh) {
  $sth = $dbh->prepare("SELECT vraagnummer, tekstvraag FROM Vraag");
  $sth->execute();
  foreach ($sth as $row) {
       print $row['vraagnummer'] . "\t";
       print $row['tekstvraag'] . "\t";
   }
}


//Hot Items (Is nog een oude/WebTech versie!)
$output;
function hot_items($dbh){

    $output="";

    for ($i=0; $i <3 ; $i++) {
        $nummer = (rand(1,30));

        $sql = "SELECT * FROM movie WHERE movie_id = ?";
        $stmt = $dbh->prepare($sql);
        $stmt->execute(array($nummer));
        $row = $stmt->fetch();

        $mname = $row['title'];
        $poster = $row['poster_link'];
        $desc = $row['description'];
        $year = $row['publication_year'];
        $dur = $row['duration'];

        $output .=
        '<div class = "result">
        <img class="poster-result" src = ../img/poster/'.$poster.' </img>
        <div class = "result-text">
        <div><strong>' .$mname. '</strong></div>
        <div> <strong>Publication Year:</strong>   ' .$year. '</div>
        <br>
        <div class="result-text">
        <form action="Description-page.php" class="Filmoptie">
        <input type="hidden" name="defilm" value='. ($row['title']) .'>
        <input type="submit" name="mybtn" class="btn" value="Filmpagina"/>
        </form>
        </div>
        </div></div>';
    }
    echo $output;
}



?>
