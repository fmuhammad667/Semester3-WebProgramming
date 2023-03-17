<!DOCTYPE html>
<html>
<head>
    <title>Guessing Game</title>
</head>
<body>
    <!-- identitas mahasiswa -->
    <?php echo "<h3>Nama : Fadhil Muhammad</h3>" ?>
    <?php echo "<h3>Nim : 213051023</h3>"; ?>
    <?php echo "<h3>Kelas : Teknologi Komputer - 21.B</h3>"; ?>

    <h1>Welcome to my pressing game</h1>
    <p>
        <?php
            if(!isset($_GET["guess"])){
                echo "Missing guess parameter";
            } else if (strlen($_GET["guess"]) < 1 ){
                echo "Your guess is too short";
            } else if (!is_numeric($_GET["guess"])){
                echo "Your guess is not a number";
            } else if($_GET["guess"] < 42){
                echo "Your guess is too low";
            } else if($_GET["guess"] > 42){
                echo "Your guess is too high";
            } else {
                echo "Congratulations - You are right";
            }
        ?>
    </p>
</body>
</html>