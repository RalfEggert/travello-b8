<?php
/**
 * TravelloB8
 * 
 * @package    TravelloB8
 * @author     Ralf Eggert <r.eggert@travello.de>
 * @copyright  Copyright (c) 2012 Travello GmbH
 */

/**
 * namespace definition and usage
 */
namespace TravelloB8\Service;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

/**
 * TravelloB8 service factory
 * 
 * Generates the TravelloB8 service object
 * 
 * @package    TravelloB8
 * @author     Ralf Eggert <r.eggert@travello.de>
 * @copyright  Copyright (c) 2012 Travello GmbH
 */
class B8ServiceFactory implements FactoryInterface
{
    /**
     * Create Service Factory
     * 
     * @param ServiceLocatorInterface $serviceLocator
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $db       = $serviceLocator->get('Zend\Db\Adapter\Adapter');
        $config   = $serviceLocator->get('config');
        
        $service = new B8Service($config['b8']);
        return $service;
    }
}
