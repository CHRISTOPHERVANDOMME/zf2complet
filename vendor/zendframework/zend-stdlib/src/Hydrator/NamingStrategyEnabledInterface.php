<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Zend\Stdlib\Hydrator;

<<<<<<< HEAD
use Zend\Hydrator\NamingStrategyEnabledInterface as BaseNamingStrategyEnabledInterface;

/**
 * @deprecated Use Zend\Hydrator\NamingStrategy\NamingStrategyEnabledInterface from zendframework/zend-hydrator instead.
 */
interface NamingStrategyEnabledInterface extends BaseNamingStrategyEnabledInterface
{
=======
use Zend\Stdlib\Hydrator\NamingStrategy\NamingStrategyInterface;

interface NamingStrategyEnabledInterface
{
    /**
     * Adds the given naming strategy
     *
     * @param NamingStrategyInterface $strategy The naming to register.
     * @return NamingStrategyEnabledInterface
     */
    public function setNamingStrategy(NamingStrategyInterface $strategy);

    /**
     * Gets the naming strategy.
     *
     * @return NamingStrategyInterface
     */
    public function getNamingStrategy();

    /**
     * Checks if a naming strategy exists.
     *
     * @return bool
     */
    public function hasNamingStrategy();

    /**
     * Removes the naming with the given name.
     *
     * @return NamingStrategyEnabledInterface
     */
    public function removeNamingStrategy();
>>>>>>> 2984a17cc10db6830de7319410f03caa118e446f
}
