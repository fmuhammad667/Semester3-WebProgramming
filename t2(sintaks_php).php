<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sintaks PHP Dasar</title>
</head>
<body>

<!-- Identitas Mahasiswa  -->
<h1>Nama : Fadhil Muhammad</h1>
<h1>Nim : 213051023</h1>
<hr>


<!-- Modul PHP - halaman 5 -->
<h1>Hello from Dr. Chuck's HTML Page</h1>
<p>
    <?php
        echo "Hi there, \n";
        $answer = 6 * 7;
        echo "The answer is $answer, what";
        echo "was the question again ? \n"
    ?>
</p>
<p>Yes another paragraph.</p>
<br>


<!-- Modul PHP - Halaman 6 - PHP from the Command Line -->
<?php 
    echo("Hello World!");
    echo("\n");
?>
<br>


<!-- Modul PHP - Halaman 7 - Variable Names -->
<?php 
$abc = 12;
$total = 0;
$largest_so_far = 0;

// contoh sintaks deklarasi variable yang Error
// abc = 12;
// $2php = 0;
// $bad-punch = 0;
?>
<br>    


<!-- Modul PHP - Halaman 9 - Strings -->
<?php
    echo "this is a simple string\n";
    echo "You can also have embedded newlines in
    strings this way as it is 
    okay to do";

    echo "This will expand: \n a newline";
    // output sesuai dengan yang ditulis

    $expand = 12;
    echo "Variables do $expand \n";
    // output sesuai dengan yang ditulis 
?>
<br>


<!-- Modul PHP - Halaman 10 - Strings -->
<?php
    echo 'this is a simple string\n';
    // jika menggunakan petik satu maka tidak bisa menjalankan escape

    echo 'You can also have embedded newlines in
    string this way as it is 
    okay to do';

    echo 'Arnold once said: "I\'ll be back"'
?>
<br>


<!-- Modul PHP - Halaman 11 - Comments in PHP -->
<?php
    echo 'This is a test'; // this is a c++ style comment

    /* 
    This is a multi line comment
    yet another line of comment
    */

    echo 'This is yet another test';
    echo 'One Final Test'; #this is a shell-style comment
?>
<br>


<!-- Modul PHP - Halaman 12 - Output -->
<?php
$x = "15" + 27;
echo $x;
echo("\n");
echo $x, "\n";

print $x;
print "\n";
print($x);
print("\n");
?>
<br>


<!-- Modul PHP - Halaman 13 - expression -->
<?php
    $x = "15" + 27;
    echo($x);
    echo("\n");
?>
<br>



<!-- Modul PHP - Halaman 16 - Increment & Decrement -->
<?php
$x = 12;
$y = 15 + $x++;
echo "x is $x and $y \n;";
?>

<!-- artinya sama saja sintaksnya dengan -->
<!-- Modul PHP - Halaman 17 - Increment & Decrement -->
<?php
$x = 12;
$y = 15 + $x;
$x = $x + 1;
echo "x is $x and y is $y \n";
?>
<br>



<!-- Modul PHP - Halaman 18 - string concatenation -->
<?php
$a = "Hello " . "World!";
echo $a . "\n";
?>
<br>



<!-- Modul PHP - Halaman 19 - ternary -->
<?php
$www = 123;
$msg = $www > 100 ? "Large" : "Small";
echo "First: $msg \n";
$msg = ($www % 2 == 0) ? "Even" : "Odd";
echo "Second: $msg\n";
$msg = ($www % 2) ? "Odd" : "Even";
echo "Third: $msg \n";
?>
<br>



<!-- Modul PHP - Halaman 20 - Side-Effect Assignment -->
<?php
echo "\n";
$out = "Hello";
$out = $out . " ";
$out .= "World!";
$out .= "\n";
echo $out;
$count = 0;
$count + 1;
echo "Count: $count \n";
?>
<br>



<!-- Modul PHP - Halaman 22 - Converson / Casting -->
<?php
$a = 56;
$b = 12;
$c = $a / $b;
echo "C: $c\n";
$d = "100" + 36.25 + true;
echo "D: " . $d . "\n";
echo "D2: " . (string) $d . "\n";
$e = (int) 9.9 - 1;
echo "E: $e\n";
// $f = "sam" + 25;
// echo "F: $f\n"; 
// F akan menghasilkan error
$g = "sam" . 25;
echo "G: $g\n";
?>
<br>



<!-- Modul PHP - Halaman 23 - Equality versus Identity -->
<?php
if (123 == "123") print ("Equality 1 \n");
if (123 == "100" + 23) print ("Equality 2 \n");
if (FALSE == "0") print ("Equality 3 \n");
if ( (5 < 6) == "2" - "1" ) print ("Equality 4 \n");
if ( (5 < 6) === TRUE ) print ("Equality 5 \n");
?>

</body>
</html>