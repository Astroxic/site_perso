<?php
$competences=\file_get_contents('./yaml/competences.yaml');
$comp=yaml_parse($competences);
?>
<?php echo'<div class="competences">'?>
<h1>Mes compétences</h1>
<?php
echo '<div class=conteneur>';
    foreach($comp AS $domaine){
        echo '<div class=contenu>';
            echo '<div class=titre>';
                echo "<h3>".$domaine['Domaine']."</h3>";
            echo '</div>';
            foreach($domaine["Objet"] as $elt){?>
                    <label for="<?=$elt['competence']?>"><?=$elt['competence']?></label>
                    <progress id="<?=$elt['competence']?>" max='100' value="<?=$elt['niveau']?>"><?=$elt['niveau']?></progress>
                    <?php
                
    }
    echo '</div>';
}
echo '</div>';
echo '</div>';