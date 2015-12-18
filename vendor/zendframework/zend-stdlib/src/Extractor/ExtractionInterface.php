<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Zend\Stdlib\Extractor;

<<<<<<< HEAD
use Zend\Hydrator\ExtractionInterface as BaseExtractionInterface;

/**
 * @deprecated Use Zend\Hydrator\ExtractionInterface from zendframework/zend-hydrator instead.
 */
interface ExtractionInterface extends BaseExtractionInterface
{
=======
interface ExtractionInterface
{
    /**
     * Extract values from an object
     *
     * @param  object $object
     * @return array
     */
    public function extract($object);
>>>>>>> 2984a17cc10db6830de7319410f03caa118e446f
}
