<?php
namespace Mirakl\MMP\Common\Domain\Offer\Price;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method  float       getPrice()
 * @method  $this       setPrice(float $price)
 * @method  \DateTime   getUnitDiscountPrice()
 * @method  $this       setUnitDiscountPrice(float $unitDiscountPrice)
 * @method  float       getUnitOriginPrice()
 * @method  $this       setUnitOriginPrice(float $unitOriginPrice)
 * @method  int         getQuantityThreshold()
 * @method  $this       setQuantityThreshold(int $quantityThreshold)
 */
class VolumePrice extends MiraklObject
{}