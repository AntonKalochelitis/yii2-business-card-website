<?php

$eauth = require(__DIR__ . '/eauth.php');

return [
    '' => 'site/index',
    '/signin' => 'site/sign-in',
    '/signup' => 'site/sign-up',
    '/signout' => 'site/sign-out',
    '/contact' => 'site/contact',
    '/about' => 'site/about',
    '/request-password-reset' => 'site/request-password-reset',
    '/reset-password' => 'site/reset-password',
    '/confirm-registration/<token:\wd+>' => 'site/confirm-registration',
    '/confirm-registration/successful' => 'site/confirm-registration-successful',
    '/confirm-registration/reject' => 'site/confirm-registration-reject',
    '/registration/successful' => 'site/successful-registration',
];