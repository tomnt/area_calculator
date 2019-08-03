<?php
namespace Shapes;

/**
 * Class Rectangle
 * This is a class defining 2-dimensional geometric shapes, holding properties and making basic calculations.
 * This class defines properties and provide calculation features for rectangle.
 * @author Tom S. <tom_wrk@outlook.com>
 * @package Shapes
 */
class Rectangle extends Parallelogram implements ShapeInterface
{

  /**
   * Rectangle constructor.
   * @param float $side1 Side1
   * @param float $side2 Side2
   * @param float $scale Scale
   */
    public function __construct(float $side1,float $side2, float $scale)
    {
        $this->base = $side1;
        $this->anotherSide = $side2;
        $this->height = $this->anotherSide;
        $this->scale=$scale;
    }

    /**
     * Returns a string representation of this object.
     * @return string A string representation of this object.
     */
    public function __toString(): string
    {
        $aString["shape"] = "rectangle";
        $aString["side1"] = $this->base;
        $aString["side2"] = $this->anotherSide;
        $aString["area"] = $this->getArea();
        $aString["perimeter"] = $this->getPerimeter();
        return json_encode($aString);
    }
}