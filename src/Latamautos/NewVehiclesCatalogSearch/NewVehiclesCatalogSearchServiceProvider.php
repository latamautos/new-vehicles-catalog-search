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
        $this->app->bind('Latamautos\NewVehiclesCatalogSearch\application\contract\IDealerService', 'Latamautos\NewVehiclesCatalogSearch\application\object\DealerService');
        $this->app->bind('Latamautos\NewVehiclesCatalogSearch\application\contract\ILocationService', 'Latamautos\NewVehiclesCatalogSearch\application\object\LocationService');
        $this->app->bind('Latamautos\NewVehiclesCatalogSearch\application\contract\ILeadService', 'Latamautos\NewVehiclesCatalogSearch\application\object\LeadService');
        $this->app->bind('Latamautos\NewVehiclesCatalogSearch\application\contract\IAvailableYearsService', 'Latamautos\NewVehiclesCatalogSearch\application\object\AvailableYearsService');
		$this->app->bind('Latamautos\NewVehiclesCatalogSearch\application\contract\IDealerSettingService', 'Latamautos\NewVehiclesCatalogSearch\application\object\DealerSettingService');
		$this->app->bind('Latamautos\NewVehiclesCatalogSearch\application\contract\IVersionEmptyService', 'Latamautos\NewVehiclesCatalogSearch\application\object\VersionEmptyService');
		$this->app->bind('Latamautos\NewVehiclesCatalogSearch\application\contract\IModelDetailService', 'Latamautos\NewVehiclesCatalogSearch\application\object\ModelDetailService');
		$this->app->bind('Latamautos\NewVehiclesCatalogSearch\application\contract\IShopLeadService', 'Latamautos\NewVehiclesCatalogSearch\application\object\ShopLeadService');
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
