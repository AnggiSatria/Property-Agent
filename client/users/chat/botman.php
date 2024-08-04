<?php

// require './vendor/autoload.php';

// use BotMan\BotMan\BotMan;
// use BotMan\BotMan\BotManFactory;
// use BotMan\BotMan\Drivers\Web\WebDriver;
// use BotMan\BotMan\Cache\InMemoryCache;

// // Configuration for BotMan
// $config = [
//     // Your BotMan configuration here
// ];

// $botman = BotManFactory::create($config);

// $botman->hears('Hello', function (BotMan $bot) {
//     $bot->reply('Hello there! How can I assist you today?');
// });

// $botman->hears('{message}', function (BotMan $bot, $message) {
//     $bot->reply('You said: ' . $message);
// });

// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     $botman->listen();
//     exit;
// }

require 'vendor/autoload.php';

use BotMan\BotMan\BotMan;
use BotMan\BotMan\BotManFactory;
use BotMan\BotMan\Drivers\DriverManager;
use BotMan\BotMan\Middleware\ApiAi;
use BotMan\Drivers\Web\WebDriver;

// Load the driver(s) you want to use
DriverManager::loadDriver(WebDriver::class);

$config = [
    // Your driver-specific configuration
    // "telegram" => [
    //    "token" => "TOKEN"
    // ]
];

// Create an instance
$botman = BotManFactory::create($config);

// Give the bot something to listen for.
$botman->hears('hello|hi|hey', function (BotMan $bot) {
    $bot->reply('Hello! How can I help you?');
});

$botman->hears('how are you', function (BotMan $bot) {
    $bot->reply('I am good, thank you! How about you?');
});

// Start listening
$botman->listen();

?>