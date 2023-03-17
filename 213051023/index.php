<?php
// INCLUDE DATABASE
require_once "pdo.php";
session_start();
?>

<html>
    <!-- Bagian Awal dari Tag HTML -->
    <head>
        <!-- Bagian Awal Dari Tag head -->
        <title>List Database Restoran</title>
        <style>
            /*Desain Table*/
            .table1 {
                font-family: sans-serif;
                color: #444;
                border-collapse: collapse;
                border: 1px solid #f2f5f7;
                margin-bottom: 30px;
            }

            .table1 tr th{
                background: #35A9DB;
                color: #fff;
                font-weight: normal;
            }

            a:visited {
                color: blue;
            }

            .table1, th, td {
                padding: 8px 20px;
                text-align: center;
            }

            .table1 tr:hover {
                background-color: #f5f5f5;
            }

            .table1 tr:nth-child(even) {
                background-color: #f2f2f2;
            }

            h1 {
                text-align: center;
            }

            h2 {
                display: inline;
            }

            a {
                text-decoration: none;
            }

            .add a {
            background-color: #04AA6D;
            border: none;
            color: white;
            padding: 16px 32px;
            text-decoration: none;
            /* margin-top: 50px; */
            margin-top:0px; /*untuk tengah ganti value manjadi auto*/
            margin-left: 178px;
            margin-bottom: 50px;
            width: 200px;
            cursor: pointer;
            text-align: center;
            display: inline-block;
            }

            .clear {
                clear: both;
            }
        </style>

        <script
            src="https://code.jquery.com/jquery-2.2.4.min.js"
            integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
            crossorigin="anonymous">
        </script>
    <!-- bagian Akhir dari Tag Head -->
    </head>

    <body>
        <!-- Bagian Body -->
        <?php
            // pengecheckkan Sesssion
            if ( isset($_SESSION['error']) ) {
            echo '<p style="color:red">'.$_SESSION['error']."</p>\n";
            unset($_SESSION['error']);
            }
            if ( isset($_SESSION['success']) ) {
            echo '<p style="color:green">'.$_SESSION['success']."</p>\n";
            unset($_SESSION['success']);
            }
        ?>
        
        <!-- Include JAM dan waktu -->
        <?php 
            echo "<h2>";
            echo date('l');
            echo "<br>";
            echo date('d M y');
            echo "</h2>";
        ?>
        <br>
        <h2 id="timestamp" style="text-align: 'right';"></h2>
        <script>
            $(function() {
                setInterval(timestamp, 1000);//fungsi yang dijalan setiap detik, 1000 = 1 detik
            });
            
            function timestamp() {
                $.ajax({
                url: 'time.php',
                success: function(data) {
                    $('#timestamp').html(data);
                    },
                });
            }
        </script>

        <?php
            // Bagian judul List
            echo "<h1>List Restoran dan tempat makan di wilayah Bandung & Sekitarnya</h1>";
            
            // Bagian Tag Table
            echo('<table border="1" cellspacing="1" cellpadding="5" class="table1" align="center">'."\n");
            echo "<thead>"; 
            echo "<tr><th>";
            echo "No</th>"; // judul 1
            echo "<th>Nama</th>"; // judul 2
            echo "<th>Alamat</th>"; // judul 3
            echo "<th>Kategori</th>"; // judul 4
            echo "<th>Rating</th>"; // judul 5
            echo "<th>Ubah / Hapus</th>"; // judul 6
            $stmt = $pdo->query("SELECT restoran_id, nama, alamat, kategori, rating FROM restoran ORDER BY restoran_id ASC");
            while ( $row = $stmt->fetch(PDO::FETCH_ASSOC) ) {
            echo "<tr><td>";
            echo(htmlentities($row['restoran_id']));
            echo("</td><td>");
            echo(htmlentities($row['nama']));
            echo("</td><td>");
            echo(htmlentities($row['alamat']));
            echo("</td><td>");
            echo(htmlentities($row['kategori']));
            echo("</td><td>");
            echo(htmlentities($row['rating']));
            echo("</td><td>");
            echo('<a href="edit.php?restoran_id='.$row['restoran_id'].'">Edit</a> / ');
            echo('<a href="delete.php?restoran_id='.$row['restoran_id'].'">Delete</a>');
            echo("</td></tr>\n");
            } 
            // Bagian Akhir dari Tag Table
        ?> 
            </table>
        <br>
        
        <div class="add">
            <a href="add.php">Tambah data baru</a>
        </div>

        <div class="clear"></div>

    <!-- Bagian Akhir dari Tag Body -->
    </body>
    <!-- Bagian Akhir dari Tag HTML -->
</html>