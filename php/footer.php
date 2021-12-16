<?php
$footer=\file_get_contents('./yaml/footer.yaml');
$foot=yaml_parse($footer);
?>

<p> 
    <?php echo $foot['credit']?> 

</p>