<?php

class GalleryController {
    public function actionGallery()
    {
        require_once ROOT.'/models/Gallery.php';
        
        $gallery = Gallery::getGallery();
        
        require_once ROOT.'/views/gallery.php';
        return TRUE;
    }
}
