<?php

return [
	'api_key' => env('MONEYWAVE_APIKEY'),
	'secret_key' => env('MONEYWAVE_SECRET'),
	'environment' => env('MONEYWAVE_ENV', 'staging'),
    'callback_url' => env('MONEYWAVE_CALLBACK_URL'),
];