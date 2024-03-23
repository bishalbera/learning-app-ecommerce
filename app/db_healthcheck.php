<?php

    $host = getenv('DB_HOST');
    $username = getenv('DB_USER');
    $password = getenv('DB_PASSWORD');
    $dbname = getenv('DB_NAME');


    $link = mysqli_connect($host, $username, $password, $dbname);

    // Check the connection status
    if (!$link) {
        // Database connection failed
        http_response_code(500);
        echo 'Database connection failed';
        exit;
    }

    // Database connection successful
    echo 'Database connection successful';

?>