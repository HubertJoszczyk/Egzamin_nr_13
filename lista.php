<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista przyjaciół</title>
    <link rel="stylesheet" type="text/css" href="styl.css">
</head>
<body>
    <header>
        <h1>Portal społecznościowy - moje konto</h1>
    </header>
    <div id="main">
        <h2>Moje zainteresowania</h2>
        <ul>
            <li>muzyka</li>
            <li>film</li>
            <li>komputery</li>
        </ul>
        <h2>Moi znajomi</h2>
        <?php
            $conn=mysqli_connect("localhost","root","","dane");
            $sql="SELECT imie,nazwisko,opis,zdjecie from osoby where hobby_id in (1,2,6)";
            $query=mysqli_query($conn,$sql);
            while($row=mysqli_fetch_array($query)){
                echo "<div id='zdjecie'><img src='$row[3]' alt='przyjaciel'></div>";
                echo "<div id='opis'>
                    <h3>$row[0] $row[1]</h3>
                    <p>Ostatni wpis: $row[2]</p>
                </div>";
                echo "<div id='linia'><hr></div>";
            }
            mysqli_close($conn);
        ?>
    </div>
    <div id="stopka">
        Stronę wykonał:Joszczyk Hubert
    </div>
    <div id="stopka">
        <a href="mailto:ja@portal.pl">napisz do mnie</a>
    </div>
</body>
</html>