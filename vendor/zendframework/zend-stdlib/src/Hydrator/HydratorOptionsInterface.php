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
use Zend\Hydrator\HydratorOptionsInterface as BaseHydratorOptionsInterface;

/**
 * @deprecated Use Zend\Hydrator\HydratorOptionsInterface from zendframework/zend-hydrator instead.
 */
interface HydratorOptionsInterface extends BaseHydratorOptionsInterface
{
=======
interface HydratorOptionsInterface
{
    /**
     * @param  array|\Traversable $options
     * @return HydratorOptionsInterface
     */
    public function setOptions($options);
>>>>>>> 2984a17cc10db6830de7319410f03caa118e446f
}
