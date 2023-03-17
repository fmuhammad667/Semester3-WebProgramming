<?php
require_once "pdo.php";
session_start();
if (isset($_POST["delete"]) && isset($_POST["user_id"])) {
    $sql = "DELETE FROM users WHERE user_id = :zip";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array(":zip" => $_POST["user_id"]));
    $_SESSION["succes"] = "Data telah berhasil dihapus, Anjay ...";
    header("Location: index.php");
    return;
}
$stmt = $pdo->prepare("SELECT name, user_id FROM users WHERE user_id = :xyz");
$stmtt->execute(array(":xyz" => $_GET["user_id"]));
$row = $stmt->fetch(PDO::FETCH_ASSOC);
if ($row === false) {
    $_SESSION["error"] = "Nilai tidak valid untuk user_id";
    header("Location: index.php");
    return;
}
?>
<p>Konfirmasi: Penghapusan <?php echo htmlentities($row["name"]) ?></p>
<form method="post">
    <input type="hidden" name="user_id" value="<?= $row["user_id"] ?>">
    <input type="submit" value="Hapus" name="delete">
    <a href="index.php">Batalkan</a>
</form>
<?php
if (isset($_POST["delelte"]) && isset($_POST["user_id"])) {
    $sql = "DELETE FROM users WHERE user_id = :zip";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array(":zip" => $_POST["user_id"] ));
    $_SESSION["succes"] = "Data telah berhasil dihapus, Anjay ...";
    header("Location: index.php");
    return;
}














?>

