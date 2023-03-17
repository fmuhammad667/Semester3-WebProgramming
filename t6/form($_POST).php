<p>Guessing game ...</p>
<form method="post">
    <p><label for="guess">Input Guess</label>
    <input type="text" name="guess" id="guess"></p>
    <input type="submit" value="kirim">
</form>
<pre>
    $_POST :
    <?php
        print_r($_POST);
    ?>
</pre>
<pre>
    $_GET :
    <?php
        print_r($_GET);
    ?>
</pre>