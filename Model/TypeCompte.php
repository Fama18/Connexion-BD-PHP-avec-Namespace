<?php
//namespace Model;
            require_once '../Config/autoload.php';
            use Model\Principal;
            //require_once 'principal.php';
            $prin = new Principal();
            $pdo = $prin->Connect();
            $typeC = $pdo->prepare('SELECT * FROM typecompte');
            $typeC->execute();
            ?>
            <select id="typeCompte" name="id_Compte" value="" onchange="testCompte()">
            <option value="">--Sélectionner un type de compte--</option>
        <?php
            while($result = $typeC->fetch(PDO::FETCH_ASSOC)) {?>
          <option value="<?php echo $result['id_Compte'];?>"><?php echo $result['libelle'];?></option>
          <?php
        }
        ?>
         </select>