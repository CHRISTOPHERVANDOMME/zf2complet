<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link           http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright      Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license        http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Zend\Stdlib\Hydrator\Filter;

<<<<<<< HEAD
use Zend\Hydrator\Filter\NumberOfParameterFilter as BaseNumberOfParameterFilter;

/**
 * @deprecated Use Zend\Hydrator\Filter\NumberOfParameterFilter from zendframework/zend-hydrator instead.
 */
class NumberOfParameterFilter extends BaseNumberOfParameterFilter implements FilterInterface
{
=======
use ReflectionException;
use ReflectionMethod;
use Zend\Stdlib\Exception\InvalidArgumentException;

class NumberOfParameterFilter implements FilterInterface
{
    /**
     * The number of parameters beeing accepted
     * @var int
     */
    protected $numberOfParameters = null;

    /**
     * @param int $numberOfParameters Number of accepted parameters
     */
    public function __construct($numberOfParameters = 0)
    {
        $this->numberOfParameters = (int) $numberOfParameters;
    }

    /**
     * @param string $property the name of the property
     * @return bool
     * @throws InvalidArgumentException
     */
    public function filter($property)
    {
        try {
            $reflectionMethod = new ReflectionMethod($property);
        } catch (ReflectionException $exception) {
            throw new InvalidArgumentException(
                "Method $property doesn't exist"
            );
        }

        return $reflectionMethod->getNumberOfParameters() === $this->numberOfParameters;
    }
>>>>>>> 2984a17cc10db6830de7319410f03caa118e446f
}