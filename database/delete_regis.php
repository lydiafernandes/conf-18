<?php

    require '../dbh.php';

    echo "deleting record <br>";

   // $query = 'DROP TABLE tbl_registrations';

   $query = 'DELETE FROM tbl_registrations where id=5';

    if($conn->query($query)){
        echo "record deleted";
    }
    else echo "problem with query";
    

               ?>