<?php

class States {
    public static function getStatesList()
    {
        require_once ROOT.'/components/Db.php';
        
        $db = Db::getConnection();
        
        $statesList = array();
        $result = $db->query('SELECT * FROM maak');
        
        while($row = $result->fetch()) {
            $state = array();
            
            $state[] = $row['id_maak'];
            $state[] = $row['name_maak'];
            $state[] = $row['capital'];
            $state[] = $row['description'];
            
            $statesList[] = $state;
        }
        
        return $statesList;
    }
    
    public static function getOneState($id)
    {
        require_once ROOT.'/components/Db.php';
        
        $db = Db::getConnection();
        
        $result = $db->query('SELECT * FROM maak WHERE id_maak='.$id);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        
        $state = $result->fetch();
        
        
        return $state;
    }
}
