
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
                            <li><a href="List_compte.php">Comptes</a></li>
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
                <br />
                <form id="form1" method="post" action="../Controller/control_physique.php">
                    <fieldset id="field1">
                        <legend id="legend1">Choix du type de client</legend>
                        <div id="infoClient">
                            <div id="infoClient1">
                                <label for="TypeClient">Type Client* : </label>
                                <select id="TypeClient" name="TypeClient" value="" onChange="location = this.options[this.selectedIndex].value;" onchange="testClient()">
                                    <option>--Sélectionner un type de client--</option>
                                    <option value="test_Physique.php">Client physique</option>
                                    <option value="test_Moral.php">Client moral</option>
                                </select>
                                <span id="ErrorTypeClient"></span>
                    </fieldset>
                    <br />
                    <br />
                        <span id="ErrorC"></span>
                </form>
            </main>

            <footer>
            </footer>

        </div>
        <script type="text/javascript" src="app.js"></script>
    </body>
</html>
