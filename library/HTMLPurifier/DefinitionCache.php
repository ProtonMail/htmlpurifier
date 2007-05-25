<?php

require_once 'HTMLPurifier/DefinitionCache/Serializer.php';

/**
 * Abstract class representing Definition cache managers that implements
 * useful common methods and is a factory.
 * @note The configuration object is transformed into the key used by the cache
 * @todo Implement flush()
 * @todo Implement replace()
 * @todo Get some sort of versioning variable so the library can easily
 *       invalidate the cache with a new version
 * @todo Make the test runner cache aware and allow the user to easily
 *       flush the cache
 * @todo Create a separate maintenance file advanced users can use to
 *       cache their custom HTMLDefinition, which can be loaded
 *       via a configuration directive
 * @todo Implement memcached
 * @todo Perform type checking on $def objects
 */
class HTMLPurifier_DefinitionCache
{
    
    var $type;
    
    /**
     * @param $name Type of definition objects this instance of the
     *      cache will handle.
     */
    function HTMLPurifier_DefinitionCache($type) {
        $this->type = $type;
    }
    
    /**
     * Generates a unique identifier for a particular configuration
     * @param Instance of HTMLPurifier_Config
     */
    function generateKey($config) {
        return md5(serialize($config->getBatch($this->type)));
    }
    
    /**
     * Factory method that creates a cache object based on configuration
     * @param $name Name of definitions handled by cache
     * @param $config Instance of HTMLPurifier_Config
     */
    function create($name, $config) {
        // only one implementation as for right now, $config will
        // be used to determine implementation
        return new HTMLPurifier_DefinitionCache_Serializer($name);
    }
    
    /**
     * Adds a definition object to the cache
     */
    function add($def, $config) {
        trigger_error('Cannot call abstract method', E_USER_ERROR);
    }
    
    /**
     * Unconditionally saves a definition object to the cache
     */
    function set($def, $config) {
        trigger_error('Cannot call abstract method', E_USER_ERROR);
    }
    
    /**
     * Retrieves a definition object from the cache
     */
    function get($config) {
        trigger_error('Cannot call abstract method', E_USER_ERROR);
    }
    
    /**
     * Removes a definition object to the cache
     */
    function remove($config) {
        trigger_error('Cannot call abstract method', E_USER_ERROR);
    }
    
}

?>