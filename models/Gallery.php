<?php

class Gallery {
        public static function getGallery()
    {
        require_once ROOT.'/components/Db.php';
        
        $db = Db::getConnection();
        
        $galleryList = array();
        $result = $db->query('SELECT * FROM gallery');
        
        while($row = $result->fetch()) {
            $picture = array();
            
            $picture[] = $row['id_gallery'];
            $picture[] = $row['picture'];
            $picture[] = $row['id_city'];
            
            $galleryList[] = $picture;
        }
        
        return $galleryList;
    }
}
