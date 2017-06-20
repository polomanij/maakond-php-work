<?php

class StatesController {
    public function actionStates()
    {
        require ROOT.'/models/States.php';
        
        $states = States::getStatesList();
        
        require_once ROOT.'/views/states.php';
        return TRUE;
    }
    
    public function actionOneState($id)
    {
        require ROOT.'/models/States.php';
        
        $state = States::getOneState($id);
        
       require_once ROOT.'/views/onestate.php';
        
        return TRUE;
    }
}
