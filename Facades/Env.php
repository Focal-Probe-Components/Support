<?php
namespace Probe\Support\Facades;

use Dotenv\Dotenv;
use Probe\Support\Env\Commands\CreateEnvBlueprint;
use Probe\Support\Contracts\Facade;
use Probe\Support\Env\Generator as EnvGenerator;
use Probe\Support\Traits\Singleton;
use Probe\Support\Env\Contracts\EnvBlueprint;

class Env extends Facade{
    use Singleton;
    /**
     * @var \Dotenv\Dotenv
     */
    protected static ?object $instance = null;

    public function dotEnv(): Dotenv|null{
        return static::$instance;
    }
    
    /**
     * Generate an `.env` file from the provided blueprints: https://focalframework.com/docs/env/#generator
     * @param string $direcory
     * @param EnvBlueprint[] $envBlueprints
     * @return void
     */
    public static function generate(string $directory, array $envBlueprints): void{
        EnvGenerator::generate(directory: $directory, blueprints: $envBlueprints);
    }

    public static function createBlueprint(string $fileName, string $destinationDir = "/Config/Env/"){
        return CreateEnvBlueprint::create($fileName, $destinationDir);
    }
}