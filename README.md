![Downloads](https://img.shields.io/packagist/dt/dietercoopman/laravel-dashboard-laravelnews-tile.svg?style=flat-square)

# laravel-dashboard-laravelnews-tile

A Laravel News tile for the Spatie Dashboard. This tile will show you the Latest Laravel news articles on your Spatie Dashboard

# Installation

You can install the package via composer:

```shell
composer require dietercoopman/laravel-dashboard-laravelnews-tile
```

# Config file

In the dashboard config file, you must add this configuration in the tiles key.

```phpregexp

// in config/dashboard.php

return [
    // ...
        'tiles' => [
            'laravelnews'  => [
                'refresh_interval_in_seconds' => 300,
                'number_of_articles'          => 10,
            ],
        ],
    ];
```
