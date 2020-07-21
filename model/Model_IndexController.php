<?php


class Model_IndexController extends Model
{


    public function __construct()
    {
            parent::__construct();

    }

    public function getNews()
    {

        $sql = 'Select * from news limit 3';
        $query = self::$db->prepare($sql);
        $query->execute();
        $resualt = $query->fetchAll();
        return $resualt;

    }
}
