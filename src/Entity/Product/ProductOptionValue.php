<?php

declare(strict_types=1);

namespace App\Entity\Product;

use Doctrine\ORM\Mapping as ORM;
use Sylius\Component\Product\Model\ProductOptionValue as BaseProductOptionValue;
use Sylius\Component\Product\Model\ProductOptionValueTranslationInterface;
use Sylius\Component\Product\Factory\ProductVariantFactoryInterface;

/**
 * @ORM\Entity
 * @ORM\Table(name="sylius_product_option_value")
 */
class ProductOptionValue extends BaseProductOptionValue
{
}
