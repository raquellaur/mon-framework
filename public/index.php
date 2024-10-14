<?php

use Framework\App;
use GuzzleHttp\Psr7\ServerRequest;

require '../vendor/autoload.php';

$app = new App();

$reponse = $app->run(ServerRequest::fromGlobals());

echo $reponse->getBody()->getContents();
