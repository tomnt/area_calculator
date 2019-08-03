<?php

namespace Shapes;

/**
 * Class Square
 * This is a class defining 2-dimensional geometric shapes, holding properties and making basic calculations.
 * This class defines properties and provide calculation features for square.
 * @author Tom S. <tom_wrk@outlook.com>
 * @package Shapes
 */
class Square extends Parallelogram implements ShapeInterface
{

  /**
   * Square constructor.
   * @param float $side Side
   * @param float $scale scale
   */
  public function __construct(float $side, float $scale)
  {
    $this->base = $side;
    $this->anotherSide = $this->base;
    $this->height = $this->base;
    $this->scale = $scale;
  }

  /**
   * Returns a string representation of this object.
   * @return string A string representation of this object.
   */
  public function __toString(): string
  {
    $aString["shape"] = "square";
    $aString["side"] = $this->base;
    $aString["area"] = $this->getArea();
    $aString["perimeter"] = $this->getPerimeter();
    return json_encode($aString);
  }
}