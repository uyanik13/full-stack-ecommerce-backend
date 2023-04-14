# Laravel 10 Ecommerce Panel with VUE JS 3


## Project Overview
This is an ecommerce management system built with Laravel and Vue using vite. It provides functionality to create and manage products, product categories, product images, shippings, discounts, and users. It also includes a dashboard for visualizing data using charts and cards.

![desktop](/public/demo/laravel-vue.jpeg)


## Project Setup
To set up the project, follow these steps:

Clone the repository.
```
git clone https://github.com/uyanik13/full-stack-ecommerce-backend.git
```

## Run composer install and npm install.
### Create a .env file and set up your database connection.
```
composer install
cp .env.example .env
php artisan key:generate
npm install
php artisan migrate
php artisan db:seed
npm run dev
php artisan serve 
```


## Project Structure
### The project structure is as follows:

`app/Http/Controllers`: Contains the Laravel controllers.

`app/Models`: Contains the Laravel models.

`app/Repositories`: Contains the Laravel repositories.

`app/Services`:Contains the Laravel services.

`database/factories`:Contains the Laravel factory classes.

`database/seeders`:Contains the Laravel seeder classes.

`routes/api.php`:Contains the Laravel API routes.


## Functionality
### The project provides the following functionality:

Create and manage products, product categories, product images, shippings, discounts, and users.
Dashboard for visualizing data using charts and cards.

## Technologies Used
### The project uses the following technologies:

> Laravel 8

> Vue 3 with vite

> Axios

> Pinia

> Tailwind CSS

> Laravel Sanctum

## Database Diagram
The database diagram for the project is as follows:
![desktop](/public/demo/database-diagram.jpeg)

## Authentication
The project uses Laravel Sanctum for authentication.
 To log in or register, send a POST request to the `/api/auth/login` or `/api/auth/register` endpoint with the `email` and `password` fields in the request body. 
 The API will return an access token that you can use to authenticate future requests. To log out, send a POST request to the `/api/auth/logout` endpoint with the access token in the Authorization header.

 ## Global Helper
 The project includes a global helper function that you can use to generate image URLs. To use it, call the `getImageUrl` function with the image path and size as arguments. For example:
 ```
 $imageData = uploadImage($request->image, 'image_path');
 $imageData =  [
            'image_url',
            'image_type' 
        ];
```

## Factories and Seeders
The project includes Laravel factories and seeders that you can use to generate fake data. To use them, run the `php artisan db:seed` command.

## Custom Laravel Request and Validation Rule
The project includes a custom Laravel request class and validation rule for validating product variants. The `ProductVariantRequest` class extends the `FormRequest` class and defines the rules for validating product variants. 

To use them, call the `ProductVariantRequest` class in the controller method that handles the variant creation or update request. For example:

## Product Relations with Eloquent
The project uses Eloquent to define and manage product relations. To define a relation, add a method to the model that returns the relation. For example:
```
public function category()
{
    return $this->belongsTo(ProductCategory::class);
}

```

## To retrieve a relation, call the method on the model. For example:

```
$category = $product->category;
```

## Image Upload with Vue
The project includes functionality to upload multiple images for a product using Vue. To upload an image, select it using the file input and it will be uploaded automatically. To delete an image, click the delete button next to it.

## Guarding Routes
The project includes functionality to guard routes from guests or authenticated users using Laravel middleware. To guard a route, add the middleware to the route definition. For example:
```
Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware('auth:sanctum');
```

## Pagination
The project includes a global Vue component for `pagination`. To use it, add the Pagination component to your Vue file and pass the `items` and `perPage` props.

## Unit Testing
The project includes unit tests for the Laravel API using PHPUnit. To run the tests, run the php artisan test command.

## Deployment
Set up your server environment with PHP and MySQL.
Clone the repository onto the server.
Set up your server environment variables in the .env file.
Run `composer install` and `npm install` to install the project dependencies.
Run `php artisan migrate` to create the database tables.
Run `php artisan db:seed` to seed the database with fake data.
Run `npm run production` to compile the Vue files for production.
Set up a web server configuration to serve the project.
Point your domain or IP address to the server to access the project.