<?php

    require '../dbh.php';

    echo "Table getting created";

   // $query = 'DROP TABLE tbl_registrations';

    $query = 'CREATE TABLE abstract(
        Sr_No int(11) NOT NULL,
        Title varchar(200) NOT NULL,
        t1 varchar(50) NOT NULL,
        f1 varchar(100) NOT NULL,
        l1 varchar(100) NOT NULL,
        u1 varchar(100) NOT NULL,
        c1 varchar(100) NOT NULL,
        t2 varchar(50) DEFAULT NULL,
        f2 varchar(100) DEFAULT NULL,
        l2 varchar(100) DEFAULT NULL,
        u2 varchar(100) DEFAULT NULL,
        c2 varchar(100) DEFAULT NULL,
        t3 varchar(50) DEFAULT NULL,
        f3 varchar(100) DEFAULT NULL,
        l3 varchar(100) DEFAULT NULL,
        u3 varchar(100) DEFAULT NULL,
        c3 varchar(100) DEFAULT NULL,
        t4 varchar(50) DEFAULT NULL,
        f4 varchar(100) DEFAULT NULL,
        l4 varchar(100) DEFAULT NULL,
        u4 varchar(100) DEFAULT NULL,
        c4 varchar(100) DEFAULT NULL,
        t5 varchar(50) DEFAULT NULL,
        f5 varchar(100) DEFAULT NULL,
        l5 varchar(100) DEFAULT NULL,
        u5 varchar(100) DEFAULT NULL,
        c5 varchar(100) DEFAULT NULL,
        c_email varchar(50) NOT NULL,
        c_mobile bigint(20) NOT NULL,
        c_auth varchar(50) NOT NULL,
        k1 varchar(100) NOT NULL,
        k2 varchar(100) DEFAULT NULL,
        k3 varchar(100) DEFAULT NULL,
        k4 varchar(100) DEFAULT NULL,
        k5 varchar(100) DEFAULT NULL,
        abs varchar(5000) NOT NULL
    );'; 


    if($conn->query($query)){
        echo "table created";
    }
    
?>