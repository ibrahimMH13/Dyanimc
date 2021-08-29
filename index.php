<?php

use App\Controllers\PaymentController;
use App\Controllers\WebhookController;

require 'vendor/autoload.php';

//part 1
$request =(object)[
    'type'=>'card_decided',
    'user'=>'1'
];
$controller= new WebhookController();
$controller->handel($request);

//part 2
$controller2 = new PaymentController();
$controller2->store();
