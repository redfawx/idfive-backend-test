# The Currency Exchange

View all recent currency exchange rates below or navigate to the admin panel to add some of your own!

## Live Demo Here
http://idfive-backend.stephenmarktoms.com/

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes. See deployment for notes on how to deploy the project on a live system.

### Prerequisites

This project was built with Laravel. Make sure that you have the following installed to run a local copy!

```
- Laravel Ecosystem
    Requirements for Laravel are pretty well documented and can be found here: https://laravel.com/docs/5.8/installation

- Local SQL Server
    I personally use Sequel Pro

- Composer and NPM
```

### Installing

A step by step series of examples that tell you how to get a development env running

1. First clone this repository to your local machine with the following:

```
git clone https://github.com/StephenMarkToms/idfive-backend-test.git
```

2. Open up a teminal or cmd prompt and navigate to your local repository and run the following commands

```
$ composer install
```

3. Create a database within your local application using mySQL

4. Navigate to the .env file in this repo and modify the following lines with your local information

```
DB_CONNECTION=mysql
DB_HOST=localhost;unix_socket=/Applications/MAMP/tmp/mysql/mysql.sock
DB_PORT=3306
DB_DATABASE=currencyexchange
DB_USERNAME=root
DB_PASSWORD=root
```

5. Next run the following command to setup the migrations for the database

```
$ php artisan migrate
```

6. Optional, if you would like to add some demo run the following command for seeds

```
$ php artisan db:seed
```

7. Lastly, start the local server with the following command
```
php artisan serve
```

By default the website should run at http://localhost:8000/


