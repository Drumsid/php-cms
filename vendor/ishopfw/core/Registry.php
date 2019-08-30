<?php 

namespace ishopfw;

/**
 * summary
 */
class Registry
{
    /**
     * summary
     */

    use TSingletone;

    protected static $properties = [];

    public function setProperty($name, $value)
    {
        self::$properties[$name] = $value;
    }

    public function getProperty($name)
    {
    	if (isset(self::$properties[$name])) {
    		return $properties[$name];
    	}
    	return null;
    }

    public function getProperties(){
    	return self::$properties;
    }
}