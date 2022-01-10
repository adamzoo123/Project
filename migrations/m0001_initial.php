<?php

class m0001_initial{

    public function up(){
        $db = \App\Core\Application::$app->db;
        $SQL = "CREATE TABLE users (
            id INT AUTO_INCREMENT PRIMARY KEY,
            email VARCHAR(255) NOT NULL,
            firstname VARCHAR(255) NOT NULL,
            lastname VARCHAR(255) NOT NULL,
            status TINYINT NOT NULL,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        ) ENGINE=INNODB;";
        $db->pdo->exec($SQL);


    //    $data = "INSERT INTO users (email, firstname, lastname, status, created_at)
    //     VALUES ('test', 'test', 'test', 'test', '06-01-2022')";
    //     $db->pdo->exec($data);

    }

    public function down(){
        $db = \App\Core\Application::$app->db;
        $SQL = "DROP TABLE users;";
        $db->pdo->exec($SQL);
    }
}