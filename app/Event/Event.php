<?php
namespace App\Event ;

class Event implements \SplSubject
{
    protected $observer = [
        
    ];
    public function attach(\splobserver $observer)
    {
        $this->observers[] = $observer;
    }
    public function detach(\splobserver $observer)
    {
        $key = array_search($observer, $this->observers, true);
        if(false !== $key){
            unset($this->observers[$key]);
        }
    }
    public function notify()
    {
        foreach ($this->observers as $value) {
            $value->update($this);
        }
    }
}
