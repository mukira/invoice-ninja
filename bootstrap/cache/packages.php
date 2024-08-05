<?php return array (
  'imdhemy/laravel-purchases' => 
  array (
    'providers' => 
    array (
      0 => 'Imdhemy\\Purchases\\PurchaseServiceProvider',
    ),
    'aliases' => 
    array (
      'Product' => '\\Imdhemy\\Purchases\\Facades\\Product',
      'Subscription' => '\\Imdhemy\\Purchases\\Facades\\Subscription',
    ),
  ),
  'intervention/image' => 
  array (
    'providers' => 
    array (
      0 => 'Intervention\\Image\\ImageServiceProvider',
    ),
    'aliases' => 
    array (
      'Image' => 'Intervention\\Image\\Facades\\Image',
    ),
  ),
  'invoiceninja/inspector' => 
  array (
    'providers' => 
    array (
      0 => 'InvoiceNinja\\Inspector\\InspectorServiceProvider',
    ),
    'aliases' => 
    array (
      'Inspector' => 'InvoiceNinja\\Inspector\\InspectorFacade',
    ),
  ),
  'laravel/slack-notification-channel' => 
  array (
    'providers' => 
    array (
      0 => 'Illuminate\\Notifications\\SlackChannelServiceProvider',
    ),
  ),
  'laravel/socialite' => 
  array (
    'providers' => 
    array (
      0 => 'Laravel\\Socialite\\SocialiteServiceProvider',
    ),
    'aliases' => 
    array (
      'Socialite' => 'Laravel\\Socialite\\Facades\\Socialite',
    ),
  ),
  'laravel/tinker' => 
  array (
    'providers' => 
    array (
      0 => 'Laravel\\Tinker\\TinkerServiceProvider',
    ),
  ),
  'laravel/ui' => 
  array (
    'providers' => 
    array (
      0 => 'Laravel\\Ui\\UiServiceProvider',
    ),
  ),
  'livewire/livewire' => 
  array (
    'providers' => 
    array (
      0 => 'Livewire\\LivewireServiceProvider',
    ),
    'aliases' => 
    array (
      'Livewire' => 'Livewire\\Livewire',
    ),
  ),
  'nesbot/carbon' => 
  array (
    'providers' => 
    array (
      0 => 'Carbon\\Laravel\\ServiceProvider',
    ),
  ),
  'nunomaduro/termwind' => 
  array (
    'providers' => 
    array (
      0 => 'Termwind\\Laravel\\TermwindServiceProvider',
    ),
  ),
  'nwidart/laravel-modules' => 
  array (
    'providers' => 
    array (
      0 => 'Nwidart\\Modules\\LaravelModulesServiceProvider',
    ),
    'aliases' => 
    array (
      'Module' => 'Nwidart\\Modules\\Facades\\Module',
    ),
  ),
  'sentry/sentry-laravel' => 
  array (
    'providers' => 
    array (
      0 => 'Sentry\\Laravel\\ServiceProvider',
      1 => 'Sentry\\Laravel\\Tracing\\ServiceProvider',
    ),
    'aliases' => 
    array (
      'Sentry' => 'Sentry\\Laravel\\Facade',
    ),
  ),
  'socialiteproviders/manager' => 
  array (
    'providers' => 
    array (
      0 => 'SocialiteProviders\\Manager\\ServiceProvider',
    ),
  ),
  'turbo124/beacon' => 
  array (
    'providers' => 
    array (
      0 => 'Turbo124\\Beacon\\CollectorServiceProvider',
    ),
    'aliases' => 
    array (
      'Beacon' => 'Turbo124\\Beacon\\CollectorFacade',
    ),
  ),
  'webpatser/laravel-countries' => 
  array (
    'providers' => 
    array (
      0 => 'Webpatser\\Countries\\CountriesServiceProvider',
    ),
    'aliases' => 
    array (
      'Countries' => 'Webpatser\\Countries\\CountriesFacade',
    ),
  ),
);