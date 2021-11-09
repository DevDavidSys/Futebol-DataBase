<?php

    $servername = '127.0.0.1';
    $username = 'client';
    $password = '';
    $dbname = 'futebol';

    $conn = new mysqli($servername,$username,$password,$dbname);
    if($conn->connect_error){
            die('Server Connect Error');
    }

?>