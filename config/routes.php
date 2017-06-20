<?php

return array(
    'contact' => 'contact/contact',
    'gallery' => 'gallery/gallery',
    'states/([0-9]+)' => 'states/oneState/$1',
    'states' => 'states/states',
    'cities/([0-9]+)' => 'city/oneCity/$1',
    'cities' => 'city/city',
    '' => 'index/index'
);