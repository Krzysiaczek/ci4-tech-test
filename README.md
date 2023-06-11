# PHP Technial Test based on CodeIgniter 4

## What is this project?

This site is just a technical test, it was built to satisfy the specification visible below.

Create a simple CRUD application to manage details and credentials of users. Use the technologies bellow to complete the task and host the final code project in your GitHub account. Using the best practices of coding, commit the development process by uploading into GitHub by the end of your day.

#### Requirements:

You need to create a CRUD to add users and credentials. Fields like (firstname, lastname, email, mobile, username, password) are mandatory but you can use your imagination to add as many fields you like.

- Bootstrap 4 (https://getbootstrap.com/docs/4.0/getting-started/introduction/)
- CodeIgniter 4 (https://codeigniter.com/)
- DataTables (https://www.datatables.net/)
- JavaScript or jQuery

#### Optional:

If you’re relly up to a challenge and want to impress, use SmartAdmin template for the project. Live demo here: https://www.gotbootstrap.com/themes/smartadmin/4.5.1/intel_analytics_dashboard.html
You can download the template here: https://github.com/andreipa/smartadmin-html-full


## Setup

Navigate to prefer folder and execute
```
$ git clone git@github.com:Krzysiaczek/ci4-tech-test.git
```

Go to new a new folder 
```
$ cd ci4-tech-test
```
adn execute 
```
$ composer install
```

Copy `env` to `.env` and tailor for your app, specifically the baseURL and any database settings including the name of your choice, e.g. `ci4_sandbox`.

Back in terminal execute following commands to create a schema, tables and seed them with some fake data
```
$ php spark db:create ci4_sandbox
$ php spark migrate
$ spark db:seed UserSeeder
```
If the last command would fail due to duplicate values for unique fields, it's safe to try again as those fake methods occasionally could create a repetitive values.

Finally time to launch the test site
```
$ php spark serve
```
and visit the link provided. Usually it's http://localhost:8080/ but sometimes port could be different.

## Server Requirements

PHP version 7.4 or higher is required, with the following extensions installed:

- [intl](http://php.net/manual/en/intl.requirements.php)
- [mbstring](http://php.net/manual/en/mbstring.installation.php)

Additionally, make sure that the following extensions are enabled in your PHP:

- json (enabled by default - don't turn it off)
- [mysqlnd](http://php.net/manual/en/mysqlnd.install.php) if you plan to use MySQL
- [libcurl](http://php.net/manual/en/curl.requirements.php) if you plan to use the HTTP\CURLRequest library
