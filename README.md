# Login page lang pang CMS
## Installation

Require this package with composer.

```shell
composer require mark-villudo/login-page
```

```
To install Tailwind CSS in Laravel, follow these steps:

Step 1: Create a new Laravel project Open your terminal and navigate to the directory where you want to create your Laravel project. Then, run the following command to create a new Laravel project:


composer create-project --prefer-dist laravel/laravel your-project-name
Step 2: Install Tailwind CSS Once the project is created, navigate to the project directory by running:


cd your-project-name
Then, you can install Tailwind CSS using the npm package manager. Run the following command to install it:


npm install tailwindcss
Step 3: Configure Tailwind CSS After the installation, you need to generate the basic configuration file for Tailwind CSS. Run the following command to generate the default tailwind.config.js file:


npx tailwindcss init
This will create a tailwind.config.js file in your project's root directory.

Step 4: Include Tailwind CSS in your Laravel project Next, you need to include the Tailwind CSS styles in your Laravel project. Open the resources/css/app.css file and replace its contents with the following:

css

@import 'tailwindcss/base';
@import 'tailwindcss/components';
@import 'tailwindcss/utilities';
Step 5: Build your assets To compile your Tailwind CSS styles into a CSS file, you need to run Laravel Mix. In your terminal, run the following command:


npm run dev
This will compile your CSS styles using Laravel Mix, and you should see a new public/css/app.css file.

Step 6: Include the compiled CSS file in your Laravel project Finally, you need to include the compiled CSS file in your Laravel project. Open the resources/views/layouts/app.blade.php file and add the following line within the <head> section:

html

<link href="{{ asset('css/app.css') }}" rel="stylesheet">
Now, Tailwind CSS is installed and configured in your Laravel project. You can start using the Tailwind CSS classes in your views or components.
```

### Publish the Sanctum configuration and migration files using the vendor:publish Artisan command. The sanctum configuration file will be placed in your application's config directory:
```
php artisan vendor:publish --provider="MarkVilludo\LoginPage\LoginServiceProvider" --tags=views
```

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

