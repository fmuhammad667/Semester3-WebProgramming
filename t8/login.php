<?php 
    session_start();
    if (isset($_POST["account"]) && isset($_POST["pw"])) {
        unset($_SESSION["account"]);
        if( $_POST["pw"] == "fadhil") {
            $_SESSION["account"] = $_POST["account"];
            $_SESSION["succes"] = "Anda telah login";
            header('Location: app.php');
            return;
        } else {
            $_SESSION["error"] = "User / Password salah";
            header('Location: login.php');
            return;
        }
    }
?>


<html>
    <body>
        <h3 style="color: blue">Nama : Fadhil Muhammad</h3>
        <h3 style="color: blue">Kelas : Tekom 21.B</h3>
        <h3 style="color: blue">NIM : 213051023</h3>
        <br>
        <hr>
        <br>
        <h1>Please Log in</h1>
        <?php 
        if (isset($_SESSION["error"]) ) {
            echo('<p style="color: red">.'.$_SESSION["error"]."</p>\n");
            unset($_SESSION["error"]);
        } if ( isset($_SESSION["succes"])) {
            echo('<p sytle="color : green">'.$_SESSION["succes"] . "</p>\n");
            unset($_SESSION["succes"]);
        }
        ?>
        <form method="post">
            <p>Akun : <input type="text" name="account" value="" placeholder="silahkan masukan id anda"></p>
            <p>Password : <input type="password" name="pw" value="" placeholder="silahkan masukan password anda"></p>
            <!-- passwordnya harus isi dengan fadhil -->
            <p><input type="submit" value="GASS! Login..."></p>
            <a href="app.php">Kembali ke halaman utama</a>
        </form>
    </body>
</html>