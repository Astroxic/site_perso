<?php
$accueil=\file_get_contents('./yaml/accueil.yaml');
$acc=yaml_parse($accueil);

$apropos=\file_get_contents('./yaml/apropos.yaml');
$apr=yaml_parse($apropos);
?>
<?php echo'<div class="apropos">'?>
<h1>À Propos</h1>
<?php
echo '<div class=conteneur>';?> 
    <p>
        Je m'appelle <?php echo $acc['prenom']." ".$acc['nom']?>, j'ai <?php echo $apr['age']?> ans et
        je suis actuellement en <?php echo $apr['formation']." au SupAvenir ".$apr['etablissement']." à ".$apr['ville']?>.
    </p>

    <p>
        Ma passion pour les jeux-vidéos m'a permis la découverte du codage et m'a ainsi conforté dans l'idée que je souhaitais poursuivre mes études dans ce domaine.           
    </p>

    <p>
        Esthétiquement, mon inspiration provient de mon attrait pour la pop-culture japonaise.
    </p>  