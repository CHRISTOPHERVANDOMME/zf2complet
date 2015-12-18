<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Zend\Stdlib\Hydrator\Aggregate;

<<<<<<< HEAD
use Zend\Hydrator\Aggregate\ExtractEvent as BaseExtractEvent;
=======
use Zend\EventManager\Event;
>>>>>>> 2984a17cc10db6830de7319410f03caa118e446f

/**
 * Event triggered when the {@see \Zend\Stdlib\Hydrator\Aggregate\AggregateHydrator} extracts
 * data from an object
<<<<<<< HEAD
 *
 * @deprecated Use Zend\Hydrator\Aggregate\ExtractEvent from zendframework/zend-hydrator instead.
 */
class ExtractEvent extends BaseExtractEvent
{
=======
 */
class ExtractEvent extends Event
{
    const EVENT_EXTRACT = 'extract';

    /**
     * {@inheritDoc}
     */
    protected $name = self::EVENT_EXTRACT;

    /**
     * @var object
     */
    protected $extractionObject;

    /**
     * @var array
     */
    protected $extractedData = [];

    /**
     * @param object $target
     * @param object $extractionObject
     */
    public function __construct($target, $extractionObject)
    {
        $this->target           = $target;
        $this->extractionObject = $extractionObject;
    }

    /**
     * Retrieves the object from which data is extracted
     *
     * @return object
     */
    public function getExtractionObject()
    {
        return $this->extractionObject;
    }

    /**
     * @param object $extractionObject
     *
     * @return void
     */
    public function setExtractionObject($extractionObject)
    {
        $this->extractionObject = $extractionObject;
    }

    /**
     * Retrieves the data that has been extracted
     *
     * @return array
     */
    public function getExtractedData()
    {
        return $this->extractedData;
    }

    /**
     * @param array $extractedData
     *
     * @return void
     */
    public function setExtractedData(array $extractedData)
    {
        $this->extractedData = $extractedData;
    }

    /**
     * Merge provided data with the extracted data
     *
     * @param array $additionalData
     *
     * @return void
     */
    public function mergeExtractedData(array $additionalData)
    {
        $this->extractedData = array_merge($this->extractedData, $additionalData);
    }
>>>>>>> 2984a17cc10db6830de7319410f03caa118e446f
}
