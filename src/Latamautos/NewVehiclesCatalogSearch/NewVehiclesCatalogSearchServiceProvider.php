<?php namespace Latamautos\NewVehiclesCatalogSearch;

use Illuminate\Support\ServiceProvider;

class NewVehiclesCatalogSearchServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bind('Latamautos\NewVehiclesCatalogSearch\application\contract\ITestService', 'Latamautos\NewVehiclesCatalogSearch\application\object\TestService');
		$this->app->bind('Latamautos\NewVehiclesCatalogSearch\application\contract\ICatalogService', 'Latamautos\NewVehiclesCatalogSearch\application\object\CatalogService');
		$this->app->bind('Latamautos\NewVehiclesCatalogSearch\application\contract\IVehicleCatalogService', 'Latamautos\NewVehiclesCatalogSearch\application\object\VehicleCatalogService');
		$this->app->bind('Latamautos\NewVehiclesCatalogSearch\application\contract\ISiteService', 'Latamautos\NewVehiclesCatalogSearch\application\object\SiteService');
		$this->app->bind('Latamautos\NewVehiclesCatalogSearch\application\contract\ICatalogSchemaService', 'Latamautos\NewVehiclesCatalogSearch\application\object\CatalogSchemaService');
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array();
	}

}
