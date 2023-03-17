<?php
    $oldguess = "";
    $message = false;
    if (isset($_POST["guess"])) {
        $oldguess = $_POST["guess"] + 0;
        if ($oldguess == 42){
            $message = "Great Job!";
        } else if ($oldguess < 42) {
            $message = "Too low";
        } else {
            $message = "Too high";
        }
    }
?>
<html>
    <head>
        <title>A guessing game</title>
    </head>
    <body style="font-family: sans-serif;">
    <!-- identitas mahasiswa -->
    <?php echo "<h3>Nama : Fadhil Muhammad</h3>" ?>
    <?php echo "<h3>Nim : 213051023</h3>"; ?>
    <?php echo "<h3>Kelas : Teknologi Komputer - 21.B</h3>"; ?>

        <p>Guessing game...</p>
        <?php 
            if ($message !== false){
                echo "<p>$message</p>\n";
            } 
            $oldguess = isset($_POST["guess"]) ? $_POST["guess"] : "";
        ?>
        <form method="post">
            <p>
                <label for="guess">Input Guess</label>
                <input type="text" name="guess" id="guess" size=40 value=<?php echo htmlentities($oldguess) ?>>
            </p>
            <input type="submit" value="Kirim!!!">
        </form>
    </body>
</html>