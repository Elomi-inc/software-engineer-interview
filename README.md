# Dorsia Software Engineer Interview

## Background

Dorsia isn't just any platform; we're a members-only haven for food enthusiasts seeking access to the most in-demand restaurant reservations in cities like New York, London, Miami, Los Angeles San Francisco, and beyond. Our mission? To open doors to exceptional dining experiences.

### The Role of a Software Engineer at Dorsia

As a software engineer here, you're the tech hero who keeps our platform running smoothly. You'll be part of a vibrant team that's constantly pushing the boundaries in the digital reservation space. If you're ready to dive in, you're looking at a role that's pivotal to our success and innovation.

### About the Challenge

This challenge is our way of seeing if you've got the right mix of skills. We're talking PHP expertise, a solid grasp of unit testing, and top-notch problem-solving abilities. These are the tools you'll need every day to help us deliver a seamless and top-tier service to our members.

### Real-World Impact

This challenge isn't just theoretical – it's a slice of what we do at Dorsia. You'll tackle a task that's at the core of our business: creating a list of reservation availabilities based on restaurant inputs. It's a real taste of the daily work here and a great indicator of how you'll fit into our team.

## Setup

Depending on your local system, you can elect to set up the project [using locally-installed PHP](#setup-using-php-and-composer) or [using Docker](#setup-using-docker).

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

