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

/**
 * TravelloB8 service
 * 
 * Handles the b8 service
 * 
 * @package    TravelloB8
 * @author     Ralf Eggert <r.eggert@travello.de>
 * @copyright  Copyright (c) 2012 Travello GmbH
 */
class B8Service
{
    /**
     * @var array
     */
    protected $config = array();
    
    /**
     * @var \b8
     */
    protected $b8 = null;
    
    /**
     * Constructor
     * 
     * @param array $config
     */
    public function __construct(array $config)
    {
        $this->setB8(
            new \b8($config['config_b8'], $config['config_database'])
        );
    }
    
    /**
     * Set b8
     * 
     * @param \b8 $mapper
     * @return B8Service
     */
    public function setB8(\b8 $b8)
    {
        $this->b8 = $b8;
        return $this;
    }
    
    /**
     * Get b8
     * 
     * @return \b8
     */
    public function getB8()
    {
        return $this->b8;
    }
    
    /**
     * Mark text as spam
     *
     * @param string $text
     * @return void
     */
    public function spam($text)
    {
        $this->getB8()->learn($text, \b8::SPAM);
    }
    
    /**
     * Mark text as no ham
     *
     * @param string $text
     * @return void
     */
    public function noham($text)
    {
        $this->getB8()->unlearn($text, \b8::HAM);
    }
    
    /**
     * Mark text as no spam
     *
     * @param string $text
     * @return void
     */
    public function nospam($text)
    {
        $this->getB8()->unlearn($text, \b8::SPAM);
    }
    
    /**
     * Mark text as ham
     *
     * @param string $text
     * @return void
     */
    public function ham($text)
    {
        $this->getB8()->learn($text, \b8::HAM);
    }
    
    /**
     * Classify text
     *
     * @param string $text
     * @return float
     */
    public function classify($text)
    {
        return $this->getB8()->classify($text);
    }
}
