<?php
    // Koneksi Database
    require_once "pdo.php";
    session_start();
    if ( isset($_POST['nama']) && isset($_POST['alamat']) && isset($_POST['kategori']) && isset($_POST['rating']) && isset($_POST['restoran_id']) ) {
    $sql = "UPDATE restoran SET nama= :nama, alamat= :alamat, kategori =:kategori, rating = :rating WHERE restoran_id= :restoran_id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array(
    ':nama' => $_POST['nama'],
    ':alamat' => $_POST['alamat'],
    ':kategori' => $_POST['kategori'],
    ':rating' => $_POST['rating'],
    ':restoran_id' => $_POST['restoran_id']));
    $_SESSION['success'] = 'Record updated';
    header( 'Location: index.php' ) ;
    return;
    }

    $stmt = $pdo->prepare("SELECT * FROM restoran where restoran_id = :xyz");
    $stmt->execute(array(":xyz" => $_GET['restoran_id']));
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    if ( $row === false ) {
    $_SESSION['error'] = 'Bad value for restoran_id';
    header( 'Location: index.php' ) ;
    return;
    }

    $n = htmlentities($row['nama']);
    $a = htmlentities($row['alamat']);
    $k = htmlentities($row['kategori']);
    $r = htmlentities($row['rating']); 
    $restoran_id = $row['restoran_id'];
?>

<html>
    <head>
        <title>Melakukan Perubahan Data</title>
        <style>
*{
    margin: 0;
    padding: 0;
    outline: 0;
    font-family: 'Open Sans', sans-serif;
}

a {
    display: block;
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
    background-color: rgba(125, 161, 219.7);
    box-shadow: 0 0 10px rgba(255,255,255,.9);}

    .container h1{
        text-align: center;
        color: #fff;
        margin-bottom: 30px;
        text-transform: uppercase;
    }

    .container label{
        text-align: left;
        color: #fff;
    }

    .container form input{
        width: calc(100% - 20px);
        padding: 8px 10px;
        margin-bottom: 30px;
        margin-top: 10px;
        border: none;
        background-color: transparent;
        border-bottom: 2px solid #fff;
        color: #fff;
        font-size: 15px;
    }

    .container form button{
        display: inline-block;
        width: 250px;
        padding: 5px 0;
        border: none;
        background-color:#2979ff;
        font-size: 18px;
        color: #fafafa;
        height: 50px;
    }

    .kategori select {
        display: inline-block;
        background-color: fff;
        padding: 5px;
        margin-left: 20px;
        font-size: 14px;
        width: 180px;
    }
    
    .rating select {
        display: inline-block;
        background-color: fff;
        margin-left: 32px;
        padding: 5px;
        font-size: 14px;
    }

    .button {
        display: inline-block;
    }

    .button button {
        margin-top: 30px;
        margin-left: 80px;
        width: 80px;
        height: 50px;
        color: red;
    }

    .button a {
        text-decoration: none;
        color: #fff;
        line-height: 50px;
        text-align: center;
    }
        </style>
    </head>
    <body>
        <div class="container">
            <h1>Edit User</h1>
            <form method="post">

            <!-- update nama restoran -->
            <label>
                Nama Restoran :
                <input type="text" name="nama" value="<?= $n ?>"></p>
            </label>

            <!-- update alamat restoran -->
            <label>
                Alamat :
                <input type="text" name="alamat" value="<?= $a ?>"></p>
            </label>

            <!-- update kategori -->
    <div class="kategori">
    <label>
        Kategori 
        <select name="kategori">
            <option value="Indonesia">Indonesia</option>
            <option value="Sundanese">Sundanese</option>
            <option value="Asia">Asia</option>
            <option value="European">European</option>
            <option value="Western">Western</option>
            <option value="Others">Others</option>
        </select><br>
    </label></div><br>

            <!-- rating -->
            <div class="rating">
                <label>
                    Rating 
                    <select name="rating">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4" selected>4</option>
                            <option value="5">5</option>
                    </select>
                </label></div><br><br>

            <input type="hidden" name="restoran_id" value="<?=$restoran_id ?>">
            <div class="button">
                <button type="submit">Update</button>
                <button><a href="index.php">Cancel</a></button>
            </div>
        </form>
    </body>
</html>

<?php
    if ( isset($_POST['nama']) && isset($_POST['alamat']) && isset($_POST['kategori']) && isset($_POST['rating']) && isset($_POST['restoran_id']) ) {
    $sql = "UPDATE restoran SET nama= :nama, alamat= :alamat, kategori =:kategori, rating = :rating WHERE restoran_id= :restoran_id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array(
    ':nama' => $_POST['nama'],
    ':alamat' => $_POST['alamat'],
    ':kategori' => $_POST['kategori'],
    ':rating' => $_POST['rating'],
    ':restoran_id' => $_POST['restoran_id']));
    $_SESSION['success'] = 'Record updated';
    header( 'Location: index.php' ) ;
    return;
    }
?>