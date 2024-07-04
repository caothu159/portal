<?php

declare(strict_types=1);

/*
 * @copyright  © 2019 Dxvn, Inc.
 *
 * @author     Tran Ngoc Duc <ductn@diepxuan.com>
 * @author     Tran Ngoc Duc <caothu91@gmail.com>
 *
 * @lastupdate 2024-05-14 17:39:49
 */

namespace Diepxuan\Magento\Builders;

use Diepxuan\Magento\Models\Product;

class ProductBuilder extends Builder
{
    protected $entity = 'products';
    protected $model  = Product::class;
}
