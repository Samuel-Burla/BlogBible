<?php

require_once __DIR__."/config.php";

try {
    $pdo = new PDO('mysql:host=' . _DB_SERVER_ . ';dbname=' . _DB_NAME_, _DB_USER_, _DB_PASSWORD_);
} catch (PDOException $e) {
    echo "Error :".$e->getMessage();
}

?>