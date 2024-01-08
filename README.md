# Dorsia Software Engineer Interview

## Background

_Todo - add some background for the assignment_

## Setup

Depending on your local system, you can elect to set up the project [using locally-installed PHP](#using-php-and-composer) or [using Docker](#using-docker).

### Using PHP and Composer

If you already have PHP (>8.1) and the latest version of Composer installed on your system, simply install
dependencies with `composer install` and run your tests with `./vendor/bin/phpunit`.

### Using Docker

If you do not have PHP 8.1 and Composer 2 installed on your system, the easiest route is to use the included `dorsia` 
command line tool to install the necessary dependencies and run your tests with `phpunit`.

#### Install dependencies

Run `./dorsia install` to pull the required images from Docker Hub and install the necessary PHP dependencies 
using a dockerized version of Composer.

#### Run tests

You can use `./dorsia test` to run all test cases using `phpunit`. If you would like to run a single test,
pass the test name as a second argument. `./dorsia test it_provides_availability_on_an_interval`

