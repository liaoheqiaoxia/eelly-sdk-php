<?php

declare(strict_types=1);
/*
 * This file is part of eelly package.
 *
 * (c) eelly.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Eelly\SDK\Store\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\Store\Service\FavoriteInterface;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
class Favorite implements FavoriteInterface
{

    /**
     * @return self
     */
    public static function getInstance() :self
    {
        static $instance;
        if (null === $instance) {
            $instance = new self();
        }

        return $instance;
    }
}