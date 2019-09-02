<?php 	

namespace ishopfw;

/**
 * summary
 */
trait TSingletone // Трейт чтоб не создать больше одного объекта класса
{


    private static $instance; // свойство для объекта

    public static function instance()
    {
        if (self::$instance === null) { // если объекта в классе нет мы заводим его
        	self::$instance = new self;
        }
        return self::$instance;
    }
}