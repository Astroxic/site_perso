<?php
$accueil=\file_get_contents('./yaml/accueil.yaml');
$acc=yaml_parse($accueil);
?>

<?php
    echo '<div id="conteneur">';
        echo '<div id="banderole">';
        ?>  <h1><?php echo $acc['prenom']." ".$acc['nom']?></h1>
            <h2><?php echo $acc['accroche']?></h2>   
<?php   echo '</div>';
        echo '<div id="contenu">';
            echo '<div id="photo">';
                echo '<img src="'.$acc['photo']['src']['1'].'"/>';
            echo '</div>';
        echo '</div>';
?>