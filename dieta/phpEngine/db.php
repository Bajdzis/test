<?php

class DB
{
    private static $link = null;

    private static function init(){
        if(self::$link !== null) {

            return;
        }
        self::$link = mysqli_connect("localhost", "root", "", "dieta");
    }

    public static function query($q){
        self::init();
        return mysqli_query(self::$link, $q);
    }
    
    public static function result($q){
        $results_array = array();
        $result = self::query($q);
        if($result === false){
            return array();
        }
        while ($row = $result->fetch_assoc()) {
            $results_array[] = $row;
        }
        return $results_array;
    }

    public static function last(){
        return self::$link->insert_id;
    }
}
