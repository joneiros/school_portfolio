# School Portfolio
Portfolio website documenting various college projects.

## Archival Notes
This is a useful time capsule, but not useful beyond that. Running a whole
Laravel service just for a portfolio seems unnecessary now that I've spent
some time working with the JAM Stack and [Astro](https://astro.build).

Taking a look at this repo for the first time in a few years, I was
initially flabbergasted seeing a commit saying:
```
removed the gitignore that was stopping the database from being pushed
```
However, thinking about it now, I think it was the right call considering the
other choices I made while building that repo. The fact that the entire database
is only 225Kb means that I don't have too much overhead pushing it into GitHub,
and now, years later, I still have access to all the project descriptions I
stored rather than having them lost on some old machine or obscured in some
cloud hosting service.

Still, if I had it to do over again, I'd probably push all that text into static
pages. The database layer for this whole application probably could've been
avoided. Ah well, such is hindsight, and the insight of many extra years in the
field.

---
---
---

## Laravel PHP Framework

[![Build Status](https://travis-ci.org/laravel/framework.svg)](https://travis-ci.org/laravel/framework)
[![Total Downloads](https://poser.pugx.org/laravel/framework/d/total.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/framework/v/stable.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/framework/v/unstable.svg)](https://packagist.org/packages/laravel/framework)
[![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as authentication, routing, sessions, queueing, and caching.

Laravel is accessible, yet powerful, providing tools needed for large, robust applications. A superb inversion of control container, expressive migration system, and tightly integrated unit testing support give you the tools you need to build any application with which you are tasked.

## Official Documentation

Documentation for the framework can be found on the [Laravel website](http://laravel.com/docs).

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](http://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
