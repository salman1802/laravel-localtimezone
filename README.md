# Laravel LocalTimezone

Laravel LocalTimezone is a package that helps in managing user local timezones using Laravel's Carbon library and Moment.js.

## Installation

You can install the package via Composer. Run the following command in your terminal:

```bash
composer require iroid/laravel-timezone
```

## Include the view file in your blade templates:

```bash
@include('localtimezone::script')
```

## Serviceprovider Configuration
Add below line in AppServiceProvider or Providers.php

```bash
Iroid\LocalTimezone\LocalTimezoneServiceProvider::class,
```


## Middleware  Configuration
Add the SetLocale middleware to your web middleware group in app/Http/Kernel.php

```bash
protected $middlewareGroups = [
    'web' => [
        \Iroid\LocalTimezone\Http\Middleware\SetLocale::class,
        // other middlewares...
    ],
];
```

Or for laravel 11 and higher  add in app/bootstrap/app.php

```bash
 ->withMiddleware(function (Middleware $middleware) {
        $middleware->web(
            [
                ....
                \Iroid\LocalTimezone\Http\Middleware\SetLocale::class,
            ]
        );
    })
```



## Converting to Local Time

```bash
use Iroid\LocalTimezone\LocalTimezone;

$originalTimestamp = '2024-07-24 12:00:00';
$localTime = LocalTimezone::convertToLocalTime($originalTimestamp);

echo $localTime; // Outputs the timestamp in the user's local timezone
```
You can also specify a custom format for the output:

```bash
$customFormattedLocalTime = LocalTimezone::convertToLocalTime($originalTimestamp, 'l, F j, Y g:i A');
echo $customFormattedLocalTime; // Outputs the timestamp in the custom format
```
