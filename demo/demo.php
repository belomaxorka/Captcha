<?php

require_once __DIR__.'/../vendor/autoload.php';

use belomaxorka\Captcha\CaptchaBuilder;

$captcha = new CaptchaBuilder;
$captcha
    ->build()
    ->save('out.jpg')
;
