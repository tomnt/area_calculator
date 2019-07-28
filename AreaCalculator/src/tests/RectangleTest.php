<?php
declare(strict_types=1);

require_once 'vendor/autoload.php';

use PHPUnit\Framework\TestCase;

final class RectangleTest extends TestCase
{
  /**
   * @var ShapeInterface $shape Shape
   * @var float $ratio Ratio
   */
  private $shape;
  private $ratio;

  /**
   * Setting up the test
   */
  public function setUp(): void
  {
    parent::setUp(); // TODO: Change the autogenerated stub
    $this->ratio = 2.1234567890123;
    $side1= 2.345;
    $side2= 3.456;
    $scale=14;
    //Instantiating a shape object
    $this->shape = new Shapes\Rectangle($side1, $side2, $scale);
    $this->shape->getPerimeter();
    //$this->shape->resize();
  }

  /**
   * Testing ::getArea()
   * @throws Exception
   */
  public function testGetArea(): void
  {
    $actual = $this->shape->getArea();
    $this->assertEquals(8.10432, $actual);
  }

  /**
   * Testing ::getPerimeter()
   * @throws Exception
   */
  public function testGetPerimeter(): void
  {
    $actual = $this->shape->getPerimeter();
    $this->assertEquals(11.602, $actual);
  }

  /**
   * Testing ::resize(float $ratio)
   * @throws Exception
   */
  public function testResize(): void
  {
    $this->shape->resize($this->ratio);
    $actualArea = $this->shape->getArea();
    $actualPerimeter = $this->shape->getPerimeter();
    $this->assertEquals(36.542935928834, $actualArea);
    $this->assertEquals(24.63634566612, $actualPerimeter);
  }

}