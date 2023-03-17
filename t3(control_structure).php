<?php
    echo "<h1>Tugas Praktikum 03</h1>";
    echo "<h2>Dasar PHP bagian 02</h2>";
    echo "<p>Nama : Fadhil Muhammad</p>";
    echo "<p>Nim : 213051023<p>";
    echo "<br>";
?>



<!-- Modul PHP - Halaman 3 - Conditional If -->
<?php $ans = 42;
if ($ans == 42 ) {
    print "Hello world!\n";
} else {
    print "Wrong answer\n";
}
?>
<br>


<!-- Modul PHP - Halaman 4 - kita juga dapat menulisnya secara langsung, tanpa menurunkannya ke bawah -->
<?php $ans = 43; if ($ans == 43) { print 
"Hello World!\n"; } else { print "Wrong answer\n"; }
?>
<br>


<!-- Modul PHP - Halaman 5 - style dari coding Pertama -->
<?php
    $ans = 42;
    if ($ans == 42) {
        print "Hello world!\n";
    } else {
        print "wrong answer\n";
    }
?>
<br>

<!-- Modul PHP - Halaman 5 - style dari coding kedua -->
<?php
    $ans = 42;
    if ($ans == 42) 
    {
        print "Hello world!\n";
    } 
    else 
    {
        print "wrong answer\n";
    }
?>
<br>

<!-- Modul PHP - Halaman 6 - Multi way (percabangan elseif) -->
<?php
    $nilai = 7;
    if ($nilai < 2) {
        print "Small\n";
    } elseif ($nilai < 10) {
        print "Medium\n";
    } else {
        echo "Large\n";
    }
    echo "Percabangan telah selesai\n";
?>
<br>


<!-- Modul PHP - Halaman 7 - Curly Braces are not required -->
<?php 
// if      ($page == "Home") echo "You selected Home";
// else if ($page == "About") echo "You selected About";
// else if ($page == "News") echo "You selected News";
// else if ($page == "Login") echo "You selected Login";
// else if ($page == "Links") echo "You selected Links";

// if      ($page == "Home") { echo "You selected Home"; }
// else if ($page == "About") { echo "You selected About"; }
// else if ($page == "News") { echo "You selected News"; }
// else if ($page == "Login") { echo "You selected Login"; }
// else if ($page == "Links") { echo "You selected Links"; }
?>


<!-- Modul PHP - Halaman 8 - While loop (perulangan while) -->
<?php
    $angka = 10;
    while ($angka >= 1) {
        echo "ini nilai ke-$angka\n";
        $angka--;
    }
?>
<br>


<!-- Modul PHP - Halaman 9 - Do While Loop (perulangan do while) -->
<?php
    $count = 1;
    do {
        echo "$count dikali 5 menghasilkan " . $count * 5 . "\n";
    } while (++$count <= 5);
?>
<br>


<!-- Modul PHP - Halaman 10 - For Loop (Perulangan for) -->
<?php
    for ($angkana = 0; $angkana < 10; $angkana++){
        echo "ini baris ke-$angkana\n";
    }
?>
<br>


<!-- Modul PHP - Halaman 11 - Break out of a Loop -->
<?php
for ($count = 0; $count <= 10; $count++ ){
    if ($count == 7) break;
        echo "Count terakhir adalah $count\n";
    }
echo "Perulangan menggunakan break telah selesai";
?>
<br>


<!-- Modul PHP - Halaman 12 - Finishing an Iteration with continue -->
<?php
    for ($nomor = 1; $nomor <= 10; $nomor++){
        if ($nomor % 2 == 0) continue;
        echo "angka yang dihasilkan adalah : $nomor";
    }
    echo "Perulangan menggunakan continue telah selesai";
?>
<br>


<!-- Modul PHP - Halaman 15 - Integer Indices -->
<?php
    $array1 = array("Hello", "My", "Name", "Is", "Fadhil");
    echo $array1[4];
?>
<br>


<!-- Modul PHP - Halaman 16 - Key/Value -->
<?php
    $array2 = array("ngaran" => "Fadhil",
                      "kelas" => "Tekom - B");
    echo $array2["kelas"];
?>
<br>

<!-- Modul PHP - Halaman 17 - Dumping an Array (menggunakan print_r()) -->
<?php
    $array3 = array("namaku" => "Fadhil",
                     "kelasku" => "Tekom - B");
    echo "<pre>";
    print_r($array3);
    echo "</pre>";
    // kesimpulan
    echo "print_r akan menampilkan isi array secara singkat tanpa menampilkan tipe data-nya"
?>
<br>


<!-- Modul PHP - Halaman 18 - Dumping on Array (menggunakan var_dump())-->
<?php
    $array4 = array("name" => "jhon",
                    "country" => "america");
    var_dump($array4);
    // kesimpulan 
    echo "var_dump() akan menampilkan data secara lengkap termasuk dengan tipe data-nya"
?>
<br>


<!-- Modul PHP - Halaman 19 - Building up an array -->
<?php
$arraybaru = array();
$arraybaru[] = "Indonesia";
$arraybaru[] = "Australia";
print_r($arraybaru);
?>
<br>


<!-- Modul PHP - Halaman 20 - Building Up an Array (menggunakan key & value) -->
<?php
$arraybaru1 = array();
$arraybaru1["nama"] = "Mitsurugi";
$arraybaru1["alamat"] = "Ciparay";
var_dump($arraybaru1);
?>
<br>


<!-- Modul PHP - Halaman 21 - Looping through an array (menggunakan foreach) -->
<?php
    $array5 = array("Indonesia" => "negara",
                    "Jakarta" => "ibukota",);
    foreach($array5 as $variable => $subjek) {
        echo "Key = $variable " . "Val = $subjek \n";
    }

// ujicoba pribadi
    $ujiCobaArray = ["Asep", "Budi", "Citra", "Diva", 1, 2, 3, true, false];
    foreach ($ujiCobaArray as $arrayUji) {
        echo "$arrayUji\n";
    }
?>
<br>


<!-- Modul PHP - Halaman 22 - Looping through an array (menggunakan foreach-2) -->
<?php
    $array6 = array("Hirohito", "Hitler", "Stalin", "Churchil", "Musollini");
    foreach ($array6 as $key => $diktator){
        echo "no. $key pemimpinnya ialah $diktator \n";
    }
?>
<br>


<!-- Modul PHP - Halaman 23 - Counted Loop through an array -->
<?php
    $array7 = array("Indonesia", "Australia", "Japan", "Arab saudi");
    for($i = 0; $i < count($array7); $i++) {
        echo "index $i isinya adalah " . $array7[$i] . "\n";
    }
?>
<br>


<!-- Modul PHP - Halaman 24 - Arrays of Arrays -->
<?php
    $array8 = array(
        "Indonesia" => array(
            "Ibukota" => "Jakarta"
        ),
        "Japan" => array(
            "Ibukota" => "Tokyo"
        )
        );
    echo $array8["Japan"]["Ibukota"];

// ujicoba
$MencobaArray = [[1,2,3], [4,5,6], [7,8,9]];
    echo $MencobaArray[2][1]
?>
<br>