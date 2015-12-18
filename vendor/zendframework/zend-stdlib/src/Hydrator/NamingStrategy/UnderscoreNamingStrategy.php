<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Zend\Stdlib\Hydrator\NamingStrategy;

<<<<<<< HEAD
use Zend\Hydrator\NamingStrategy\UnderscoreNamingStrategy as BaseUnderscoreNamingStrategy;

/**
 * @deprecated Use Zend\Hydrator\NamingStrategy\UnderscoreNamingStrategy from zendframework/zend-hydrator instead.
 */
class UnderscoreNamingStrategy extends BaseUnderscoreNamingStrategy implements NamingStrategyInterface
{
=======
use Zend\Filter\FilterChain;

class UnderscoreNamingStrategy implements NamingStrategyInterface
{
    /**
     * @var FilterChain|null
     */
    protected static $camelCaseToUnderscoreFilter;

    /**
     * @var FilterChain|null
     */
    protected static $underscoreToStudlyCaseFilter;

    /**
     * Remove underscores and capitalize letters
     *
     * @param  string $name
     * @return string
     */
    public function hydrate($name)
    {
        return $this->getUnderscoreToStudlyCaseFilter()->filter($name);
    }

    /**
     * Remove capitalized letters and prepend underscores.
     *
     * @param  string $name
     * @return string
     */
    public function extract($name)
    {
        return $this->getCamelCaseToUnderscoreFilter()->filter($name);
    }

    /**
     * @return FilterChain
     */
    protected function getUnderscoreToStudlyCaseFilter()
    {
        if (static::$underscoreToStudlyCaseFilter instanceof FilterChain) {
            return static::$underscoreToStudlyCaseFilter;
        }

        $filter = new FilterChain();

        $filter->attachByName('WordUnderscoreToStudlyCase');

        return static::$underscoreToStudlyCaseFilter = $filter;
    }

    /**
     * @return FilterChain
     */
    protected function getCamelCaseToUnderscoreFilter()
    {
        if (static::$camelCaseToUnderscoreFilter instanceof FilterChain) {
            return static::$camelCaseToUnderscoreFilter;
        }

        $filter = new FilterChain();

        $filter->attachByName('WordCamelCaseToUnderscore');
        $filter->attachByName('StringToLower');

        return static::$camelCaseToUnderscoreFilter = $filter;
    }
>>>>>>> 2984a17cc10db6830de7319410f03caa118e446f
}
