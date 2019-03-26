<?php /** @noinspection ALL */

    function registerUser() {
        $query = "
        INSERT INTO user_table (user_login, user_password, user_name)
        VALUES (:user_login,:user_password,:user_name);
        ";
        return $query;
    }

    function checkEmail() {
        $query = "
                SELECT user_login FROM user_table WHERE user_login=:user_login
                ";
        return $query;
    }

    function authenticateUser() {
        $query = "
            SELECT user_password FROM user_table WHERE user_login=:user_login
            ";
        return $query;
    }