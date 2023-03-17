<?php
require_once "pdo.php";
session_start();
if (isset($_POST['nama']) && isset($_POST['alamat']) && isset($_POST['kategori']) && isset($_POST['rating'])) {
$sql = "INSERT INTO restoran (nama, alamat, kategori, rating) VALUES (:nama, :alamat, :kategori, :rating)";
$stmt = $pdo->prepare($sql);
$stmt->execute(array(
':nama' => $_POST['nama'],
':alamat' => $_POST['alamat'],
':kategori' => $_POST['kategori'],
':rating' => $_POST['rating']));
$_SESSION['success'] = 'Data berhasil diTambahkan';
header( 'Location: index.php' ) ;
return;
}
?>

<html>
    <head>
        <title>Menambahkan data baru</title>
        <style>
            *{
    margin: 0;
    padding: 0;
    outline: 0;
    font-family: 'Open Sans', sans-serif;
}

body{
    height: 100vh;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}

a {
    display: inline-block;
}

.container{
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%,-50%);
    padding: 20px 25px;
    width: 750px;
    margin-top: 40px;
    background-color: rgba(4,170,109,.7);
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
        margin-bottom: 15px;
        margin-top: 10px;
        border: none;
        background-color: transparent;
        border-bottom: 2px solid #fff;
        color: #fff;
        font-size: 15px;
    }

    .container form button{
        width: 250px;
        /* padding: 5px 0; */
        height: 30px;
        border: none;
        background-color:#2979ff;
        font-size: 18px;
        color: #fafafa;
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

    .button a {
        text-decoration: none;
        color: #fff;
        text-align: center;
        width: 250px;
        line-height: 30px;
        height: 30px;
        /* cursor: pointer; */
    }
    
    .button {
        display: block;
        padding: 15px;
        margin: 0px auto;
        margin-left: -15px;
        /* margin-right: 100px; */
        cursor: pointer;
        /* background-color: white; */
    }

    .button button:hover {
        cursor: pointer;
        background-color: white;
        color: #0d3e8c;
    }

    .button button:active {
        cursor: wait;
    }

    .button button a:hover {
        color: #0d3e8c;
    }
        </style>
    </head>
    <body>
        <div class="container">
<h1>Tambah data baru</h1>
<form method="post">

    <!-- nama restoran -->
    <label>
        Nama Restoran :
        <input type="text" name="nama" placeholder="Inputkan Nama Restoran"><br>
    </label><br>

    <!-- alamat restoran -->
    <label>
        Alamat :
        <input type="text" name="alamat" placeholder="Inputkan Alamat Restoran"><br>
    </label><br>

    <!-- kategori -->
    <div class="kategori">
    <label>
        Kategori 
        <select name="kategori">
            <option value="Indonesia" selected>Indonesia</option>
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

                <div class="button">
<button type="submit">Tambahkan</button>
<button><a href="index.php">Cancel</a></button>
</div>
</form>
</div>
</body>
</html>

<?php
if (isset($_POST['nama']) && isset($_POST['alamat']) && isset($_POST['kategori']) && isset($_POST['rating'])) {
$sql = "INSERT INTO restoran (nama, alamat, kategori, rating) VALUES (:nama, :alamat, :kategori, :rating)";
$stmt = $pdo->prepare($sql);
$stmt->execute(array(
':nama' => $_POST['nama'],
':alamat' => $_POST['alamat'],
':kategori' => $_POST['kategori'],
':rating' => $_POST['rating']));
$_SESSION['success'] = 'Data berhasil diTambahkan';
header( 'Location: index.php' ) ;
return;
}
?>