<html>
    <head>
        <meta charset = "UTF-8">
        <title>Erp</title>
    </head>
    <body style="font-family: Calibri">
        <h1> WoodyToys Intranet</h1>
        <br/>
        <a style="margin-left:25px;" href="https://woodytoys.seldric.be">Site vitrine</a><a style="margin-left:25px;" href="https://b2b.seldric.be">Site vendeur</a>
        </br>
        <div id="login_container">
            <form method="POST">
                <label for="login">Identifiants </label>
                <input type="text" name="login" placeholder="Email..">
                <label for="password">Mot de passe </label>
                <input type="password" name="password" placeholder="Mot de passe..">
                <input type="submit" name="submit" value="Connection">
            </form>
        </div>
        <?php
            define("DB_HOST", "mysql");
            define("DB_USERNAME", "admin");
            define("DB_PASSWORD", "admin123");
            define("DB_NAME", "woodytoys");
            $conn = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
            
            if ($conn->connect_error){
                echo "An Error occured with the database, please contact the system administrator.";
                
            }
                    
            if (isset($_POST['submit'])){
                $login = $_POST["login"];
                $password = $_POST["password"];

                $access = $conn->prepare("SELECT * FROM res_users WHERE login = ? and password = ?");
                $access->bind_param("ss",  $login, $password);
                $access->execute();
                $result = $access->get_result();
                if ($result->num_rows == 1) {
                    $row = $result->fetch_assoc();
                    $user_page = sprintf("<div><span> Hello <b>%s %s</b></span><hr/><span>email : <b>%s</b></span><br/><span>Accès Comptabilité : <b>%d</b></span><br/><span>Accès Contacts : <b>%d</b></div>", 
                        $row["firsname"], 
                        $row["lastname"], 
                        $row["email"], 
                        $row["access_accounting"],
                        $row["access_contact"]
                    );
                    
                    $html = preg_replace('#<div id="login_container">(.*?)</div>', '', $user_page);
                } else {
                    printf('No user found.<br />');
                }
                $result->close();
                $access->close();
    
            }
            $conn->close();
        ?>
    </body>
</html>
