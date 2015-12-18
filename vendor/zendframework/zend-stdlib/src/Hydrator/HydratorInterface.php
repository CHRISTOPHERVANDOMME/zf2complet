<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Zend\Stdlib\Hydrator;

use Zend\Stdlib\Extractor\ExtractionInterface;
<<<<<<< HEAD
use Zend\Hydrator\HydratorInterface as BaseHydratorInterface;

/**
 * @deprecated Use Zend\Hydrator\HydratorInterface from zendframework/zend-hydrator instead.
 */
interface HydratorInterface extends BaseHydratorInterface, HydrationInterface, ExtractionInterface
=======

interface HydratorInterface extends HydrationInterface, ExtractionInterface
>>>>>>> 2984a17cc10db6830de7319410f03caa118e446f
{
}
