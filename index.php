<?php
$content=\file_get_contents('yaml/menu.yaml');
$page=yaml_parse($content);
?>
<html lang="fr-FR">
    <head>
        <meta name="viewport" content="width=device-width, scale=1.0" charset="utf-8">
        <link rel="stylesheet" href="style.css"/>
        <title>Page Officielle</title>
        <script src="https://www.google.com/recaptcha/api.js?render="></script>
        <script type="text/javascript" src="js/code.js"></script>
    </head>
    <header>
        <div class="ligne-menu gradient"></div>
        <h1>Pilard Vincent</h1>
        <nav id="nav">
            <div class="menu-btn"><div class="hamburger"></div></div>
            <ul class="menu-items" role="menu-items">               
                <?php
                foreach ($page as $menu=>$nav){?>
                    <li class="menu-item"> <?php 
                        echo "<a href='#$nav'>"."<span>$menu</span>"."</a>"."</li>";
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