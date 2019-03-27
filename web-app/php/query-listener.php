<?php /** @noinspection ALL */

    function registerUser() {
        $query = "
        INSERT INTO user_table (user_login, user_password, user_name)
        VALUES (:user_login,:user_password,:user_name);
        ";
        return $query;
    }

    function getAssignmentData() {
        $query = "SELECT * FROM assignment_table";
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
            SELECT ID, user_login, user_password, user_name FROM user_table WHERE user_login=:user_login
            ";
        return $query;
    }

    function getName() {
        $query = "
            SELECT user_password, ID FROM user_table WHERE user_login=:user_login
            ";
        return $query;
    }