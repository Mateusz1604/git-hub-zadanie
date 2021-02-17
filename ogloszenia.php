<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal ogłoszeniowy</title>
    <link rel="stylesheet" href="styl1.css">
</head>
<body>
    <header>
    <h1>
        Portal Ogłoszeniowy
    </h1>
    </header>


    <section class="lewo">
    <h2>Kategorie ogłoszeń</h2>
        <ol>
            <li>Książki</li>
            <li>Muzyka</li>
            <li>Filmy</li>
        </ol>
        <img src="ksiazki.jpg" alt="Kupię/sprzedam książkę">



        <table>
        <tr>
            <td>Liczba ogłoszeń</td> <td>Cena ogłoszenia</td> <td>Bonus</td>
        </tr>
        <tr>
            <td>1 - 10</td> <td>1 PLN</td> <td rowspan='3'>Subskrybcja newslettera<br> to upust 0.20PLN na <br>ogłoszenie</td>
        </tr>
        <tr>
            <td>11 - 50</td> <td>0.8 PLN</td> 
        </tr>
    </table>
    </section>

    <section class="prawo">
        <h2>Ogłoszenia katregorii książki</h2>


        <?php
            $database = "localhost";
            $user = "root";
            $pass = "";
            $dbname = "ogłoszenia";
            $conn = new mysqli($database, $user, $pass, $dbname);

            $zapytanie1="SELECT id,tytul,tresc FROM ogloszenie WHERE kategoria=1;";
            $wynik = $conn->query($zapytanie1);

            if ($wynik->num_rows) {
                while($row = $wynik->fetch_assoc()) {
                    echo "<h3>id: " . $row['id']. " tytul: " . $row['tytul']. "<h3> "."<p>". $row['tresc']. "<br></p>";
                    $id = $row['id'];
                    $zapytanie2 = "SELECT telefon FROM uzytkownik JOIN ogloszenie ON ogloszenie.uzytkownik_id = uzytkownik.id WHERE ogloszenie.id = $id";
                    $wynik2 = $conn->query($zapytanie2);
                    while($row2 = $wynik2->fetch_assoc()){
                        echo "telefon kontaktowy: ".$row2['telefon'];
                    }

                }
            }
            else {
                echo "0 results";
            }
            mysqli_close ($conn);
           


        ?>
    </section>

    <footer>
    <p>Portal ogłoszeniowy opracował: 98765432123</p>
    </footer>

    
</body>
</html>
