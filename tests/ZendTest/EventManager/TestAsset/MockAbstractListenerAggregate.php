<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace ZendTest\EventManager\TestAsset;

use Zend\EventManager\AbstractListenerAggregate;
use Zend\EventManager\EventManagerInterface;

/**
 * @group      Zend_EventManager
 */
class MockAbstractListenerAggregate extends AbstractListenerAggregate
{
    public $priority;

    public function attach(EventManagerInterface $events)
    {
        $this->listeners[] = $events->attach('foo.bar', array($this, 'doFoo'));
        $this->listeners[] = $events->attach('foo.baz', array($this, 'doFoo'));
    }

    public function getCallbacks()
    {
        return $this->listeners;
    }

    public function doFoo()
    {
    }
}
