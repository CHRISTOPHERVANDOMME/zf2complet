<?php
namespace MiniModule\Form;

use Zend\Form\Element\Submit;
use Zend\Form\Factory;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use Zend\Db\Adapter\Adapter;


class DbAdapterFormFactory implements  FactoryInterface
{
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
    	$services = $serviceLocator->get('config')['db'];
        $adapter = new Adapter($services);
        return $adapter;
    }
}