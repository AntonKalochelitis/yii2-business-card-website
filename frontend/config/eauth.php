<?php

$params_local = require( __DIR__ . '/params-local.php');

$eauth_ = [];                                                              
if (!empty($params_local['eauth']['mailru'])) {
    $eauth_['mailru'] = $params_local['eauth']['mailru'];
}
if (!empty($params_local['eauth']['vkontakte'])) {
    $eauth_['vkontakte'] = $params_local['eauth']['vkontakte'];
}
if (!empty($params_local['eauth']['google_oauth'])) {
    $eauth_['google_oauth'] = $params_local['eauth']['google_oauth'];
}
if (!empty($params_local['eauth']['facebook'])) {
    $eauth_['facebook'] = $params_local['eauth']['facebook'];
}
if (!empty($params_local['eauth']['twitter'])) {
    $eauth_['twitter'] = $params_local['eauth']['twitter'];
}
if (!empty($params_local['eauth']['yahoo'])) {
    $eauth_['yahoo'] = $params_local['eauth']['yahoo'];
}
if (!empty($params_local['eauth']['linkedin'])) {
    $eauth_['linkedin'] = $params_local['eauth']['linkedin'];
}
if (!empty($params_local['eauth']['linkedin_oauth2'])) {
    $eauth_['linkedin_oauth2'] = $params_local['eauth']['linkedin_oauth2'];
}
if (!empty($params_local['eauth']['yandex_oauth'])) {
    $eauth_['yandex_oauth'] = $params_local['eauth']['yandex_oauth'];
}
if (!empty($params_local['eauth']['odnoklassniki'])) {
    $eauth_['odnoklassniki'] = $params_local['eauth']['odnoklassniki'];
}

return [
    'class' => 'nodge\eauth\EAuth',
    'popup' => true, // Use the popup window instead of redirecting.
    'cache' => false, // Cache component name or false to disable cache. Defaults to 'cache' on production environments.
    'cacheExpire' => 0, // Cache lifetime. Defaults to 0 - means unlimited.
//    'httpClient' => [
//        // uncomment this to use streams in safe_mode
//        'useStreamsFallback' => true,
//    ],
//    'tokenStorage' => [
//        'class' => '@app\eauth\DatabaseTokenStorage',
//    ],
    'services' => $eauth_ +  [
//        'github' => [
//            // register your app here: https://github.com/settings/applications
//            'class' => 'nodge\eauth\services\GitHubOAuth2Service',
//            'clientId' => '...',
//            'clientSecret' => '...',
//        ],
//        'live' => [
//            // register your app here: https://account.live.com/developers/applications/index
//            'class' => 'nodge\eauth\services\LiveOAuth2Service',
//            'clientId' => '...',
//            'clientSecret' => '...',
//        ],
//        'steam' => [
//            'class' => 'nodge\eauth\services\SteamOpenIDService',
//        ],
    ] ,
];