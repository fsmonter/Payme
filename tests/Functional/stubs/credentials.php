<?php

return [
    'bogus' => [
        'driver' => 'bogus',
    ],

    'compro_pago' => [
        'driver'      => 'compro_pago',
        'private_key' => 'sk_test_9c95e149614142822f',
        'public_key'  => 'pk_test_638e8b14112423a086',
    ],

    'conekta' => [
        'driver'      => 'conekta',
        'private_key' => 'key_TzsZY8UkWKDqKkfRbR9isA',
    ],

    'manual' => [
        'driver' => 'manual',
    ],

    'open_pay' => [
        'driver'      => 'open_pay',
        'id'          => 'mygwhzzmbmrlcn0eu7b5',
        'private_key' => 'sk_7494dfec2c514ca1a4bd40f8c4000d7b',
        'public_key'  => 'pk_330f394b94574e70a4023c35f335b5e3',
        'test'        => true,
    ],

    'paypal' => [
        'driver'    => 'paypal_express',
        'username'  => 'activemerchant-test_api1.example.com',
        'password'  => 'HBC6A84QLRWC923A',
        'signature' => 'AFcWxV21C7fd0v3bYYYRCpSSRl31AC-11AKBL8FFO9tjImL311y8a0hx',
        'test'      => true,
    ],

    'stripe' => [
        'driver'      => 'stripe',
        'private_key' => 'sk_test_3OD4TdKSIOhDOL2146JJcC79',
    ],

    'mercadopago' => [
        'driver'      => 'mercado_pago',
        'private_key' => 'TEST-1468273673739017-031220-54c238c506d6d8427a07e72661af1368__LA_LD__-307532101',
    ],

    'mercadopago_basic' => [
        'driver'        => 'mercado_pago_basic',
        'client_id'     => '3448849932020678',
        'client_secret' => '4Ca4PGM5AgvIeIUBFXxO9n0Ki858a6KA',
        'test'          => true,
    ],

    'sr_pago' => [
        'driver'      => 'sr_pago',
        'public_key'  => 'pk_dev_5c07190bc412cT9?!R',
        'private_key' => '562492dd-403b-4c55-ba4f-0bbe4dcab174',
    ],
];
