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
use Zend\Hydrator\Filter\GetFilter as BaseGetFilter;

/**
 * @deprecated Use Zend\Hydrator\Filter\GetFilter from zendframework/zend-hydrator instead.
 */
class GetFilter extends BaseGetFilter implements FilterInterface
{
=======
class GetFilter implements FilterInterface
{
    public function filter($property)
    {
        $pos = strpos($property, '::');
        if ($pos !== false) {
            $pos += 2;
        } else {
            $pos = 0;
        }

        if (substr($property, $pos, 3) === 'get') {
            return true;
        }
        return false;
    }
>>>>>>> 2984a17cc10db6830de7319410f03caa118e446f
}
