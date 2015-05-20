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
		$this->app->bind('Latamautos\NewVehiclesCatalogSearch\application\contract\ITypeService', 'Latamautos\NewVehiclesCatalogSearch\application\object\TypeService');
		$this->app->bind('Latamautos\NewVehiclesCatalogSearch\application\contract\IBrandService', 'Latamautos\NewVehiclesCatalogSearch\application\object\BrandService');
		$this->app->bind('Latamautos\NewVehiclesCatalogSearch\application\contract\ISubtypeService', 'Latamautos\NewVehiclesCatalogSearch\application\object\SubtypeService');
		$this->app->bind('Latamautos\NewVehiclesCatalogSearch\application\contract\IModelService', 'Latamautos\NewVehiclesCatalogSearch\application\object\ModelService');
		$this->app->bind('Latamautos\NewVehiclesCatalogSearch\application\contract\ITagService', 'Latamautos\NewVehiclesCatalogSearch\application\object\TagService');
		$this->app->bind('Latamautos\NewVehiclesCatalogSearch\application\contract\IVersionService', 'Latamautos\NewVehiclesCatalogSearch\application\object\VersionService');
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
