# PHP Interview

## Setup

Ahead of the pair programming interview, clone this repository to your local machine and follow these instructions to get a development environment configured. Plan to use your preferred code editor and share your screen during the pair programming exercise. Do not fork this repository or publish your changes publicly as we will be using this repository for other interviews.

Depending on your local system, you can elect to set up the project [using locally-installed PHP](#setup-using-php-and-composer) or [using Docker](#setup-using-docker).

**Before proceeding with the setup, make sure to change into `php` directory.**

### Setup using PHP and Composer

If you already have PHP (>8.1) and the latest version of Composer installed on your system, simply install
dependencies with `composer install` and run your tests with `./vendor/bin/phpunit`.

### Setup using Docker

If you do not have PHP 8.1 and Composer 2 installed on your system, the easiest route is to use the included `dorsia`
command line tool to install the necessary dependencies and run your tests with `phpunit`.

#### Install dependencies

Run `./dorsia install` to pull the required images from Docker Hub and install the necessary PHP dependencies
using a dockerized version of Composer.

#### Run tests

You can use `./dorsia test` to run all test cases using `phpunit`. If you would like to run a single test,
pass the test name as a second argument. `./dorsia test it_provides_availability_on_an_interval`

## Ready to go?

Read through the documentation included in `./tests/DailyAvailabilityTest.php` and `./src/DailyAvailability.php` ahead of your interview.
During the interview, you and your partner will complete the functionality outlined in the unit tests.

If you are not familiar with PHPUnit, consider familiarizing yourself with the [documentation on their website](https://phpunit.de/documentation.html).