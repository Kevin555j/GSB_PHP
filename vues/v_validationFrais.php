<div id="contenu">
    <h2>Mes fiches de frais</h2>
    
    <h3>Visiteur à sélectionner :</h3>
    <form action="index.php?uc=validerFrais&action=voirEtatFrais" method="POST">
        <div class="corpsForm">
            <p>
                <label for="lstVis" accesskey="n">Visiteur :</label>
                    <select id="lstVis" name="lstVis">
                        <?php
                            if(!empty($lesVisiteurs))
                            {
                                foreach ($lesVisiteurs as $unVisiteur)
                                {
                        ?>
                        <option selected="selected" value="<?php echo $unVisiteur['id'] ?>"><?php echo $unVisiteur['nom']; ?></option>
                        <?php
                                }
                            }else
                            {
                        ?>
                        <option><?php echo 'Aucun visiteur ne possède de fiche de frais';  ?></option>
                        <?php
                            }
                        ?>
                    </select>
            </p>
            <p>
                <label for="lstMois" accesskey="n">Mois : </label>
                <select id="lstMois" name="lstMois">
                    <?php
                        if(!empty($lesMois))
                        {
                            foreach ($lesMois as $unMois)
                            {
                    ?>
                    <option selected="selected" value="<?php echo $unMois['mois']; ?>"><?php echo $unMois['numMois']."/".$unMois['numAnnee'] ?> </option>
                    <?php
                            }
                        }else
                        {
                    ?>
                    <option><?php echo 'Aucun mois' ?></option>
                    <?php
                        }
                    ?>
                </select>
            </p>
        </div>
        <div class="piedForm">
            <p>
                <input id="ok" type="submit" value="Valider" size="20" />
            </p>
        </div>
    </form>