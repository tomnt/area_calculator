<?php

namespace Shapes;

/**
 * Class Circle
 * This is a class defining 2-dimensional geometric shapes, holding properties and making basic calculations.
 * This class defines properties and provide calculation features for circle.
 * @author Tom S. <tom_wrk@outlook.com>
 * @package Shapes
 */
class Circle implements ShapeInterface
{
  /**
   * @var float $radius Radius
   * @var float $scale Scale
   */
  private $radius;
  private $scale;

  /**
   * Circle constructor.
   * @param float $radius Radius
   * @param float $scale Scale
   */
  public function __construct(float $radius,float $scale)
  {
    $this->radius = $radius;
    $this->scale = $scale;
  }

  /**
   * Obtain area of the shape.
   * @return float Returns area of the shape.
   */
  public function getArea(): float
  {
    return bcmul(M_PI, bcpow($this->radius, 2, $this->scale), $this->scale);
  }

  /**
   * Obtain perimeter of the shape.
   * @return float Returns perimeter of the shape
   */
  public function getPerimeter(): float
  {
    return bcmul(M_PI, bcmul(2, $this->radius, $this->scale), $this->scale);
  }

  /**
   * Resize the shape corresponding to the given ratio.
   * @param float $ratio Set ratio to resize.
   */
  public function resize(float $ratio): void
  {
    $this->radius = bcmul($ratio, $this->radius, $this->scale);
  }

  /**
   * Returns a string representation of this object.
   * @return string A string representation of this object.
   */
  public function __toString(): string
  {
    $aString['shape'] = 'circle';
    $aString['radius'] = $this->radius;
    $aString['area'] = $this->getArea();
    $aString['perimeter'] = $this->getPerimeter();
    return json_encode($aString);
  }

}