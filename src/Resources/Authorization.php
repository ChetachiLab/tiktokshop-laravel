<?php
/*
 * This file is part of tiktok-shop.
 *
 * (c) Jin <j@sax.vn>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace EcomPHP\TiktokShop\Resources;

use EcomPHP\TiktokShop\Resource;

class Authorization extends Resource
{
    protected $category = 'shop';

    public function getAuthorizedShop()
    {
        return $this->call('GET', 'shop/get_authorized_shop');
    }
}
