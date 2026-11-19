<?php
//invoegen database.php
require_once 'inc/database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klantgegevens</title>
    <!---- Hier komt nog CSS ------>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class = "container">
        <?php
            //include menu

            //header tags invoegen
            echo '<header class = "head">';

            //hier komt strakt een url om nieuwe klanten aan te maken

            echo '</header>';

            echo '<main class = "main-content">';
            
        ?>
        <!--tabelkop/header maken met HTML -->
        <table id = "customers">
            <tr>
                <th>klantnr</th>
                <th>klantnaam</th>
                <th>contactpersoon</th>
                <th>straat</th>
                <th>huisnummer</th>
                <th>postcode</th>
                <th>plaats</th>
                <th>telefoon</th>
                <th>email</th>
                <th>acties</th>
            </tr>

        <?php
            //ophalen klantgegevens uit database
                $query = "SELECT * FROM Klant
                            ORDER BY naam, plaats
                            LIMIT 1, 10;";
            //resultaat bepalen
                $result = mysqli_query($dbconn, $query);

            //aantal record
                $aantalRows = mysqli_num_rows($result);
                $contentTable = '';

            //tabel aanvullen met klantgegevens
                if ($aantalRows > 0) {
                    while ($row = mysqli_fetch_array($result)) {
                        $contentTable .= "<tr>
                                            <td>" . $row['id'] . "</td>
                                            <td>" . $row['naam'] . "</td>
                                            <td>" . $row['cp'] . "</td>
                                            <td>" . $row['straat'] . "</td>
                                            <td>" . $row['huisnummer'] . "</td>
                                            <td>" . $row['postcode'] . "</td>
                                            <td>" . $row['plaats'] . "</td>
                                            <td>" . $row['telefoon'] . "</td>
                                            <td>" . $row['notitie'] . "</td>
                                        </tr>";
                    }
                } else {
                    $contentTable = "<tr>
                                        <td colspan = '9'>Geen gegevens om op te halen...</td>
                                    </tr>";
                }
            //weergaven van de rest van de tabel
            $contentTable .= "</table><br>";
            echo $contentTable;

            //paginering van de tabel

            //invoegen footer

            echo '</main>';
        ?>
    </div>
</body>
</html>