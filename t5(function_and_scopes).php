<!-- Introduces -->
<?php
    echo "<h1 style=\" line-height: 30px\">Tugas Praktikum 05</h1>";
    echo "<h1>Function and Scopes</h1>";
    echo "<p style=\" color: blue; font-size: 20px\">Nama : Fadhil Muhammad</p>";
    echo "<p style=\" color: blue; font-size: 20px\">NIM : 213051023</p>";
    echo "<p style=\" color: blue; font-size: 20px\">Kelas : Tekom - B</p>";
?>



<!-- Modul PHP - Halaman 2 - Built-in Functions -->
<?php
echo strrev("dlrow olleH") . "\n";
echo str_repeat("Uraaaa!", 3) . "\n";
echo strtoupper("indonesia") . "\n";
echo strlen("Fadhil Muhammad") . "\n";
?>
<br>



<!-- Modul PHP - Halaman 3 - Defining you own Function -->
<?php
function ucapanhallo() {
    echo "Tepangkeun baraya!";
}

ucapanhallo();
ucapanhallo();
?>
<br>



<!-- Modul PHP - Halaman 5 - Return Values -->
<?php
function greeting() {
    return "hello \n";
}

greeting() . " Fadhil\n";
greeting() . " Kyouya\n";
?>
<br>



<!-- Modul PHP - Halaman 6 - Arguments -->
<?php
function tebakbahasa($b) {
    if ($b == "jp") return "Ohayou Gozaimasu";
    if ($b == "id") return "Selamat Pagi";
    return "hello";
}

echo tebakbahasa("jp") . "Kyouya\n";
echo tebakbahasa("id") . "Fadhil\n";
?>
<br>



<!-- Modul PHP - Halaman 7 - Optional Arguments -->
<?php
function tebakbahasa1($b = "en") {
    if ($b == "jp") return "Ohayou Gozaimasu";
    if ($b == "id") return "Selamat Pagi";
    return "hello";
}

echo tebakbahasa1("en") . "Jimmy\n";
echo tebakbahasa1("id") . "Fadhil\n";
?>
<br>



<!-- Modul PHP - halaman 8 - Call by Value -->
<?php
function perkalian($nomor) {
    $nomor = $nomor * 2;
    return $nomor;
}
$val = 10;
$dval = perkalian($val);
echo "Nilai = $val, jika dikali (*2) hasilnya = $dval\n";
?>
<br>



<!-- Modul PHP - Halaman 9 - call by reference -->
<?php
function perkaliantiga(&$angka){
    $angka = $angka * 3;
}

$nilai = 10;
perkaliantiga($nilai);
echo "nilai dari 10 jika dikali 3 adalah " . $nilai . PHP_EOL;
echo $nilai . "\n";
?>
<br>



<!-- Modul PHP - halaman 11 - Normal Scope (isolated) -->
<?php
function tryzap() {
    $values = 100;
}

$values = 10;
tryzap();
echo "Tryzap = $values\n";
?>
<br>



<!-- Modul PHP - Halaman 12 - Global Scope (shared) -->
<?php
function coba() {
    global $valvil;
    $valvil = 166;
}

$valvil = 10;
coba();
echo "coba mempunyai nilai $valvil";
?>
