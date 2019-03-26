<?php

    /* Set up the database connection to a certain host address (LOCALHOST) */
    $host = "127.0.0.1";
    $user = "root";
    $db = "BIT_MASTER";
    $pass = "";
    $dsn = "mysql:host=$host;dbname=$db";

    /* We create our PHP data object */
    $pdo = new PDO($dsn, $user, $pass);