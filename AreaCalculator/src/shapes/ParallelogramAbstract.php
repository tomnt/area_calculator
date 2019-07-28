<?php

namespace Shapes;

/**
 * Interface ShapesInterface
 * This an abstract class defines properties and provide calculation features for parallelogram, including rectangle and square.
 * @author Tom Shimizu <tom_wrk@outlook.com>
 * @package shapes
 */
abstract class ParallelogramAbstract implements ShapeInterface
{

  /**
   * @var float $base Base
   * @var float $anotherSide AnotherSide
   * @var float $height Height
   * @var float $scale Scale
   */
  protected $base;
  protected $anotherSide;
  protected $height;
  protected $scale;

  /**
   * Obtain area of the shape.
   * @return float Returns area of the shape.
   */
  public function getArea(): float
  {
    return bcmul($this->base, $this->height, $this->scale);
  }

  /**
   * Obtain perimeter of the shape.
   * @return float Returns perimeter of the shape
   */
  public function getPerimeter(): float
  {
    return bcmul(2, $this->base + $this->anotherSide, $this->scale);


  }

  /**
   * Resize the shape corresponding to the given ratio.
   * @param float $ratio Set ratio to resize.
   */
  public function resize(float $ratio): void
  {
    // $scale = 2;
    $this->base = bcmul($ratio, $this->base, $this->scale);
    $this->anotherSide = bcmul($ratio, $this->anotherSide, $this->scale);
    $this->height = bcmul($ratio, $this->height, $this->scale);
  }


}