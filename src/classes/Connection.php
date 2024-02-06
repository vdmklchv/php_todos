<?php

class Connection {

    public function connect(string $dbhost, string $dbport, string $dbname, string $dbusername, string $dbpassword) {
        try {
            $conn = "pgsql:host={$dbhost};port={$dbport};dbname={$dbname}";
            $pdo = new PDO($conn, $dbusername, $dbpassword);
        } catch (PDOException $e) {
            die ($e->getMessage());
        }

        return $pdo;
    }

}