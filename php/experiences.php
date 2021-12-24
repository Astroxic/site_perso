<?php
$experiences=\file_get_contents('./yaml/experiences.yaml');
$data=yaml_parse($experiences);
?>
<?php echo'<div class="experiences">'?>
<h1>Expériences</h1>
<?php
echo '<div class=conteneur>';
foreach($data as $elt){  
    echo '<div class=contenu>';
        echo '<img src="'.$elt['photo'].'"/>';?>
        <p>Poste : <?=$elt['poste']?></p>
        <p>Entreprise : <?=$elt['entreprise']?></p>
        <p>Date de Début : <?=$elt['dateDebut']?></p>
        <p>Date de Fin : <?=$elt['dateFin']?></p>
        <p>Lieu : <?=$elt['lieu']?></p>
        <p>Descriptif : <?=$elt['descriptif']?></p> <?php
    echo '</div>';
}
echo '</div>';
echo '</div>';