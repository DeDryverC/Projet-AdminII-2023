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
                <input type="text" name="name" placeholder="nom de l'article">
                <label for="brand">Brand: </label>
                <input type="text" name="brand" placeholder="Nom de la marque">
                <label for="prix">Prix: </label>
                <input type="number" step="0.01" name="price" placeholder="en euro">
                <input type="submit" name="submit" value="Mettre en vente">
            </form>

        </div>
        <div>
            <h3>Articles en vente</h3>
            <table>
                <thead>
                    <th> ID </th>
                    <th> Nom </th>
                    <th> Marque </th>
                    <th> Prix </th>
                </thead>
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

                $sql = "SELECT * FROM articles";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    printf('<tbody>');
                    while($row = $result->fetch_assoc()) {
                        printf("<tr><td>%d</td><td>%s</td><td>%s</td><td>%.2f</td></tr>", 
                            $row["id"], 
                            $row["name"], 
                            $row["brand"],
                            $row["price"]);               
                    }
                    printf('</tbody>');
                } else {
                    printf('No record found.<br />');
                }

                if (isset($_POST['submit'])){
                    $new_article_id = $id + 1;
                    $article = $_POST["name"];
                    $prix = $_POST["price"];
                    $brand = $_POST["brand"];

                    $insert = "INSERT INTO articles VALUES ($id, '$article', '$brand', $prix)";
                    mysqli_query($conn, $insert);
                    echo "<meta http-equiv='refresh' content='0'>";
                }
                $conn->close();
                ?>
            </table>
        </div>
    </body>
</html>
