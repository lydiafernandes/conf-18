<?php

    require '../dbh.php';

    echo "Table getting created";

   // $query = 'DROP TABLE tbl_registrations';

    $query = 'CREATE TABLE IF NOT EXISTS tbl_registrations(
        id INT PRIMARY KEY AUTO_INCREMENT,
        title VARCHAR(255) NOT NULL,
        fname VARCHAR(255) NOT NULL,
        lname VARCHAR(255) NOT NULL,
        email VARCHAR(255) NOT NULL UNIQUE KEY,
        c_code VARCHAR(255) NOT NULL,
        mobile VARCHAR(10) NOT NULL,
        category VARCHAR(255) NOT NULL,
        university VARCHAR(255) NOT NULL,
        city VARCHAR(255) NOT NULL,
        state VARCHAR(255) NOT NULL,
        country VARCHAR(255) NOT NULL,
        purpose VARCHAR(255) NOT NULL
    );'; 


    if($conn->query($query)){
        echo "table created";
    }
    /*
    INSERT INTO registration (title, fname, lname, email,
     c_code, number, category, university, city, state, country, purpose) 
               VALUES
               */

               ?>