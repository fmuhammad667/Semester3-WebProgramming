<?php
    session_start();
?>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <h1>Selamat datang di Aplikasi</h1>
        <?php
            if (isset($_SESSION["succes"])) {
                echo('<p style="color: green">'.$_SESSION["succes"]."</p>\n");
                unset($_SESSION["succes"]);
            }

            // pengecheckan menggunakan if 
            if (! isset($_SESSION["account"])) {
                echo("<p>Silahkan <a href=\"login.php\"> Log in</a> untuk memulai </p>" . "\n");
            } else {
                echo("<p>This is where cool application would be.</p>" . "\n");
                echo("<p>Please <a href=\"logout.php\"> Log out </a> when you are done.<p>" . "\n");
            }
        ?>
    </body>
</html>