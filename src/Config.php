<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Sandbox
    |--------------------------------------------------------------------------
    |
    | Checa se utilizará o Sandbox ou Production.
    |
    */
    'sandbox' => getenv('PAGSEGURO_SANDBOX', true),
    /*
    |--------------------------------------------------------------------------
    | Email
    |--------------------------------------------------------------------------
    |
    | Conta de email do Vendedor.
    |
    */
    'email' => getenv('PAGSEGURO_EMAIL', ''),
    /*
    |--------------------------------------------------------------------------
    | Token
    |--------------------------------------------------------------------------
    |
    | Token do Vendedor.
    |
    */
    'token' => getenv('PAGSEGURO_TOKEN', ''),
    /*
    |--------------------------------------------------------------------------
    | NotificationURL
    |--------------------------------------------------------------------------
    |
    | URL de resposta para notificações do Pagseguro.
    |
    */
    'notificationURL' => getenv('PAGSEGURO_NOTIFICATION', ''),
];
