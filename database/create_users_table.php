<?php

    require '../dbh.php';
    $query = 'CREATE TABLE IF NOT EXISTS users(
        id INT PRIMARY KEY AUTO_INCREMENT,
        first_name VARCHAR(255) NOT NULL,
        last_name VARCHAR(255) NOT NULL,
        email VARCHAR(255) NOT NULL UNIQUE KEY,
        password VARCHAR(255) NOT NULL
    );';
    echo $conn->query($query);
    ?>