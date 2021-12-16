<?php
$experiences=\file_get_contents('./yaml/experiences.yaml');
$data=yaml_parse($experiences);
?>
<h1>Expériences</h1>
<p>
    En <?php echo $data['dateDebut']?> jusqu'en <?php echo $data['dateFin']?>, j'ai efféctué un stage en entreprise.<br>
    Celle-ci s'appelait <?php echo $data["entreprise"]?> et se trouvait à <?php echo $data["lieu"]?><br/>
    <?php echo $data['descriptif']?>.
</p>
