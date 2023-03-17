<?php
echo "<h1>Tugas Praktikum 4</h1>";
echo "<p style=\"color: blue;\">Nama : Fadhil Muhammad</p>";
echo "<p style=\"color: blue;\">NIM : 213051023</p>";
echo "<p style=\"color: blue;\">Kelas Tekom - B</p>";
echo "<br>";
?>
<br>


<!-- Modul PHP - Halaman 4 - Array Functions -->
<?php
$za = array();
$za["name"] = "Chuck";
$za["course"] = "WA4E";

if (array_key_exists('course', $za) ) {
echo("Course exists\n");
} else {
echo("Course does not exists\n");
}

echo isset($za['name']) ? "name is set\n" : "name is not set\n";
echo isset($za['addr']) ? "addr is set\n" : "addr is not set\n";
?>
<br>


<!-- Modul PHP - Halaman 6 - Null coalescing operator -->
<?php
$za = array();
$za["name"] = "Chuck";
$za["course"] = "WA4E";

// PHP >= 7.0.0 only
$name = $za['name'] ?? 'not found';
$addr = $za['addr'] ?? 'not found';

echo("Name=$name\n");
echo("Addr=$addr\n");

// PHP < 7.0.0 equivalent
$name = isset($za['name']) ? $za['name'] : 'not found';
?>
<br>


<!-- Modul PHP - Halaman 7 - Null coalescing operator -->
<?php
$za = array();
$za["name"] = "Chuck";
$za["course"] = "WA4E";
print "Count: " . count($za) . "\n";
if ( is_array($za) ) {
echo '$za Is an array' . "\n";
} else {
echo '$za Is not an array' . "\n";
}
?>
<br>


<!-- Modul PHP - Halaman 8 - Null coalescing operator -->
<?php
$za = array();
$za["name"] = "Chuck";
$za["course"] = "WA4E";
$za["topic"] = "PHP"; print_r($za); sort($za);
print_r($za);
?>
<br>


<!-- Modul PHP - Halaman 9 - Null coalescing operator -->
<?php
$za = array();
$za["name"] = "Chuck";
$za["course"] = "WA4E";
$za["topic"] = "PHP"; print_r($za);
ksort($za);
print_r($za); asort($za); print_r($za);
?>
<br>


<!-- Modul PHP - Halaman 10 - Exploding Array -->
<?php
$inp = "This is a sentence with seven words";
$temp = explode(' ', $inp);
print_r($temp);
?>
<br>


<!-- Modul PHP - Halaman 12 -$GET_Array -->
<h1>Contents of the $_GET array</h1>
<p> Using print_r:</p>
<pre>
<?php
print_r($_GET);
?>
</pre>
<p>Using var_dump:</p>
<pre>
<?php
var_dump($_GET);
?>
</pre>
