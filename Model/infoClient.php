<?php
                            require_once '../Config/autoload.php';
                            use Model\Principal;
                            $prin = new Principal();
                            $pdo = $prin->Connect();
                            $typeC = $pdo->prepare('SELECT * FROM client_physique');
                            $typeC->execute();
                            ?>
                            <select type="text" id="infoclien" name="id_client_physique" value="">
                            <option value="S">--Sélectionner le client --</option>
                            <?php
                            while($result = $typeC->fetch(PDO::FETCH_ASSOC)) {;
                            ?>
                            <option value="<?php echo $result['id_client_physique']?>"><?php echo $result['numCni']?></option>
                           <?php
                           }
                           ?>
                            </select>
