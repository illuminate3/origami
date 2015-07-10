# Origami (Theme Manager) : Laravel 5.1.x Beta Development


## Functionality


### Menus
Define areas that your links will be displayed


### MenuLinks
Add links to the displayed menu areas


## Routes

* /admin/menus
* /admin/menulinks/{id}


## Packages


* https://github.com/illuminate3/kotoba
```
"illuminate3/kotoba": "dev-master",
Illuminate3\Kotoba\KotobaServiceProvider::class,
```


* https://github.com/vinkla/translator
```
'Menu\MenuServiceProvider',
'Menu' => 'Menu\Menu',
```

```
vendor:publish --provider="Vinkla\Translator\TranslatorServiceProvider"
```


* https://github.com/vespakoen/menu
```
composer require anlutro/l4-settings
anlutro\LaravelSettings\ServiceProvider::class,
'Setting' => 'anlutro\LaravelSettings\Facade'
```

```
vendor:publish --provider="anlutro\LaravelSettings\ServiceProvider"
```

* https://github.com/laracasts/Presenter
```
"laracasts/presenter": "dev-master"
```


## Thanks


*


## Partial Code or Ideas


* https://github.com/mcamara/laravel-localization/blob/master/src/config/config.php
