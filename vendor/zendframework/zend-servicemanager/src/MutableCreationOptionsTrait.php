<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Zend\ServiceManager;

/**
 * Trait for MutableCreationOptions Factories
 */
trait MutableCreationOptionsTrait
{
    /**
     * @var array
     */
<<<<<<< HEAD
    protected $creationOptions = [];
=======
    protected $creationOptions = array();
>>>>>>> 2984a17cc10db6830de7319410f03caa118e446f

    /**
     * Set creation options
     *
     * @param array $creationOptions
     * @return void
     */
    public function setCreationOptions(array $creationOptions)
    {
        $this->creationOptions = $creationOptions;
    }

    /**
     * Get creation options
     *
     * @return array
     */
    public function getCreationOptions()
    {
        return $this->creationOptions;
    }
}
