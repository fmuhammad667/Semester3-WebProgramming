<?php
require_once "pdo.php";
session_start();
if (isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["password"])) {
    $sql = "INSERT INTO users (name, email, passord) values (:name, :email, :password)";
    $stmt = $pdo->prepare($sql);
    $stmt->execure(array(":name" => $_POST["name"],
                        ":email" => $_POST["email"],
                        ":password" => $_POST["password"]));
    $_SESSION["succes"] = "Data telah tersimpan Coyyy ! Aman...";
    header("Location: index.php");
    return;
}
?>

<p>Tambah user baru</p>
<form method="post">
    <p>Name: <input type="text" name="name"></p>
    <p>Email: <input type="text" name="email"></p>
    <p>Password: <input type="password" name="password"></p>
    <p><input type="submit" value="Kirimkan data"></p>
    <a href="index.php">Batalkan</a>
</form>

<?php
if (isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["password"])) {
    $sql = "INSERT INTO users (name, email, password) values (:name, :email, :password)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array(
        ":name" => $_POST["name"],
        ":email" => $_POST["email"],
        ":password" => $_POST["password"]
    ));
    $_SESSION["succes"] = "Data telah tersimpan coyyy ! Amaan ...";
    header("Location: index.php");
    return;
}
