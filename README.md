# laravel-demo
A basic crud with authentication built on Laravel

## Requirements
- PHP >= 8.x
- Composer

## Installation
1. Clone this repo to your local machine  
```git clone https://github.com/l1nk01/laravel-demo.git```  
or  
```gh repo clone L1nk01/laravel-demo```

2. Navigate to the project directory  
```cd laravel-demo```

3. Install Composer dependencies  
```composer install```

4. Copy the '.env.example' file into '.env' and configure your environment  
```cp .env.example .env```

5. Configure the database in the '.env' file  
```DB_DATABASE=nombre_de_tu_base_de_datos```  
```DB_USERNAME=tu_usuario```  
```DB_PASSWORD=tu_contraseña```

6. Run the database migrations  
```php artisan migrate```

7. Run the development server  
```php artisan serve```

### It's all done! Now you can run the app in `http://127.0.0.1:8000`