# Laravel Nova Error on SqlServer
Reproduce the error in Laravel Nova as described in https://github.com/laravel/nova-issues/issues/2207 and https://github.com/laravel/nova-issues/issues/1621

## Steps to Reproduce
- Clone Repo
- Setup Sql Server connection
- Run `php artisan migrate --seed` 
- Access the url `/nova`
- Log in with `admin@example.com` e-mail and `secret` password
- Open User index
- Select `all matching (51)`
- Run Test Action
