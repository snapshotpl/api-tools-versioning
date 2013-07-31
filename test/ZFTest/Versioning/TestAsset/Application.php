<?php
/**
 * @license   http://opensource.org/licenses/BSD-2-Clause BSD-2-Clause
 */

namespace ZFTest\Versioning\TestAsset;

use Zend\EventManager\EventManagerInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class Application
{
    protected $events;
    protected $services;

    public function setServiceManager(ServiceLocatorInterface $services)
    {
        $this->services = $services;
    }

    public function setEventManager(EventManagerInterface $events)
    {
        $this->events = $events;
    }

    public function getServiceManager()
    {
        return $this->services;
    }

    public function getEventManager()
    {
        return $this->events;
    }
}
