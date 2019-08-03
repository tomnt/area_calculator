<?php

namespace Shapes;

/**
 * Class EquilateralTriangle
 * This is a class defining 2-dimensional geometric shapes, holding properties and making basic calculations.
 * This class defines properties and provide calculation features for equilateral triangle.
 * @author Tom S. <tom_wrk@outlook.com>
 * @package Shapes
 */
class EquilateralTriangle implements ShapeInterface
{
  /**
   * @var float $side Side
   * @var float $scale Scale
   */
  private $side;
  private $scale = 14;

  /**
   * EquilateralTriangle constructor.
   * @param float $side Length of side of the EquilateralTriangle;
   * @param float $scale Scale
   */
  public function __construct(float $side, float $scale)
  {
    $this->side = $side;
    $this->scale = $scale;
  }

  /**
   * Obtain area of the shape.
   * @return float Returns area of the shape.
   */
  public function getArea(): float
  {
    return bcdiv(bcmul(sqrt(3), pow($this->side, 2), $this->scale), 4, $this->scale);
  }

  /**
   * Obtain perimeter of the shape.
   * @return float Returns perimeter of the shape
   */
  public function getPerimeter(): float
  {
    return bcmul($this->side, 3, $this->scale);
  }

  /**
   * Resize the shape corresponding to the given ratio.
   * @param float $ratio Set ratio to resize.
   */
  public function resize(float $ratio): void
  {
    $this->side = bcmul($ratio, $this->side, $this->scale);
  }

  /**
   * Returns a string representation of this object.
   * @return string A string representation of this object.
   */
  public function __toString(): string
  {
    $aString = array();
    $aString['shape'] = 'equilateral triangle';
    $aString['side'] = $this->side;
    $aString['area'] = $this->getArea();
    $aString['perimeter'] = $this->getPerimeter();
    return json_encode($aString);
  }
}