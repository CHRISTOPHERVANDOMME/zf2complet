<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Zend\Stdlib\Hydrator\Aggregate;

<<<<<<< HEAD
use Zend\Hydrator\Aggregate\HydratorListener as BaseHydratorListener;
=======
use Zend\EventManager\AbstractListenerAggregate;
use Zend\EventManager\EventManagerInterface;
use Zend\Stdlib\Hydrator\HydratorInterface;
>>>>>>> 2984a17cc10db6830de7319410f03caa118e446f

/**
 * Aggregate listener wrapping around a hydrator. Listens
 * to {@see \Zend\Stdlib\Hydrator\Aggregate::EVENT_HYDRATE} and
 * {@see \Zend\Stdlib\Hydrator\Aggregate::EVENT_EXTRACT}
<<<<<<< HEAD
 *
 * @deprecated Use Zend\Hydrator\Aggregate\HydratorListener from zendframework/zend-hydrator instead.
 */
class HydratorListener extends BaseHydratorListener
{
=======
 */
class HydratorListener extends AbstractListenerAggregate
{
    /**
     * @var \Zend\Stdlib\Hydrator\HydratorInterface
     */
    protected $hydrator;

    /**
     * @param \Zend\Stdlib\Hydrator\HydratorInterface $hydrator
     */
    public function __construct(HydratorInterface $hydrator)
    {
        $this->hydrator = $hydrator;
    }

    /**
     * {@inheritDoc}
     */
    public function attach(EventManagerInterface $events, $priority = 1)
    {
        $this->listeners[] = $events->attach(HydrateEvent::EVENT_HYDRATE, [$this, 'onHydrate'], $priority);
        $this->listeners[] = $events->attach(ExtractEvent::EVENT_EXTRACT, [$this, 'onExtract'], $priority);
    }

    /**
     * Callback to be used when {@see \Zend\Stdlib\Hydrator\Aggregate\HydrateEvent::EVENT_HYDRATE} is triggered
     *
     * @param \Zend\Stdlib\Hydrator\Aggregate\HydrateEvent $event
     *
     * @return object
     *
     * @internal
     */
    public function onHydrate(HydrateEvent $event)
    {
        $object = $this->hydrator->hydrate($event->getHydrationData(), $event->getHydratedObject());

        $event->setHydratedObject($object);

        return $object;
    }

    /**
     * Callback to be used when {@see \Zend\Stdlib\Hydrator\Aggregate\ExtractEvent::EVENT_EXTRACT} is triggered
     *
     * @param \Zend\Stdlib\Hydrator\Aggregate\ExtractEvent $event
     *
     * @return array
     *
     * @internal
     */
    public function onExtract(ExtractEvent $event)
    {
        $data = $this->hydrator->extract($event->getExtractionObject());

        $event->mergeExtractedData($data);

        return $data;
    }
>>>>>>> 2984a17cc10db6830de7319410f03caa118e446f
}
