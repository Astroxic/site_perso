<?php
$content=\file_get_contents('yaml/menu.yaml');
$page=yaml_parse($content);
?>
<html lang="fr-FR">
    <head>
        <meta name="viewport" content="width=device-width, initial scale=1.0" charset="utf-8">
        <link rel="stylesheet" href="style.css"/>
        <title>Page Non Officiel</title>
        <script src="https://www.google.com/recaptcha/api.js?render="></script>
    </head>
    <header>
        <div class="ligne-menu gradient"></div>
        <h1>Pilard Vincent</h1>
        <nav class="navbar">
            <ul class="navbar-menu">               
                <?php
                foreach ($page as $menu=>$nav){?>
                    <li class=""> <?php 
                        echo "<a href='#$nav' class='btn-menu navbar-link '>"."<span>$menu</span>"."</a>"."</li>";
                }?>    
            </ul>
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