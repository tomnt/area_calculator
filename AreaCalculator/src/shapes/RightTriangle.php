<?php
namespace Shapes;

/**
 * Class RightTriangle
 * This is a class defining 2-dimensional geometric shapes, holding properties and making basic calculations.
 * This class defines properties and provide calculation features for right triangle.
 * @author Tom S. <tom_wrk@outlook.com>
 * @package Shapes
 */
class RightTriangle implements ShapeInterface
{
  /**
   * @var float $base Base
   * @var float $height Height
   * @var float $scale Scale
   */
    private $base;
    private $height;
    private $scale;

  /**
   * Parallelogram constructor.
   * @param float $scale
   */
  public function __construct(float $scale)
  {
    $this->scale=$scale;
  }


  public function setCathetus(float $base, float $height): void
    {
        $this->base = $base;
        $this->height = $height;
    }

    public function setBaseAndHypotenuse(float $base, float $hypotenuse)
    {
        $this->base = $base;
        $this->height = $this->getHeight($this->base, $hypotenuse);
    }

    /**
     * Obtain height of the right triangle.
     * @return float Height of the shape
     */
    private function getHeight(float $base, float $hypotenuse)
    {
        return bcsqrt(bcpow($hypotenuse, 2, $this->scale) - bcpow($base, 2, $this->scale), $this->scale);
    }

    /**
     * Obtain area of the shape.
     * @return float Returns area of the shape.
     */
    public function getArea(): float
    {
        return bcdiv(bcmul($this->base, $this->height, $this->scale), 2, $this->scale);
    }

    /**
     * Obtain hypotenuse of the right triangle.
     * @return float Hypotenuse of the shape
     */
    private function getHypotenuse()
    {
        return bcsqrt(bcpow($this->base, 2, $this->scale) + bcpow($this->height, 2, $this->scale), $this->scale);
    }

    /**
     * Obtain perimeter of the shape.
     * @return float Returns perimeter of the shape
     */
    public function getPerimeter(): float
    {
        return $this->base + $this->height + $this->getHypotenuse();
    }

    /**
     * Resize the shape corresponding to the given ratio.
     * @param  float $ratio Set ratio to resize.
     */
    public function resize(float $ratio): void
    {
        $this->base = bcmul($ratio, $this->base, $this->scale);
        $this->height = bcmul($ratio, $this->height, $this->scale);
    }

    /**
     * Returns a string representation of this object.
     * @return string A string representation of this object.
     */
    public function __toString(): string
    {
        $aString=array();
        $aString["shape"] = "right triangle";
        $aString["base"] = $this->base;
        $aString["height"] = $this->height;
        $aString["area"] = $this->getArea();
        $aString["perimeter"] = $this->getPerimeter();
        return json_encode($aString);
    }
}