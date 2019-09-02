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

    protected static $properties = []; // свойство для складывания свойств

    public function setProperty($name, $value) // кладет свойство
    {
        self::$properties[$name] = $value;
    }

    public function getProperty($name)// получает свойство по имени если такое есть
    {
    	if (isset(self::$properties[$name])) {
    		return $properties[$name];
    	}
    	return null;
    }

    public function getProperties(){ // вернет все свойства
    	return self::$properties;
    }
}