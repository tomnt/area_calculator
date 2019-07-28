<?php
namespace Shapes;

/**
 * Interface ShapesInterface
 * This is an interface defining 2-dimensional geometric shapes and making basic calculations.
 * @author Tom Shimizu <tom_wrk@outlook.com>
 * @package shapes
 */
interface ShapeInterface
{

    /**
     * Obtain area of the shape.
     * @return float Returns area of the shape.
     */
    public function getArea():float ;

    /**
     * Obtain perimeter of the shape.
     * @return float Returns perimeter of the shape
     */
    public function getPerimeter():float ;

    /**
     * Resize the shape corresponding to the given ratio.
     * @param  float $ratio Set ratio to resize.
     */
    public function resize(float $ratio):void ;

}