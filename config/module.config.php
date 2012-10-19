<?php
/**
 * TravelloB8
 * 
 * @package    TravelloB8
 * @author     Ralf Eggert <r.eggert@travello.de>
 * @copyright  Copyright (c) 2012 Travello GmbH
 */

/**
 * Travello module configuration
 * 
 * Provides b8 spam filter configuration
 * 
 * @package    TravelloB8
 * @author     Ralf Eggert <r.eggert@travello.de>
 * @copyright  Copyright (c) 2012 Travello GmbH
 */
return array(
    'b8' => array(
        'config_b8' => array(
            'storage' => 'mysql',
        ),
        'config_database' => array(
        	'database'   => null,
        	'table_name' => 'b8_wordlist',
        	'host'       => null,
        	'user'       => null,
        	'pass'       => null,
        	'connection' => null,
        ),
    ),
    
    'service_manager' => array(
        'factories' => array(
            'TravelloB8\Service\B8' => 'TravelloB8\Service\B8ServiceFactory',
        ),
    ),
);
