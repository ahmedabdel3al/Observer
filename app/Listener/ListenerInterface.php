<?php
namespace App\Listener ;

use SplSubject;

interface ListenerInterface {
    public function notify(SplSubject $splSubject);
}