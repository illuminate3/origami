<?php

namespace App\Modules\Origami\Providers;

//use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\ServiceProvider;

use App;
use Config;
use Lang;
use Theme;
use View;


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
			__DIR__.'/../Config/origami.php' => config_path('origami.php'),
			__DIR__ . '/../Resources/Views/' => public_path('themes/' . Theme::getActive() . '/views/modules/origami/'),
		]);


		$this->publishes([
			__DIR__.'/../Config/origami.php' => config_path('origami.php'),
		], 'configs');

		$this->publishes([
			__DIR__ . '/../Resources/Views/' => public_path('themes/' . Theme::getActive() . '/views/modules/origami/'),
		], 'views');

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
	}


}
