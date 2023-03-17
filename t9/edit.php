<?php
require_once "pdo.php";
session_start();
if (isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["user_id"])) {
    $sql = "UPDATE users SET name = :name, email = :email, password = :password WHERE user_id = :user_id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array(
        ":name" => $_POST["name"],
        ":email" => $_POST["email"],
        ":password" => $_POST["password"],
        ":user_id" => $_POST["user_id"]
    ));
    $_SESSION["succes"] = "Table telah terubah";
    header("Location: index.php");
    return;
}
$stmt = $pdo->prepare("SELECT * FROM users where user_id = :xyz");
$stmt->execute(array(":xyz" => $_GET["user_id"]));
$row = $stmt->fetch(PDO::FETCH_ASSOC);
if ($row === false) {
    $_SESSION["error"] = "Nilai kurang untuk user_id";
    header("Location: index.php");
    return;
}
$n = htmlentities($row["name"]);
$n = htmlentities($row["email"]);
$n = htmlentities($row["password"]);
$user_id = $row["user_id"];
?>
<p>Edit Data</p>
<form method="post">
    <p> Name :
        <input type="text" name="name" value="<?= $n ?>"></p>
    </p>
    <p> email :
        <input type="text" name="email" value="<?= $e ?>"></p>
    </p>
    <p> Password :
        <input type="text" name="password" value="<?= $p ?>"></p>
    </p>
    <input type="hidden" name="user_id" value="<?= $user_id ?>">
    <input type="submit" value="Rubah">
    <a href="index.php">Batalkan</a>
</form>
<?php
if (isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["user_id"])) {
    $sql = "UPDATE users SET name = :name, email = :email, password = :password, WHERE user_id = :user_id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array(
        ":name" => $_POST["name"],
        ":email" => $_POST["email"],
        ":password" => $_POST["password"],
        ":user_id" => $_POST["user_id"]
    ));
    $_SESSION["succes"] = "Data telah terubah";
    header("Location: index.php");
    return;
}