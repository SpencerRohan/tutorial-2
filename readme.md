
# Back-End Track

#### Phase 1

Ran into a few snags when it came to database relationships - still not sure I set that up right. I really liked how blade works, would be interested in learning more. Not sure if it's because it's a foreign framework or if it's how Laravel is built - but it feels a little akward in some points. Building databases and models seem a bit more effort than rails. I could use some tips/lookover on my models, controllers, and migrations. I also couldn't get any function calls to work when going into the view - easier to explain in person.  Maybe I'm missing something?


##### Questions and Topics:

+ Naming variables in the view - more details. - Answered
+ Why did I have to 'composer update' and 'composer dump-autoload' when migrating - Answered(partially)
+ var_dump - uses?
+ Extending blade - where could I put something like:
```php
  Blade::extend(function($value) {
    return preg_replace('/\@var(.+)/', '<?php ${1}; ?>', $value);
  });

  @var $variable = 'value';
```
+ Using helper files - when/where/why? - ANSWERED
+ Namespace - /acme, /lib, /products, /themes
+ Timestamps issue
+ testing in PHP - any resources? Similar to ruby or js?
+ $product = Product::setProductLine($code); is still giving me an error of:
```
Non-static method App\Product::setProductLine() should not be called statically, assuming $this from incompatible context

```
+ What programs should I use to code with? Sublime, Atom - any other suggestions?

[CheatSheet](http://cheats.jesse-obrien.ca/)

Confident in coding scale 1-10, Phase 1 was about a 6-7. There is still a ton I'm not aware of, but the basic foundation and building blocks are very similar to Rails. Like Rails, Laravel has so much going on and customizable options, I feel it'll take me a bit to really master it. I do feel comfortable in doing the basic operations.






## Laravel PHP Framework

[![Build Status](https://travis-ci.org/laravel/framework.svg)](https://travis-ci.org/laravel/framework)
[![Total Downloads](https://poser.pugx.org/laravel/framework/d/total.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/framework/v/stable.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/framework/v/unstable.svg)](https://packagist.org/packages/laravel/framework)
[![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)


Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as authentication, routing, sessions, queueing, and caching.

Laravel is accessible, yet powerful, providing powerful tools needed for large, robust applications. A superb inversion of control container, expressive migration system, and tightly integrated unit testing support give you the tools you need to build any application with which you are tasked.

## Official Documentation

Documentation for the framework can be found on the [Laravel website](http://laravel.com/docs).

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](http://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

### License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
