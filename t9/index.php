<?php
require_once "pdo.php";
session_start()
?>

<html>
    <head>
        <title>Halaman Utama</title>
    </head>
    <body>
        <?php
            if (isset($_SESSION["error"])) {
                echo "<p style=\"color: red\">" . $_SESSION["error"] . "<p>\n";
                unset($_SESSION["error"]);
            }
            if (isset($_SESSION["succes"])) {
                echo "<p style=\"color: green\">" . $_SESSION["succes"] . "<p>\n";
                unset($_SESSION["succes"]);
            }
            echo("<table border=\"1\">" . "\n");
        ?>

        <?php 
        echo("<table border=\"1\">" . "\n");
        $stmt = $pdo->query("SELECT name, email, password, user_id FROM users");
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            echo "<tr><td>";
            echo(htmlentities($row["name"]));
            echo("</td><td>");
            echo(htmlentities($row["email"]));
            echo("</td><td>");
            echo(htmlentities($row["password"]));
            echo("</td><td>");
            echo("<a href=\"edit.php?user_id=" . $row["user_id"] . " \">Ubah</a> /");
            echo("<a href=\"delete.php?user_id=" . $row["user_id"] . "\">Hapus</a>");
            echo("</td><td>");
        }
        ?>
        </table>
        <a href="add.php">Tambah baru</a>
        <!-- masih ada halaman 8 -->
    </body>
</html>