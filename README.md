# area_calculator
PHP library for defining 2-dimensional geometric shapes and making basic calculations with them.  The following shapes should be featured:

* circle
* right triangle
* equilateral triangle
* rectangle
* square
* parallelogram

For each shape, the library should be able to do the following:

* calculate the area
* calculate the perimeter
* proportionally resize the shape up or down, given a floating-point scale factor

```
# Obtaining code
git clone https://github.com/tomnt/area_calculator.git

# Moving to repository directory
cd area_calculator

# Obtaining dependencies
composer install

# Running Demo
php Demonstrator.php

# Running UnitTest
./vendor/bin/phpunit --bootstrap ./vendor/autoload.php ./AreaCalculator/src/tests/
```
