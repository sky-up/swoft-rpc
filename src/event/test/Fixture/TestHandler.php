<?php

namespace SwoftTest\Event\Fixture;

use Swoft\Event\Annotation\Mapping\Listener;
use Swoft\Event\EventHandlerInterface;
use Swoft\Event\EventInterface;

/**
 * Class TestHandler
 * @package SwoftTest\Event\Fixture
 * @Listener("test.evt")
 */
class TestHandler implements EventHandlerInterface
{
    /**
     * @param EventInterface $event
     * @return mixed
     */
    public function handle(EventInterface $event)
    {
        $pos = __METHOD__;
        echo "handle the event '{$event->getName()}' on the: $pos\n";

        return true;
    }
}
