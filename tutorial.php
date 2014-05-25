<?php

// include vCard class files.
require 'vCard.class.php';

// create new vCard class.
$card = new vCard();

// set contact's datas.
$card->set(array(
    'first_name' => 'Yalçın',
    'last_name' => 'Ceylan',
    'cell_tel' => '+90 536 754 85 78',
    'url' => 'http://www.yalcinceylan.net',
    'email1' => 'yalcinceylan93@gmail.com',
));

// build and start download.
$card->download();