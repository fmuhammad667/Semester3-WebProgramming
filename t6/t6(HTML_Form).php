<!DOCTYPE html>
<html>
<head>
    <title>Tugas6 - HTML FORM</title>
    <style>
        h2 {
            color : blue;
            font-size: 30px;
            line-height: 13px;
        }
    </style>
</head>
<body>
    <!-- Introduce -->
    <h2>Nama : Fadhil Muhammad</h2>
    <h2>Nim : 213051023</h2>
    <h2>Kelas : Tekom 21.B</h2>

    <!-- halaman 14 -->
    <p>Many field types ...</p>
    <form method="post">
    <p><label for="inp01">Account</label>
    <input type="text" name="account" id="inp01" size="40"></p>
    <p><label for="inp02">Password</label>
    <input type="password" name="password" id="inp02" size="40"></p>
    <p><label for="inp03">Nickname</label>
    <input type="text" name="nick" id="inp03" size="40"></p>

    <!-- halaman 15 -->
    <p>
        Preferred Time : 
        <br>
        <input type="radio" name="when" value="am">AM <br>
        <input type="radio" name="when" value="pm">PM
    </p>

    <!-- halaman 16 -->
    <p>Classes taken : <br>
    <input type="checkbox" name="class1" value="si502"> SI502 - PHP Framework<br>
    <input type="checkbox" name="class2" value="si539"> SI539 - Version Control System (GIT)<br>
    <input type="checkbox" name="class3" value="si987"> SI987 - Arch Linux<br>
    </p>

    <!-- halaman 17 -->
    <p>
        <label for="inp06">Which Soda : </label>
        <select name="soda" id="inp06">
            <option value="0">-- Select your option --</option>
            <option value="1">Coca Cola</option>
            <option value="2">Pepsi</option>
            <option value="3">Teh Sisri</option>
            <option value="4">Kratingdaeng</option>
            <option value="5">Extrajoss</option>
        </select>
    </p>

    <!-- halaman 18 -->
    <p>
        <label for="inp07">Which Snack : </label>
        <select name="snack" id="inp07">
            <option value="">--- Please select this option ---</option>
            <option value="potato">Potato</option>
            <option value="peanuts">Peanuts</option>
            <option value="cookie">Cookie</option>
        </select>
    </p>

    <!-- halaman 19 -->
    <p>
        <label for="inp08">Tell us about yourself : <br> </label>
        <textarea name="about" id="inp08" cols="50" rows="10" placeholder="masukan inputan mengenai data diri anda"></textarea>
    </p>

    <!-- halaman 20 -->
    <p>
        <label for="inp09">Which are awesome ? <br> </label>
        <select multiple="multiple" name="code[]" id="inp09">
            <option value="javascript">Javascript</option>
            <option value="golang">Go language</option>
            <option value="PHP">PHP</option>
            <option value="dart">Dart</option>
            <option value="java">Java</option>
            <option value="cpp">C++</option>
        </select>
    </p>

    <!-- halaman 21 -->
    <p>
        <input type="submit" value="gass kirim!">
        <input type="button" value="Escape" onclick="location.href='http://www.facebook.com'">
    </p>
    </form>

    <!-- hasil akhir inputan -->
    <pre>
    $_POST :
        <?php
            print_r($_POST);
        ?>
    </pre>

</body>
</html>