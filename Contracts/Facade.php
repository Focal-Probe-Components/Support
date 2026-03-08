<?php
namespace Probe\Support\Contracts;


abstract class Facade{
    /**
     * An instance of the service that is being abstracted by the facade, Examples of valid Service Providers: https://focalframework.com/docs/service-providers
     * @var object
     */
    protected static ?object $instance = null;

    protected bool $hasEnvTemplate = false;

    public function __construct(object $instance){
        static::$instance = $instance;
    }

    public static function instance(): object|null{
        return static::$instance;
    }

    /**
     * The path to the env template for `.env` generation
     * @return string
     */
    public function envTemplate(): string{
        return "";
    }
}