<?php
try {
    $db = new PDO("mysql:host=localhost;dbname=projecttoets", "root", "");

$query = $db->prepare("");


  }

catch (PDOException $e) {
    die("Error!: " . $e->getMessage());
}
?>