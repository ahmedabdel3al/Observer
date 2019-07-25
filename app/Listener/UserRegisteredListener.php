<?php
namespace App\Listener ;

use SplSubject;

class UserRegisteredListener extends Listener implements ListenerInterface 
{
    public function notfiy(SplSubject $splSubject)
    {
        dump($splSubject->user);
    }
}
