## LaravelPackage
[![Latest Stable Version](https://poser.pugx.org/smileraj/shoppingcart/v)](//packagist.org/packages/smileraj/shoppingcart) [![Total Downloads](https://poser.pugx.org/smileraj/shoppingcart/downloads)](//packagist.org/packages/smileraj/shoppingcart) [![Latest Unstable Version](https://poser.pugx.org/smileraj/shoppingcart/v/unstable)](//packagist.org/packages/smileraj/shoppingcart) [![License](https://poser.pugx.org/smileraj/shoppingcart/license)](//packagist.org/packages/smileraj/shoppingcart)

A simple laravelpackage implementation for Laravel.

## Installation

Install the package through [Composer](http://getcomposer.org/). 

Run the Composer require command from the Terminal:

    composer require smileraj/laravelpackage

Should you still be on version ^7.24 of Laravel, the final steps for you are to add the service provider of the package and alias the package. To do this open your `config/app.php` file.

Add a new line to the `providers` array:

	smileraj\LaravelPackage\LaravelPackageServiceProvider::class

And optionally add a new line to the `aliases` array:

	'Package' => smileraj\LaravelPackage\Facades\package::class,

Now you're ready to start using the laravelpackage in your application.