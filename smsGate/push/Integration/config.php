<?php

$distFilePath = __DIR__ . '/config.dist.php';

if (is_file($distFilePath)) {
    return include $distFilePath;
} else {
    return array(
        'api_login' => 'it.avdelning@outlook.com',
        'api_password' => '06cbd61b53eec3f549f08dbf733f9532',
        'number_test' => '',
        'sms_template_name' => '',
        'host' => 'smpp1.smsapi.com',
        'contacts_login' => '',
        'contacts_password' => '',
        'contacts_host' => '',
    );
}

