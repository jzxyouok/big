<?php namespace App\Domain\Party;

use App\Support\NamedObject;
use App\Domain\Event\EventRole;
use SplObjectStorage;

class Party extends NamedObject
{
    private $eventRoles;
    
    public function __construct($name){
        parent::__construct($name);
        $this->eventRoles = new SplObjectStorage();
    }
    
    function friendAddEventRole(EventRole $eventRole){
        $this->eventRoles->attach($eventRole);
    }
}