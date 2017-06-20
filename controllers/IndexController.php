<?php

class indexController {
    public function actionIndex()
    {
        require_once ROOT.'/views/index.php';
        return TRUE;
    }
}
