<?php

class City {
    public static function getCities()
    {
        require_once ROOT.'/components/Db.php';
        
        $db = Db::getConnection();
        
        $cityList = array();
        $result = $db->query('SELECT * FROM city');
        
        while($row = $result->fetch()) {
            $city = array();
            
            $city[] = $row['id_city'];
            $city[] = $row['city'];
            $city[] = $row['people'];
            $city[] = $row['id_maak'];
            
            $cityList[] = $city;
        }
        
        return $cityList;
    }
    
    public static function getOneCity($id)
    {
        require_once ROOT.'/components/Db.php';
        
        $db = Db::getConnection();
        
        $result = $db->query('SELECT * FROM city WHERE id_city='.$id);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        
        $city = $result->fetch();
        
        
        return $city;
    }
}
