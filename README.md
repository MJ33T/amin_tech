## About Project

1.User management
    
    A list view of all user
    Each user can be Update or Delete    
    Also add new user 
    
2.Product management
    
    2.1.Add/edit products
    
        Add new Product. 
        All product list with edit functionality.
        Also can be added multiple image per product.
        
    2.2.List products with image
    
    2.3.Import product from CSV file
    
        Upload Panel to import CSV file
        All the product images download from link and Saved to the public/images folder
        
3.Contact Request Management

    List of all contact request
    Detail view of Contact request
    Can be delete any contact request
    
    
## Useage

1.File download and configuration

    clone or donwload zip on the desire directory on local machine
    
    edit .env file for Database configuration
     
    Run artisan command - php artisan migrate
    (migrate all the table to the database)
    
    Run artisan command - php artisan db:seed --class=UserSeeder
    (to store firstuser to login for admin on users table)
    
2.Start

    Run artisan command - php artisan serve
    (Start Laravel Development Server)

3.login

    Email Address : jeet@test.com
    Password : jeet1234
    
    
