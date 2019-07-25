<?php
namespace App\Listener ;

use SplObserver;
use SplSubject;

class Listener implements SplObserver
{
    public function update(SplSubject $subject)
    {
        $this->notfiy($subject);
    }
}
