<?php

include __DIR__.'/../vendor/autoload.php';

use PhpAmqpLib\Connection\AMQPStreamConnection;

use Wapschool\Config;
use Wapschool\ConsumerUtil;

error_reporting(E_ALL ^ E_WARNING);

$connection = new AMQPStreamConnection(Config::HOST, Config::PORT, Config::USER, Config::PASSWORD);

$channel = $connection->channel();

echo "Aguardando mensagens ...\n";

$channel->basic_consume($argv[1], '', false, true, false, false, [ConsumerUtil::class, 'consumerHelloWorld']);

while (count($channel->callbacks)) {
    $channel->wait();
}
