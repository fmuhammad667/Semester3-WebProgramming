<?php
    $oldguess = isset($_POST["guess"]) ? $_POST['guess'] : "";
?>
<p>Guessing game...</p>
<form method="post">
    <p>
        <label for="guess">Input Guess</label>
        <input type="text" name="guess" id="guess" size="40" value="<?php echo htmlentities($oldguess); ?>">
    </p>
    <input type="submit" value="kirim!">
</form>
<pre>
    $_POST:
    <?php
        var_dump($_POST);
    ?>
</pre>