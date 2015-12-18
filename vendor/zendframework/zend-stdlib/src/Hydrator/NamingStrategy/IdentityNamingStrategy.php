<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Zend\Stdlib\Hydrator\NamingStrategy;

<<<<<<< HEAD
use Zend\Hydrator\NamingStrategy\IdentityNamingStrategy as BaseIdentityNamingStrategy;

/**
 * @deprecated Use Zend\Hydrator\NamingStrategy\IdentityNamingStrategy from zendframework/zend-hydrator instead.
 */
class IdentityNamingStrategy extends BaseIdentityNamingStrategy implements NamingStrategyInterface
{
=======
final class IdentityNamingStrategy implements NamingStrategyInterface
{
    /**
     * {@inheritDoc}
     */
    public function hydrate($name)
    {
        return $name;
    }

    /**
     * {@inheritDoc}
     */
    public function extract($name)
    {
        return $name;
    }
>>>>>>> 2984a17cc10db6830de7319410f03caa118e446f
}
