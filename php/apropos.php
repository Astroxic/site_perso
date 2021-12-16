<?php
$accueil=\file_get_contents('./yaml/accueil.yaml');
$acc=yaml_parse($accueil);

$apropos=\file_get_contents('./yaml/apropos.yaml');
$apr=yaml_parse($apropos);
?>
<h1>À Propos</h1>
<p>
    Je m'appelle <?php echo $acc['prenom']." ".$acc['nom']?>, j'ai <?php echo $apr['age']?> ans et<br>
    je suis en <?php echo $apr['formation']." au supavenir ".$apr['etablissement']." à ".$apr['ville']?>
</p>