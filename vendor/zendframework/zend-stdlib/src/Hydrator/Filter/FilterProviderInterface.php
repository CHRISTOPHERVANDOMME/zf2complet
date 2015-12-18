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
use Zend\Hydrator\Filter\FilterProviderInterface as BaseFilterProviderInterface;

/**
 * @deprecated Use Zend\Hydrator\Filter\FilterProviderInterface from zendframework/zend-hydrator instead.
 */
interface FilterProviderInterface extends BaseFilterProviderInterface
{
=======
interface FilterProviderInterface
{
    /**
     * Provides a filter for hydration
     *
     * @return FilterInterface
     */
    public function getFilter();
>>>>>>> 2984a17cc10db6830de7319410f03caa118e446f
}
