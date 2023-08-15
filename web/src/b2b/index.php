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
	    define("DB_HOST", "mysql");
	    define("DB_USERNAME", "admin");
	    define("DB_PASSWORD", "admin123");
	    define("DB_NAME", "woodytoys");
	    $conn = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
	    
	    if ($conn->connect_error){
		 echo "An Error occured with the database, please contact the system administrator.";
	   	    
	    }
                
        $id = 0;
        if($result = mysqli_query($conn, "SELECT * FROM articles")) {
            echo $row['name'] . " - " . $row['price'] . "€ <br />\n";
            if($row["id"] > $id) {
                $id = $row["id"];
            }
        }

        if (isset($_POST['submit'])){
            $article = $_POST["name"];
            $prix = $_POST["price"];

            $insert = "INSERT INTO articles VALUES ('$article', $prix)";
            $conn->exec($insert);
            echo "<meta http-equiv='refresh' content='0'>";
        }
        ?>
        </div>
    </body>
</html>
