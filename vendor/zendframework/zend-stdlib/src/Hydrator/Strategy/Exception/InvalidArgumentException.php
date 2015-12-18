<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Zend\Stdlib\Hydrator\Strategy\Exception;

<<<<<<< HEAD
use Zend\Hydrator\Strategy\Exception\InvalidArgumentException as BaseInvalidArgumentException;

/**
 * @deprecated Use Zend\Hydrator\Strategy\Exception\InvalidArgumentException from zendframework/zend-hydrator instead.
 */
class InvalidArgumentException extends BaseInvalidArgumentException implements ExceptionInterface
=======
class InvalidArgumentException extends \InvalidArgumentException implements ExceptionInterface
>>>>>>> 2984a17cc10db6830de7319410f03caa118e446f
{
}
