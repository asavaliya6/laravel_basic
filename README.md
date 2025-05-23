## Install Composer

- https://getcomposer.org/download/


## Install Laravel

- https://laravel.com/docs/11.x#creating-a-laravel-project
- https://laraveldaily.com/lesson/laravel-beginners/install-composer-installer

```
composer create-project laravel/laravel example-app
```


## Run Project

- php artisan serve
- migrate table --> php artisan migrate
- make migration --> php artisan make:migration table_name
- rolling back migration --> php artisan migrate:rollback
- show database schema --> php artisan db:show --> php artisan db:table table_name
- create controller --> php artisan make:controller ControllerName
- create model --> php artisan make:model ModelName
- create view --> php artisan make:view ViewName

## Install API in Project

php artisan install:api ---> yes

## Requirements

- PHP = 8.3.16
- Composer = 2.8.4
- Laravel = 5.11.2

## Summary of this lesson:

- Installing Laravel via Composer
- Setting up local development environment
- Understanding Laravel Installer options
- Creating first Laravel project
- Creating basic routes in web.php
- Understanding Laravel blade files
- Implementing basic page structure
- Managing 404 pages
- Converting HTML to Blade syntax
- Managing CSS/JS assets in public folder
- Using asset() helper function
- Implementing Bootstrap template
- Creating reusable layout files
- Using Blade extends and sections
- Implementing navigation menu
- Managing multiple pages
- Understanding Laravel migrations
- Creating database tables
- Managing environment variables
- Using database configuration
- Creating Controllers with artisan
- Understanding Models and Views
- Using Blade foreach loops
- Implementing database queries
- Creating relationships between models
- Using GET parameters
- Implementing Eloquent queries
- Managing category filtering
- Using route parameters in URLs
- Implementing Route Model Binding
- Creating individual post pages
- Managing dynamic routing
- Routing Method
- Any & Match Router Function
- HTTP Request Class
- session
- Flash Session
- image and Display image
- image image with database
- localization
- without model insert,edit,delete data
- with model insert,edit,delete data
- Create Custom Login,Register,Logout and Forgot Password
- Generate Admin panel using admin LTE https://adminlte.io/docs/3.1//upgrade-guide.html

## Import and Export Files

- Create Import and Export class
- Update controller and view and add route
