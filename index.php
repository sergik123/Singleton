<?php
final class Singleton{
    private static $instance=null;
    
    public static function getInstance()
    {
        if(null === self::$instance)
        {
            self::$instance= new self();
        }
        return self::$instance;
    }
    
    private function __clone() {}
    private function __construct() {}
    
    
}
$obj=Singleton::getInstance(); // Получение объекта
$obj=Singleton::getInstance();

// Попытка создать дополнительный экземпляр приведет к ошибке
$Object2 = new Singleton(); // Fatal error: Call to private Singleton::__construct() from invalid context
$Object3 = clone $obj; // Fatal error: Call to private Singleton::__clone() from context ''
