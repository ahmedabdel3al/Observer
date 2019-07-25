<?php
namespace App\Event ;

use App\Model\User;

class UserRegisteredEvent extends Event
{
    protected $observer = [];
    public $user  ;
    public function __construct(User $user)
    {
        $this->user = $user  ;
    }
}
