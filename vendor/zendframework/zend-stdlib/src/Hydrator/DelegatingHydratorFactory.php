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
use Zend\Hydrator\DelegatingHydratorFactory as BaseDelegatingHydratorFactory;

/**
 * @deprecated Use Zend\Hydrator\DelegatingHydratorFactory from zendframework/zend-hydrator instead.
 */
class DelegatingHydratorFactory extends BaseDelegatingHydratorFactory
{
=======
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class DelegatingHydratorFactory implements FactoryInterface
{
    /**
     * Creates DelegatingHydrator
     *
     * @param  ServiceLocatorInterface $serviceLocator
     * @return DelegatingHydrator
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        // Assume that this factory is registered with the HydratorManager,
        // and just pass it directly on.
        return new DelegatingHydrator($serviceLocator);
    }
>>>>>>> 2984a17cc10db6830de7319410f03caa118e446f
}
