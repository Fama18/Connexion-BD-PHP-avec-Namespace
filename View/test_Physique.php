
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
                        <legend id="legend1">Informations Client</legend>
                        <div id="infoClient">
                                <span id="ErrorTypeClient"></span>
                            <div id="infoClient1">
                                <label for="numCni" id="lab1">Numéro CNI* : </label>
                                <input type="text" id="numCni" name="numCni" value="" placeholder="Numéro CNI" />
                                <span id="ErrorCni"></span>
                                <label for="nom" id="lab2">Nom* : </label>
                                <input type="text" id="nom" name="nom" value="" placeholder="Nom" />
                                <span id="ErrorNom"></span>
                                <label for="prenom" id="lab3">Prenom* : </label>
                                <input type="text" id="prenom" name="prenom" value="" placeholder="Prenom" />
                                <span id="ErrorPrenom"></span>
                                <label for="civilite" id="labc">civilité* : </label>
                                <select id="civilite" name="civilite" value="">
                                    <option>--Sélectionner votre civilité--</option>
                                    <option value="Mr">Mr</option>
                                    <option value="Melle">Melle</option>
                                    <option value="Mdme">Mdme</option>
                                </select>
                            </div>
                            <div id="infoClient2">
                                <label for="DateDeNaissance" id="lab1">Date de naissance* : </label>
                                <input type="date" id="DateDeNaissance" name="DateDeNaissance" value="" placeholder="Date de naissance" />
                                <span id="ErrorDateNaissance"></span>
                                <label for="adresse" id="lab1">Adresse* : </label>
                                <input type="text" id="adresse" name="adresse" value="" placeholder="Adresse" />
                                <span id="ErrorAdresse"></span>
                                <label for="email" id="lab1">Email : </label>
                                <input type="email" id="email" name="email" value="" placeholder="Email" />
                                <span id="ErrorEmail"></span>
                                <label for="tel" id="lab1">Téléphone* :</label>
                                <input type="tel" id="telephone" name="telephone" value="" placeholder="Téléphone" />
                                <span id="ErrorTelephone"></span>
                            </div>
                      </div>
                    </fieldset>
                    <br />
                        <input type="submit" name="btn2" value="Valider" id="btn2" /><br />
                        <span id="ErrorC"></span>
                </form>
            </main>

            <footer>
            </footer>

        </div>
        <script type="text/javascript" src="app.js"></script>
    </body>
</html>
