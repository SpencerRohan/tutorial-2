
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
Non-static method App\Product::setProductLine() 
should not be called statically, assuming $this 
from incompatible context

```
+ What programs should I use to code with? Sublime, Atom - any other suggestions? - Answered
+ Abstract vs Inheritance - differences outside of not being able to make an instance? Abstract vs Interface - uses? I get the main concepts, would love to see practical applications.

[CheatSheet](http://cheats.jesse-obrien.ca/)

Confident in coding scale 1-10, Phase 1 was about a 6-7. There is still a ton I'm not aware of, but the basic foundation and building blocks are very similar to Rails. Like Rails, Laravel has so much going on and customizable options, I feel it'll take me a bit to really master it. I do feel comfortable in doing the basic operations.


#### Phase 2

There were a lot of things that tested my brainwaves on this phase. One of the biggest issues I had was deleting routes but not the related database entry. I also created an ADMIN feature to the user authentication. My thought process was this could allow people to sign up for the site later in life, while keeping an administration side of things -- also gave me an excuse to play with middleware. Pagination is a great tool for laravel, really like how easy that is! There is a few things that I'm still working on - would like to validate some of the data coming in - and making sure the errors thrown are well explained. I tested errors out in a spot or two - could use some protips in validation - how to go about doing that. Overall I think I did well, I think with more practice a lot of the building process will be smoother.

##### Questions and Topics:

+ Deleting routes - onDelete('SET NULL') - any other ways?
+ Validating data beyond database entry.
+ Index vs List - I think subconsciously I made my list views all index views(rails thing) - do index views exist in laravel?
+ Getting an Auth/login redirect if user data does not exist - I'm not sure where that's happening. Somewhere in the authenticationandregistration route - not sure where that is in my code base. Can I override?
+ Pulling a laravel project in from github. Is it just 'composer install', setting up the .env, and you are good to go?
+ Any portion of my code base look super clunky?
+ Commit messages - What are the general rules followed here?
+ Any laravel books worth picking up?

Confident in coding scale 1-10, Phase 1 was a solid 7. The basics are there for me, what I should be looking for and how things connect. Still working to really streamline the coding process. We talked Wednesday about a lot of new concepts. Any reading materials you would suggest?






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
