<?php

include __DIR__.'/../vendor/autoload.php';

use PhpAmqpLib\Connection\AMQPStreamConnection;

use Wapschool\Config;
use Wapschool\ConsumerUtil;

error_reporting(E_ALL ^ E_WARNING);

$connection = new AMQPStreamConnection(Config::HOST, Config::PORT, Config::USER, Config::PASSWORD);

$channel = $connection->channel();

$channel->queue_declare('hello', false, false, false, false);

echo "Aguardando mensagens ...\n";

$channel->basic_consume('hello', '', false, true, false, false, [ConsumerUtil::class, 'consumerHelloWorld']);

while (count($channel->callbacks)) {
    $channel->wait();
}
