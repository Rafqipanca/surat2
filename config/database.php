<?php

define('DB_HOST', 'db.refbcfhgffekfseyqgcf.supabase.co');
define('DB_PORT', '5432');
define('DB_NAME', 'postgres');
define('DB_USER', 'postgres');
define('DB_PASS', 'Sukses88@'); // Replace with your actual password

function getDBConnection() {
    try {
        $dsn = "pgsql:host=".DB_HOST.";port=".DB_PORT.";dbname=".DB_NAME.";user=".DB_USER.";password=".DB_PASS;
        $pdo = new PDO($dsn);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch(PDOException $e) {
        error_log("Connection failed: " . $e->getMessage());
        return false;
    }
}

function checkSupabaseConnection() {
    try {
        $pdo = getDBConnection();
        return $pdo !== false;
    } catch(Exception $e) {
        return false;
    }
}
