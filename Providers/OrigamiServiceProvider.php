<?php
namespace App\Modules\Origami\Providers;

use App;
use Config;
use Lang;
use View;
use Illuminate\Support\ServiceProvider;


class OrigamiServiceProvider extends ServiceProvider
{


	/**
	 * Register the Origami module service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		// This service provider is a convenient place to register your modules
		// services in the IoC container. If you wish, you may make additional
		// methods or service providers to keep the code more focused and granular.

		$this->registerNamespaces();
		$this->registerProviders();
	}

	/**
	 * Register the Origami module resource namespaces.
	 *
	 * @return void
	 */
	protected function registerNamespaces()
	{
//		Lang::addNamespace('origami', realpath(__DIR__.'/../Resources/Lang'));
		View::addNamespace('origami', realpath(__DIR__.'/../Resources/Views'));
	}

	/**
	 * Boot the service provider.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->publishes([
			__DIR__.'/../Config/core.php' => config_path('core.php'),
			__DIR__.'/../Config/translator.php' => config_path('translator.php'),
// 			__DIR__ . '/../Publish/assets/vendors' => base_path('public/assets/vendors/'),
// 			__DIR__ . '/../Publish/Plugins' => base_path('app/Plugins/'),
// 			__DIR__ . '/../Publish/views/plugins/' => base_path('resources/views/plugins/'),
		]);
/*
		$this->publishes([
			__DIR__ . '/../Publish/assets/vendors' => base_path('public/assets/vendors/'),
		], 'js');

		$this->publishes([
			__DIR__ . '/../Publish/Plugins' => base_path('app/Plugins/'),
		], 'plugins');

		$this->publishes([
			__DIR__ . '/../Publish/views/plugins/' => base_path('resources/views/plugins/'),
		], 'views');
*/
/*
		AliasLoader::getInstance()->alias(
			'Setting',
			'anlutro\LaravelSettings\Facade'
		);
*/

	}


	/**
	* add Prvoiders
	*
	* @return void
	*/
	private function registerProviders()
	{
		$app = $this->app;

		$app->register('App\Modules\Origami\Providers\RouteServiceProvider');
// 		$app->register('App\Modules\Core\Providers\ViewComposerServiceProvider');
// 		$app->register('anlutro\LaravelSettings\ServiceProvider');
	}


}
