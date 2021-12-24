<?php
$formations=file_get_contents("yaml/formations.yaml");
$form=yaml_parse($formations);
?>

<?php echo'<div class="formations">'?>
<h1>Formations</h1>
<?php
echo '<div class=conteneur>';
foreach($form as $form){
    echo '<div class=contenu>';
        echo '<img src="'.$form['photo'].'"/>';?>
        <p>Nom : <?=$form['Nom']?></p>
        <p>Établissement : <?=$form['Etablissement']?></p>
        <p>Date de Début : <?=$form['DateDeDebut']?></p>
        <p>Date de Fin : <?=$form['DateDeFin']?></p>
        <p>Lieu : <?=$form['Lieu']?></p>
        <p>Contenu : <?=$form['Contenu']?></p> <?php
    echo '</div>';
}
echo '</div>';
echo '</div>';