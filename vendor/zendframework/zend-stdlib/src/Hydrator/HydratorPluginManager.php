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
use Zend\Hydrator\HydratorPluginManager as BaseHydratorPluginManager;
=======
use Zend\ServiceManager\AbstractPluginManager;
use Zend\Stdlib\Exception;
>>>>>>> 2984a17cc10db6830de7319410f03caa118e446f

/**
 * Plugin manager implementation for hydrators.
 *
 * Enforces that adapters retrieved are instances of HydratorInterface
<<<<<<< HEAD
 *
 * @deprecated Use Zend\Hydrator\HydratorPluginManager from zendframework/zend-hydrator instead.
 */
class HydratorPluginManager extends BaseHydratorPluginManager
{
=======
 */
class HydratorPluginManager extends AbstractPluginManager
{
    /**
     * Whether or not to share by default
     *
     * @var bool
     */
    protected $shareByDefault = false;

    /**
     * Default aliases
     *
     * @var array
     */
    protected $aliases = [
        'delegatinghydrator' => 'Zend\Stdlib\Hydrator\DelegatingHydrator',
    ];

    /**
     * Default set of adapters
     *
     * @var array
     */
    protected $invokableClasses = [
        'arrayserializable' => 'Zend\Stdlib\Hydrator\ArraySerializable',
        'classmethods'      => 'Zend\Stdlib\Hydrator\ClassMethods',
        'objectproperty'    => 'Zend\Stdlib\Hydrator\ObjectProperty',
        'reflection'        => 'Zend\Stdlib\Hydrator\Reflection'
    ];

    /**
     * Default factory-based adapters
     *
     * @var array
     */
    protected $factories = [
        'Zend\Stdlib\Hydrator\DelegatingHydrator' => 'Zend\Stdlib\Hydrator\DelegatingHydratorFactory',
    ];

    /**
     * {@inheritDoc}
     */
    public function validatePlugin($plugin)
    {
        if ($plugin instanceof HydratorInterface) {
            // we're okay
            return;
        }

        throw new Exception\RuntimeException(sprintf(
            'Plugin of type %s is invalid; must implement Zend\Stdlib\Hydrator\HydratorInterface',
            (is_object($plugin) ? get_class($plugin) : gettype($plugin))
        ));
    }
>>>>>>> 2984a17cc10db6830de7319410f03caa118e446f
}
