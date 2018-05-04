# MultiAuth

This is an example of laravel multi-user authentication using the inbuilt authentication system.

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes.

### Prerequisites

The project is built on Laravel. For the system to run, the following prerequisites are required. 

```
PHP 7.2 >=
Composer
MariaDB or MySQL Database
```

### Installing
Here are the steps of running this project.

Clone this repository

```
git clone https://github.com/ArtisanLabs/laravelAuth.git
```

Install the composer dependencies

```
composer install
```

Move the .env.example to .env

```
mv .env.example .env
```

Generate the application encryption key
```
php artisan key:generate
```

Configure the database to match your environment
```
DB_DATABASE=YourDBName
DB_USERNAME=YourUsername
DB_PASSWORD=YourPassword
```

Run the migrations
```
php artisan db:seed
```

Start the server
```
php artisan serve
```

Open the application on a web browser
```
http://127.0.0.1:8000/
```
```

## Using the application

Since the application has two user, there are two different urls for each of them.

### Admin Dashboard

This is the super user. 

```
http://127.0.0.1:8000/admin/login
Email - artisan@test.com
Password - secret
```

### The User

The default user. Accessible through

```
http://127.0.0.1:8000/
```

and then create an account.


## Built With

* [Laravel](https://laravel.com/) - The web framework used.

## Authors

* **Jay Wambugu** - *Initial work* - [ArtisanLabs](https://github.com/ArtisanLabs/)

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details