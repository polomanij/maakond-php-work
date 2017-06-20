<?php

class ContactController {
    public function actionContact()
    {
        require_once ROOT.'/views/contact.php';
        return TRUE;
    }
}
