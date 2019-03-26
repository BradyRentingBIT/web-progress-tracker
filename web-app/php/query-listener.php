<?php

    function registerUser() {
        $query = "
        INSERT INTO user_table (user_login, user_password, user_name)
        VALUES (:user_login,:user_password,:user_name);
        ";
        return $query;
    }

    function authenticateUser() {
        $query = "
            INSERT INTO user_table (user_login, user_password, user_name)
            VALUES (:user_login,:user_password,:user_name);
            ";
        return $query;
    }