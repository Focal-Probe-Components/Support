<?php
namespace Probe\Support\Traits;

trait Singleton{
    public static ?object $instanceOfSelf = null;

    final public function __construct(){
        static::$instanceOfSelf = $this;
        $this->boot();
    }
    /**
     * Modify this for custom construct logic
     * * Run after `Singleton::__construct()`
     * @return void
     */
    protected function boot(): void{}

    public static function getInstance(): object|null{
        return static::$instanceOfSelf;
    }
    public static function instance(): object|null{
        return static::getInstance();
    }
}