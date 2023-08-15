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
	    echo "Connected successfully";

            //$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            //$result= $conn->query("SELECT * FROM articles");

            //while ($row = $result->fetch()) {
            //   echo $row['name'] . " - " . $row['price'] . "€ <br />\n";
            //}

            //if (isset($_POST['submit'])){
            //    $article = $_POST["name"];
            //    $prix = $_POST["price"];

            //    $insert = "INSERT INTO articles VALUES ('$article', $prix)";
            //    $conn->exec($insert);
            //    echo "<meta http-equiv='refresh' content='0'>";
            //}

            //$conn = null;
            ?>
        </div>
    </body>
</html>
