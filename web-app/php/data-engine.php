<?php
/*
 * Data loading object, having the queries to improve the ease of data obtaining.
 * */
class dataFetchEngine
{

    function getUserData() {
        $query = "SELECT * FROM user_table";
        return $query;
    }

}