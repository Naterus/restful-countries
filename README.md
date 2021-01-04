<p align="center"><a href="https://restfulcountries.com" target="_blank"><img src="https://restfulcountries.com/assets/images/logo/restful-logo-VERTICAL-SVG.svg" width="120"></a></p>

<p align="center">

<a href="https://github.com/Naterus/restful-countries/blob/main/LICENSE"><img src="https://restfulcountries.com/assets/images/license-mit.svg" alt="License"></a>
</p>


Restful (JSON) Api to retrieve data about any country with an admin management console to monitor requests, manage country data, feedbacks, and admin users with roles and permissions, api documentation, api authentication:

Everything on [https://restfulcountries.com](https://restfulcountries.com) has its source code available here except the data itself as it is hosted on a live database server.

## Usage
`Curl`

```angular2html
curl -I https://restfulcountries.com/api/v1/countries?per_page=1  -H "Accept: application/json" -H "Authorization: Bearer Your-token"

```
`Postman`
<p><img src="https://restfulcountries.com/assets/images/postman-demo.png" width="320"></p>

[Request access token](https://restfulcountries.com/request-token) to test api endpoints.
## Documentation
See api documentation here -  [Api Docs](https://restfulcountries.com/api-documentation)

## Running Locally
The current release of restful countries is built with Laravel Framework 7.29.3 and might need [PHP](https://php.net) 7.4+ to run smoothly.

If you wish to run the app for the purpose of contributing or just for personal use, you can follow these steps.

1. Open your terminal and `cd` to any directory of your choice
    ```bash
    cd your_directory
   ```
2. Clone this repository
    ```bash
    git clone https://github.com/Naterus/restful-countries.git
    ```
3. `cd` into the folder created for cloned project:
    ```bash
    cd restful_countries
   ```
   
4. Install packages with composer
    ```bash
    composer install
   ```
5. Make a copy of .env.example as .env
    ```bash
    cp .env.example .env
   ```
   verify that .env has key `APP_VERSION=1` or current api version.
   

6. Create database and add the database name,username and password (if any) to .env


7. Run migration
   ```bash
   php artisan migrate
   ```

8. Run database seed to create sample data
   ```bash
   php artisan db:seed
   ```
   
9. Create a symbolic link to storage for asset uploads
    ```bash
    php artisan storage:link
   ```

10. Start laravel internal server
   ```angular2html
   php artisan serve
```


11. open http://127.0.0.1:8000/ in your browser, You should see the home page of restful countries.



12. Set up `mailgun` or `mailtrap` and add credentials to .env to enable application send api keys to mail.


13. Navigate to http://127.0.0.1:8000/administrator/login, enter `administrator@restfulcountries.com` as email and `12345` as password. you should be logged in as super admin user.


## Contributing

This project is far from perfect, If you find a bug or an optimal way of implementing an existing or new feature, Feel free to fork this repository, modify and create a pull request.


Note : Ensure code is tested and well written before creating pull request.

## Donations

If you would like to sponsor this project, please visit [donation page](https://restfulcountries.com/donation).


## License

Restful countries is an open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
