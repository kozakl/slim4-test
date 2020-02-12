<?php
use Slim\App;

function events(App $app) {
    $app->get('/events', require 'getEvents.php');
}
