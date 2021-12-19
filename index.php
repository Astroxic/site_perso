<?php
$content=\file_get_contents('yaml/menu.yaml');
$page=yaml_parse($content);
?>
<html lang="fr-FR">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css"/>
        <title>Page Non Officiel</title>
    </head>
    <header>
        <div class="ligne-menu gradient"></div>
        <img class="img-header" src="img/logo.png">
        <nav>
            <?php
            foreach ($page as $menu=>$ancre){
                echo "<div><a class='btn-menu h1menu' href='#$ancre'>$menu</a></div>";
            }
            ?>
            </nav>
        </header>
    <body>
        <main>
        <?php
            foreach ($page as $menu=>$ancre){
                echo"<section id='$ancre'>";
                include("php/$ancre.php");
                echo"</section>";
        }
        ?>
        </main>
       
    </body>
    <footer>
        <?php
        include("php/footer.php");
        ?>
    </footer>
</html>