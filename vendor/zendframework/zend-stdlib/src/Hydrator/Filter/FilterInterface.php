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
use Zend\Hydrator\Filter\FilterInterface as BaseFilterInterface;

/**
 * @deprecated Use Zend\Hydrator\Filter\FilterInterface from zendframework/zend-hydrator instead.
 */
interface FilterInterface extends BaseFilterInterface
{
=======
interface FilterInterface
{
    /**
     * Should return true, if the given filter
     * does not match
     *
     * @param string $property The name of the property
     * @return bool
     */
    public function filter($property);
>>>>>>> 2984a17cc10db6830de7319410f03caa118e446f
}
