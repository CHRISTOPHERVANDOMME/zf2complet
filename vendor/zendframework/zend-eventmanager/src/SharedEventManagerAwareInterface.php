<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Zend\EventManager;

/**
 * Interface to automate setter injection for a SharedEventManagerInterface instance
<<<<<<< HEAD
 *
 * @deprecated This interface is deprecated with 2.6.0, and will be removed in 3.0.0.
 *     See {@link https://github.com/zendframework/zend-eventmanager/blob/develop/doc/book/migration/removed.md}
 *     for details.
 */
interface SharedEventManagerAwareInterface extends SharedEventsCapableInterface
=======
 */
interface SharedEventManagerAwareInterface
>>>>>>> 2984a17cc10db6830de7319410f03caa118e446f
{
    /**
     * Inject a SharedEventManager instance
     *
     * @param  SharedEventManagerInterface $sharedEventManager
     * @return SharedEventManagerAwareInterface
     */
    public function setSharedManager(SharedEventManagerInterface $sharedEventManager);

    /**
<<<<<<< HEAD
=======
     * Get shared collections container
     *
     * @return SharedEventManagerInterface
     */
    public function getSharedManager();

    /**
>>>>>>> 2984a17cc10db6830de7319410f03caa118e446f
     * Remove any shared collections
     *
     * @return void
     */
    public function unsetSharedManager();
}
