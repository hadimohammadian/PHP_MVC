<?php


class Model
{
    public static $db = '';

    public function __construct()
    {
        $server = 'localhost';
        $username = 'root';
        $password = '';
        $dbname = 'isiran';

        self::$db = new PDO('mysql:host=' . $server . ';dbname=' . $dbname, $username, $password);
        self::$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        self::$db->exec('set names utf8');
    }

    public function doQuery($sql, $values = [])
    {
        $query = self::$db->prepare($sql);
        foreach ($values as $key => $item) {
            $query->bindValue($key + 1, $item);
        }
        $query->execute();
    }


    public  function doSelect ($sql , $value=[],$fetch=''){
        $query = self::$db->prepare($sql);
        foreach ($value as $key=>$item){
            $query->bindValue($key+1 , $item);
        }
        $query->execute();
        if ($fetch == ''){
            return $query->fetchAll();
        }
        else{
            return $query->fetch();

        }
    }

}