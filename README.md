# cache-laravel-sanctum
# Let Laravel Sanctum Use Cache to Retrieve Tokens

Laravel Sanctum executes 3 database queries for every HTTP request.
This package wraps the default `PersonalAccessToken` model, uses cache to retrieve the `personal_access_token` and `tokenable` model. This reduces 2 queries for most requests.

## Installation

You can install the package via composer:

```bash
composer require ringzhu/cache-laravel-sanctum
```

## Usage

Once you have this package in your project, Sanctum tokens will be retrieved through cache automatically. Redis cache is recommended.