<!doctype html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link type="text/css" rel="stylesheet" href="style.css" />
        <title>Connexion BD</title>
    </head>
    <body>
        <div id="container">
            <header>
                <div id="entete">
                    <img alt="logo" src="images/logo bancaire.jpg" id="img1" />
                    <div id="text1"><h2>Bienvenue à la banque du peuple</h2></div>
                </div>
                    <div id="lien">
                        <ul id="naviguer">
                            <li><a href="#">Home</a></li>
                            <li><a href="List_Client_Physique.php">Clients physiques</a></li>
                            <li><a href="List_Client_Moral.php">Clients morals</a></li>
                            <li><a href="deconnexion.php">Comptes</a></li>
                        </ul>
                    </div>
                    <br />
            </header>


            <main>
                <div id="text2">
                    <h2>Ouverture de compte</h2>
                </div>
                <nav>
                    <ul id="navigation">
                        <li><a href="client.php">Client</a></li>
                        <li><a href="compte.php">Compte</a></li>
                    </ul>
                </nav>
                <h2 id="CliPhy">Listes des Clients physiques</h2>
                <?php

                        try {
                            $db = new PDO("mysql:host=localhost;dbname=banque","root","m8ts8hito");
                            // Définir le mode d'erreur PDO comme l'exception
                            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                            $sql = "SELECT * FROM client_physique";
                            $result = $db->query($sql);

                            if($result->rowCount() > 0) {
                                echo "<div class=\"table-responsive\" style=\"width:820px;margin-left:10px;border:1px;color:white;background-color:cadetblue\">";
                                echo "<table class=\"table table-striped table-hover table-bordered\" style=\"border:2px;color:white\"><tr><th>Numéro carte d'identité</th><th>Nom</th><th>Prenom</th><th>Date de naissance</th><th>Adresse</th><th>Email</th><th>Telephone</th></tr>";
                                foreach($result as $row) {
                                echo "<tr><td>".$row["numCni"]."</td><td>".$row["nom"]."</td><td>".$row["prenom"]."</td><td>".$row["DateDeNaissance"]."</td><td>".$row["adresse"]."</td><td>".$row["email"]."</td><td>".$row["telephone"]."</td></tr>";
                                }
                                echo "</table>";
                                echo "</div>";
                                }

                            else {echo "0 results";}
                                }catch(PDOException $e){
                            echo "Connection failed: " . $e->getMessage();
                            }
                            ?>
                            <br />
                            <br />

				</main>

				<footer>
				</footer>
    </div>
  </body>
</html>
<br />