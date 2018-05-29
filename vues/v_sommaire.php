<div id="menuGauche">
	<div id="infosUtil">
		<h2>
		</h2>
	</div>

	<ul id="menuList">
		<li>
                        <?php
                            if($_SESSION['statut']==1)
                            {
                                echo 'Visiteur :'. '<br>';
                            }
                            else
                            {
                                echo 'Comptable :'.'<br>';
                            }
			
                             echo $_SESSION['prenom']." ".$_SESSION['nom']
                        ?>
		</li>
                <?php
                if($_SESSION['statut']==1)
                {
                ?>
                    <li class="smenu">
			<a href="index.php?uc=gererFrais&action=saisirFrais" title="Saisie fiche de frais" >
				Saisie fiche de frais
			</a>
                    </li>
                    <li class="smenu">
			<a href="index.php?uc=etatFrais&action=selectionnerMois" title="Consultation de mes fiches de frais">Mes fiches de frais</a>
                    </li>
                <?php
                }
                ?>
                <?php
                if($_SESSION['statut']==2)
                {
                ?>
                    <li class="smenu">
                        <a href="index.php?uc=validerFrais&action=selectionnerVisiteur" title="Valider fiche de frais" >
                            Valider fiche frais
                        </a>
                    </li>
                    <li class="smenu">
                        <a href="index.php?uc=suivrePaiement&action=suivrePaiement" title="Suivre le paiement fiche de frais">
                            Suivre le paiement
                        </a>
                    </li>
                <?php    
                }
                ?>
		<li class="smenu">
			<a href="index.php?uc=connexion&action=deconnexion" title="Se déconnecter">Déconnexion</a>
		</li>
	</ul>
</div>