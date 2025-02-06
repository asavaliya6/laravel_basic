## Install Composer

https://getcomposer.org/download/


## Install Laravel

https://laravel.com/docs/11.x#creating-a-laravel-project
https://laraveldaily.com/lesson/laravel-beginners/install-composer-installer

```
composer create-project laravel/laravel example-app
```


## Run Project

php artisan serve
migrate table --> php artisan migrate
make migration --> php artisan make:migration table_name
rolling back migration --> php artisan migrate:rollback
show database schema --> php artisan db:show --> php artisan db:table table_name
create controller --> php artisan make:controller ControllerName
create model --> php artisan make:model ModelName
create view --> php artisan make:view ViewName

## Install API in Project

php artisan install:api ---> yes

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