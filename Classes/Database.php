<?php
class DB{
    private static function connect(){
        $pdo = new PDO('mysql:host=localhost;dbname=restapi','root','');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTON);

        $return $pdo;
    }
    public static function query($query, $params = array()){
        $stmt = self::connect()->prepare($query);
        $stmt->execute($params);
    }
}