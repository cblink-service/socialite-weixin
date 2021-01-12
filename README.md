# Weixin

```bash
composer require cblink-service/socialite-weixin
```

## Installation & Basic Usage

Please see the [Base Installation Guide](https://socialiteproviders.com/usage/), then follow the provider specific instructions below.

### Add configuration to `config/services.php`

```php
'cblink-weixin' => [    
  'sandbox' => env('WEIXIN_SANDBOX', false),
  'uuid' => env('WEIXIN_UUID'),
  'client_id' => env('WEIXIN_CLIENT_ID'),  
  'client_secret' => env('WEIXIN_CLIENT_SECRET'),  
  'redirect' => env('WEIXIN_REDIRECT_URI') 
],
```

### Add provider event listener

Configure the package's listener to listen for `SocialiteWasCalled` events.

Add the event to your `listen[]` array in `app/Providers/EventServiceProvider`. See the [Base Installation Guide](https://socialiteproviders.com/usage/) for detailed instructions.

```php
protected $listen = [
    \SocialiteProviders\Manager\SocialiteWasCalled::class => [
        // ... other providers
        'Cblink\\Service\\SocialiteWeixin\\WeixinExtendSocialite@handle',
    ],
];
```

### Usage

You should now be able to use the provider like you would regularly use Socialite (assuming you have the facade installed):

```php
return Socialite::driver('cblink-weixin')->redirect();
```

### Returned User fields

- ``id``
- ``unionid``
- ``nickname``
- ``avatar``
