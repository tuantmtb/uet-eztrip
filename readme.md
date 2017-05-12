# UET - ezTrip

> Develop uet ezTrip

## Version
Status: Developing

Started date: 12/05/2017


## Technology & Library
Laravel 5

Redis

Bootstrap

Jquery

## Deployment


1. Create database
      
2. Config file .env
       Constant view .env.example
        
        - Config database


3. Install

        $ composer install
        $ composer update
        $ php artisan key:generate
        $ php artisan migrate --seed
        $ php artisan serve
        
        - Open browser localhost:8080
        ## Development
                        
#### Step 5: generate php docs
            
            $ php artisan ide-helper:generate
            $ php artisan ide-helper:models
            $ php artisan ide-helper:meta
            $ php artisan optimize
            $ composer dump-autoload
            $ php artisan config:cache
            $ php artisan cache:cleả
            
#### Debug, print console
            
            Log::info("messages")
            $ tail -f storage/logs/laravel.log | ccze -A

#### Other
            Seed db php artisan db:seed --class=CLASS_NAME
                

## Developers

