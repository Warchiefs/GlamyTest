<?php
/**
 * Created by PhpStorm.
 * User: Warchiefs
 * Date: 12.07.18
 * Time: 13:15
 */

require __DIR__ . '/vendor/autoload.php';

use GlamyTest\Library\Provider;
use GlamyTest\Library\Executer;

$provider = new Provider($argv);

$url = 'https://gist.githubusercontent.com/appelsin/d9cc31889a8af9cd36528f81420642af/raw/35f7f827c3db47a801822b824957e676ff5b710c/gistfile1.txt';
$params = [];
$request_class = new $provider->request('GET', $url, $params);

$operation_class = new $provider->operation();

$executer = new Executer($request_class, $operation_class);

echo PHP_EOL.$executer->calculate().PHP_EOL;



