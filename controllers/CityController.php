<?php

class cityController {
    public function actionCity()
    {
        require_once ROOT.'/models/City.php';
        
        $cities = City::getCities();
        
        require_once ROOT.'/views/cities.php';
        return TRUE;
    }
    
    public function actionOneCity($id)
    {
        require ROOT.'/models/City.php';
        require ROOT.'/models/States.php';
        
        $city = City::getOneCity($id);
        $state = States::getOneState($city['id_maak']);
        
        require_once ROOT.'/views/city.php';
        
        return TRUE;
    }
}
