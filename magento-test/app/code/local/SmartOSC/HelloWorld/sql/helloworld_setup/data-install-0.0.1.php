<?php
// File app/code/local/SmartOsc/SmartContact/sql/smartcontact_setup/data-install-0.0.1.php

$contacts = array(
    array(
        'name'    => 'HuyDTQ',
        'email'   => 'huydtq@smartosc.com',
        'phone'   => '0123456789',
        'company' => 'SmartOsc',
        'message' => 'This is my first message'
    ),
    array(
        'name'    => 'ThaiNQ',
        'email'   => 'thainq@smartosc.com',
        'phone'   => '0123456789',
        'company' => 'SmartOsc',
        'message' => 'This is my second message'
    ),
    array(
        'name'    => 'ThuVNM',
        'email'   => 'thuvnm@smartosc.com',
        'phone'   => '0123456789',
        'company' => 'SmartOsc',
        'message' => 'This is my third message'
    ),
    array(
        'name'    => 'HaiNX',
        'email'   => 'hainx@smartosc.com',
        'phone'   => '0123456789',
        'company' => 'SmartOsc',
        'message' => 'This is my fourth message'
    ),
    array(
        'name'    => 'PhuTD',
        'email'   => 'phutd@smartosc.com',
        'phone'   => '0123456789',
        'company' => 'SmartOsc',
        'message' => 'This is my fifth message'
    ),
    array(
        'name'    => 'KhuongNNT',
        'email'   => 'khuongnnt@smartosc.com',
        'phone'   => '0123456789',
        'company' => 'SmartOsc',
        'message' => 'This is my sixth message'
    ),
    array(
        'name'    => 'BaoNQ',
        'email'   => 'baonq@smartosc.com',
        'phone'   => '0123456789',
        'company' => 'SmartOsc',
        'message' => 'This is my seventh message'
    ),
    array(
        'name'    => 'HuyPND',
        'email'   => 'huypnd@smartosc.com',
        'phone'   => '0123456789',
        'company' => 'SmartOsc',
        'message' => 'This is my eighth message'
    ),
    array(
        'name'    => 'NamNH',
        'email'   => 'namnh@smartosc.com',
        'phone'   => '0123456789',
        'company' => 'SmartOsc',
        'message' => 'This is my nineth message'
    ),
    array(
        'name'    => 'VyHTN',
        'email'   => 'vyhtn@smartosc.com',
        'phone'   => '0123456789',
        'company' => 'SmartOsc',
        'message' => 'This is my tenth message'
    ),
);

foreach ($contacts as $contact) {
   Mage::getModel('hello/blogpost')
       ->setData($contact)
       ->save();
}