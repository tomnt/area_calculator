<?php

namespace Shapes;

/**
 * Class Parallelogram
 * This is a class defining 2-dimensional geometric shapes, holding properties and making basic calculations.
 * This class defines properties and provide calculation features for parallelogram.
 * @author Tom Shimizu <tom_wrk@outlook.com>
 * @package Shapes
 */
class Parallelogram extends ParallelogramAbstract implements ShapeInterface
{

  /**
   * Parallelogram constructor.
   * @param float $scale
   */
  public function __construct(float $scale)
  {
    $this->scale=$scale;
  }

  /**
   * Set base and height of the parallelogram
   * @param float $base Length of one side.(base)
   * @param float $anotherSide Length of anther side.
   * @param float $height (Distance of opposite pair of the base)
   */
  public function setBaseAndHeight(float $base, float $anotherSide, float $height): void
  {
    $this->base = $base;
    $this->anotherSide = $anotherSide;
    $this->height = $height;
  }

  /**
   * Set sides and angle in degree of the parallelogram.
   * @param float $side1 Length of one side.
   * @param float $side2 Length of anther side.
   * @param float $angleInDegree Angle in degree of any vertex.
   */
  public function setSidesAndAngle(float $side1, float $side2, float $angleInDegree): void
  {
    $this->base = $side1;
    $this->anotherSide = $side2;
    $this->height = bcmul($side2, sin(deg2rad($angleInDegree)), $this->scale);
  }

  /**
   * Returns a string representation of this object.
   * @return string A string representation of this object.
   */
  public function __toString(): string
  {
    $aString = array();
    $aString["shape"] = "parallelogram";
    $aString["base"] = $this->base;
    $aString["anotherSide"] = $this->anotherSide;
    $aString["height"] = $this->height;
    $aString["area"] = $this->getArea();
    $aString["perimeter"] = $this->getPerimeter();
    return json_encode($aString);
  }
}