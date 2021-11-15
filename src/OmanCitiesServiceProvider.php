<?php

namespace Gheith3\OmanCities;

use Gheith3\OmanCities\Commands\OmanCitiesCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class OmanCitiesServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('omancities')
            ->hasMigration('create_oman_cities_tables')
            ->hasCommand(OmanCitiesCommand::class);
    }
}
