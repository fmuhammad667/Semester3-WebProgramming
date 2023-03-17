<?php
    require_once "pdo.php";
    session_start();
    if ( isset($_POST['delete']) && isset($_POST['restoran_id']) ) {
        $sql = "DELETE FROM restoran WHERE restoran_id = :zip";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(array(':zip' => $_POST['restoran_id']));
        $_SESSION['success'] = 'Record deleted';
        header( 'Location: index.php' ) ;
        return;
    }

    $stmt = $pdo->prepare("SELECT nama, restoran_id FROM restoran where restoran_id = :xyz");
    $stmt->execute(array(":xyz" => $_GET['restoran_id']));
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    if ( $row === false ) {
        $_SESSION['error'] = 'Bad value for restoran_id';
        header( 'Location: index.php' ) ;
        return;
    }
?>

<html>
    <head>
        <title>Menghapus Data</title>
        <style>
            
*{
    margin: 0;
    padding: 0;
    outline: 0;
    font-family: 'Open Sans', sans-serif;
}

a {
    display: inline-block;
}

body{
    height: 100vh;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}

.container{
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%,-50%);
    padding: 20px 25px;
    width: 750px;
    margin-top: 10px;
    background-color: rgba(189, 19, 41.7);
    box-shadow: 0 0 10px rgba(255,255,255,.9);}

    .container h2{
        text-align: center;
        color: #fff;
        margin-bottom: 30px;
        text-transform: uppercase;
    }

    .container input {
        display: block-inline;
        width: 100px;
        font-size: 18px;
        margin-top: 8px;
        margin-left: 270px;
        height: 55px;
        border: none;
        background-color: #fff;
        cursor: pointer;
        color: red;
    }

    .container button{
        display: inline-block;
        width: 100px;
        padding: 5px 0;
        border: none;
        background-color:#fff;
        font-size: 18px;
        color: #fafafa;
        cursor: pointer;
        height: 55px;
    }

    .container button a {
        width: 100px;
        display: inline-block;
        text-decoration: none;
        text-align: center;
        line-height: 50px;
        color: red;
        text-align: center;
    }

    .container input:hover {
        background-color: yellow;
        color: #bd1329;
    }
    
    .container button:hover {
        background-color: yellow;
        color: #bd1329;
    }
        </style>
    </head>
    <body>
        <div class="container">
            <h2>KONFIRMASI</h2>
            <h2> Menghapus Data <?= htmlentities($row['nama']) ?> dari LIST ?</h2>
            <form method="post">
            <input type="hidden" name="restoran_id" value="<?= $row['restoran_id'] ?>">
            <input type="submit" value="Delete" name="delete">
            <button><a href="index.php">Cancel</a></button>
            </form>
        </div>
    </body>
</html>
<?php
if ( isset($_POST['delete']) && isset($_POST['restoran_id']) ) {
$sql = "DELETE FROM restoran WHERE restoran_id = :zip";
$stmt = $pdo->prepare($sql);
$stmt->execute(array(':zip' => $_POST['restoran_id']));
$_SESSION['success'] = 'Record deleted';
header( 'Location: index.php' ) ;
return;
}
?>