<?php
$pdo = new PDO('pgsql:host=174.138.19.197;port=5432;dbname=tkbpp21',
'tkbpp21', 'tkbpp21');
// See the "errors" folder for details...
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>