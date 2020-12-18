<p align="center"><a href="https://restfulcountries.com" target="_blank"><img src="https://restfulcountries.com/storage/images/logo/restful-logo-VERTICAL-SVG.svg" width="120"></a></p>

<p align="center">

<a href="https://github.com/Naterus/restful-countries/blob/main/LICENSE"><img src="https://restfulcountries.com/storage/images/license-mit.svg" alt="License"></a>
</p>


Restful (JSON) Api to retrieve data about any country with an admin management console to monitor requests, manage country data, feedbacks, and admin users with roles and permissions:

Everything on [https://restfulcountries.com](https://restfulcountries.com) has its source code available here except the data itself as it is hosted on a live database server.

## Usage
`Curl`

```angular2html
curl -I https://restfulcountries.com/api/v1/countries?per_page=1  -H "Accept: application/json" -H "Authorization: Bearer Your-token"

```
`Postman`


## Documentation
See api documentation here -  [Api Docs](https://restfulcountries.com/api-documentation)

## Installation Guide
The current release of restful countries is built with Laravel Framework 7.29.3 and might need [PHP](https://php.net) 7.4+ to run smoothly.

If you wish to run the app for the purpose of contributing or just for personal use, you can follow these steps.

I would assume you have cloned this project already, ran `composer install` and
 `npm install` , also made a copy of your `.env.example` as `.env` 

Create an empty database and enter the database information on your `.env`

Then run `php artisan migrate`

Add this variable to your .env
`APP_VERSION=1` which is the current api version.

Generate symlink `php artisan storage:link` (You might have to delete the storage file with your root public directory)

Finally run `php artisan db:seed`

This would create sample data for you to test, the most important data is the super admin user created.
email `administrator@restfulcountries.com` and password `12345`

You can now run the application.

 Open  [localhost:{port}/{directory-name}/administrator/login](#)
You can now enter the admin email and password to login.

Open the documentation page for api endpoints.

don't forget to add `APP_VERSION=1` to your .env, very important.
## Contributing

See contribution  guide here - [Restful Countries Contribution](https://laravel.com/docs/contributions).

## Donations

A kind gesture would be appreciated for the maintenance of restful countries. If you are interested in donating to restful countries, please visit [donation page](https://restfulcountries.com/donation).


## License

Restful countries is an open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
