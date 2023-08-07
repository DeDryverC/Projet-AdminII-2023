<html>
    <head>
        <meta charset = "UTF-8">
        <title>WoodyToys revendeurs</title>
    </head>
    <body style="font-family: Calibri">
        <h1> WoodyToys b2b</h1>
        <div>
            <h3>Mettre un article en vente</h3>
            <form method="POST">
                <label for="article">Article: </label>
                <input type="text" name="article" placeholder="nom de l'article">
                <label for="prix">Prix: </label>
                <input type="number" name="prix" placeholder="en euro">

                <input type="submit" name="submit" value="Mettre en vente">
            </form>

        </div>
        <div>
            <h3>Articles en vente</h3>
            <?php

            $servername = 'localhost:3306';
            $username = 'admin';
            $password = "admin123";
            $dbname = 'woodytoys';
            $conn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $result= $conn->query("SELECT * FROM articles");

            while ($row = $result->fetch()) {
                echo $row['nom'] . " - " . $row['prix'] . "€ <br />\n";
            }

            if (isset($_POST['submit'])){
                $article = $_POST["article"];
                $prix = $_POST["prix"];

                $insert = "INSERT INTO articles VALUES ('$article', $prix)";
                $conn->exec($insert);
                echo "<meta http-equiv='refresh' content='0'>";
            }

            $conn = null;
            ?>
        </div>
    </body>
</html>