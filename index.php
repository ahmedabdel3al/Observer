<?php
use App\Event\UserRegisteredEvent;
use App\Listener\UserRegisteredListener;
use App\Model\User;

require_once __DIR__ . '/vendor/autoload.php';

$event = new UserRegisteredEvent(new User);
$listener = new UserRegisteredListener ;
$event->attach($listener);
$event->notify();