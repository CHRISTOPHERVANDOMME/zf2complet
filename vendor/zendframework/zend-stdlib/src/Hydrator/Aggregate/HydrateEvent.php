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
use Zend\Hydrator\Aggregate\HydrateEvent as BaseHydrateEvent;
=======
use Zend\EventManager\Event;
>>>>>>> 2984a17cc10db6830de7319410f03caa118e446f

/**
 * Event triggered when the {@see \Zend\Stdlib\Hydrator\Aggregate\AggregateHydrator} hydrates
 * data into an object
<<<<<<< HEAD
 *
 * @deprecated Use Zend\Hydrator\Aggregate\HydrateEvent from zendframework/zend-hydrator instead.
 */
class HydrateEvent extends BaseHydrateEvent
{
=======
 */
class HydrateEvent extends Event
{
    const EVENT_HYDRATE = 'hydrate';

    /**
     * {@inheritDoc}
     */
    protected $name = self::EVENT_HYDRATE;

    /**
     * @var object
     */
    protected $hydratedObject;

    /**
     * @var array
     */
    protected $hydrationData;

    /**
     * @param object $target
     * @param object $hydratedObject
     * @param array  $hydrationData
     */
    public function __construct($target, $hydratedObject, array $hydrationData)
    {
        $this->target         = $target;
        $this->hydratedObject = $hydratedObject;
        $this->hydrationData  = $hydrationData;
    }

    /**
     * Retrieves the object that is being hydrated
     *
     * @return object
     */
    public function getHydratedObject()
    {
        return $this->hydratedObject;
    }

    /**
     * @param object $hydratedObject
     */
    public function setHydratedObject($hydratedObject)
    {
        $this->hydratedObject = $hydratedObject;
    }

    /**
     * Retrieves the data that is being used for hydration
     *
     * @return array
     */
    public function getHydrationData()
    {
        return $this->hydrationData;
    }

    /**
     * @param array $hydrationData
     */
    public function setHydrationData(array $hydrationData)
    {
        $this->hydrationData = $hydrationData;
    }
>>>>>>> 2984a17cc10db6830de7319410f03caa118e446f
}
