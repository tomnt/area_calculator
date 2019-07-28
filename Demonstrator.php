<?php
/**
 * Demonstrator for shape package classes
 *
 * This script can be executed by a command line below;
 *
 *   $php .\Demonstrator.php
 *
 * @author Tom Shimizu <tom_wrk@outlook.com>
 * @package Shapes
 */

require_once 'vendor/autoload.php';


/**
 * Class Demonstrator
 */
class Demonstrator
{
  private $scale = 14;

  public function __construct()
  {
    $ratio = 2.1234567890123;
    // Circle
    ///////////
    $radius = 3.123;
    $comment = "radius= " . $radius;
    $shape = new Shapes\Circle($radius, $this->scale);
    $this->printTestReport($shape, $ratio, $comment);

    // Right Triangle(Set cathetus)
    /////////////////////////////////
    $cathetus1 = 2.123;
    $cathetus2 = 3.098;
    $comment = "cathetus1= " . $cathetus1 . ", cathetus2= " . $cathetus2;
    $shape = new Shapes\RightTriangle($this->scale);
    $shape->setCathetus($cathetus1, $cathetus2);
    $this->printTestReport($shape, $ratio, $comment);

    // Right Triangle(Set base and hypotenuse)
    ///////////////////////////////////////////
    $base = 3.123;
    $hypotenuse = 4.098;
    $comment = "base= " . $base . ", hypotenuse= " . $hypotenuse;
    $shape = new Shapes\RightTriangle($this->scale);
    $shape->setBaseAndHypotenuse($base, $hypotenuse, $comment);
    $this->printTestReport($shape, $ratio, $comment);

    // EquilateralTriangle
    ////////////////////////
    $side = 3.234;
    $comment = "side= " . $side;
    $shape = new Shapes\EquilateralTriangle($side, $this->scale);
    $this->printTestReport($shape, $ratio, $comment);

    // Rectangle
    ////////////
    $side1 = 2.345;
    $side2 = 3.456;
    $comment = "side1= " . $side1 . ", side2= " . $side2;
    $shape = new Shapes\Rectangle($side1, $side2, $this->scale);
    $this->printTestReport($shape, $ratio, $comment);

    // Square
    ///////////
    $side = 3.456;
    $comment = "side= " . $side;
    $shape = new Shapes\Square($side, $this->scale);
    $this->printTestReport($shape, $ratio, $comment);

    // Parallelogram(Set base and height)
    //////////////////////////////////////
    $base = 2.456;
    $anotherSide = 3.456;
    $height = 4.567;
    $comment = "base= " . $base . ", anotherSide= " . $anotherSide . ", height= " . $height;
    $shape = new Shapes\Parallelogram($this->scale);
    $shape->setBaseAndHeight($base, $anotherSide, $height);
    $this->printTestReport($shape, $ratio, $comment);

    // Parallelogram(Set side and angle)
    /////////////////////////////////////
    $side1 = 2.345;
    $side2 = 3.456;
    $angleInDegree = 45.678;
    $comment = "side1= " . $side1 . ", side2= " . $side2 . ", angleInDegree= " . $angleInDegree;
    $shape = new Shapes\Parallelogram($this->scale);
    $shape->setSidesAndAngle($side1, $side2, $angleInDegree);
    $this->printTestReport($shape, $ratio, $comment);
  }

  /**
   * Prints test report for given shape object corresponding to parameters
   * @param ShapesInterface $shape
   * @param float $ratio
   * @param string $comment
   */
  private function printTestReport(&$shape, float $ratio, string $comment = "")
  {
    $stdClassToString = json_decode((string)$shape);
    echo "\n" . " /// " . ucfirst($stdClassToString->shape) . " ///" . "\n";
    echo "Given parameter(s)    : " . $comment . "\n";
    $this->testShape($shape);
    $this->testResizeShape($ratio, $shape);
    unset($shape);
    echo "\n";
  }

  /**
   * Conduct unit test for given shape object
   * @param ShapesInterface $shape
   */
  private function testShape($shape)
  {
    $area = $shape->getArea();
    $perimeter = $shape->getPerimeter();
    echo "Results               : Area= " . $area . ", Perimeter= " . $perimeter . "\n";
  }

  /**
   * @param float $ratio
   * @param ShapeInterface $shape
   */
  private function testResizeShape(float $ratio, $shape)
  {
    $shape->resize($ratio);
    echo "Resized to            : " . $ratio . " times" . "\n";
    $area = round($shape->getArea(), $this->scale);
    $perimeter = round($shape->getPerimeter(), $this->scale);
    echo "Results after resizing: Area= " . $area . ", Perimeter= " . $perimeter . "\n";
  }

}

new Demonstrator();