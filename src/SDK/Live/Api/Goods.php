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

namespace Eelly\SDK\Live\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\Live\Service\GoodsInterface;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class Goods implements GoodsInterface
{
    /**
     * 获取直播商品信息
     *
     * @param array $condition 查询条件
     * @param array $sort 排序信息
     * @param int $currentPage 当前页
     * @param int $limit 每页数量
     * @return array 商品信息
     * @requestExample({
     *     "condition":{
     *         "liveId":[1,2,3],
     *         "status":[1]
     *     },
     *     "sort":{
     *         "sort":"DESC"
     *     },
     *     "currentPage":1,
     *     "limit":10
     * })
     * @returnExample({
     *     "items":[
     *         {
     *             "lgId":3,
     *             "liveId":1,
     *             "goodsId":678,
     *             "status":1,
     *             "createdTime":"1517219537",
     *             "updateTime":"2018-01-30 10:43:30"
     *         }
     *     ],
     *     "page":{
     *         "totalPage":1,
     *         "totalItems":1,
     *         "current":1,
     *         "limit":10
     *     }
     * })
     * @author wangjiang<wangjiang@eelly.net>
     * @since 2018年1月30日
     */
    public function getLiveGoodsList(array $condition, array $sort = [], int $currentPage = 1, int $limit = 10): array
    {
        return EellyClient::request('live/goods', 'getLiveGoodsList', true, $condition, $sort, $currentPage, $limit);
    }

    /**
     * 获取直播商品信息
     *
     * @param array $condition 查询条件
     * @param array $sort 排序信息
     * @param int $currentPage 当前页
     * @param int $limit 每页数量
     * @return array 商品信息
     * @requestExample({
     *     "condition":{
     *         "liveId":[1,2,3],
     *         "status":[1]
     *     },
     *     "sort":{
     *         "sort":"DESC"
     *     },
     *     "currentPage":1,
     *     "limit":10
     * })
     * @returnExample({
     *     "items":[
     *         {
     *             "lgId":3,
     *             "liveId":1,
     *             "goodsId":678,
     *             "status":1,
     *             "createdTime":"1517219537",
     *             "updateTime":"2018-01-30 10:43:30"
     *         }
     *     ],
     *     "page":{
     *         "totalPage":1,
     *         "totalItems":1,
     *         "current":1,
     *         "limit":10
     *     }
     * })
     * @author wangjiang<wangjiang@eelly.net>
     * @since 2018年1月30日
     */
    public function getLiveGoodsListAsync(array $condition, array $sort = [], int $currentPage = 1, int $limit = 10)
    {
        return EellyClient::request('live/goods', 'getLiveGoodsList', false, $condition, $sort, $currentPage, $limit);
    }

    /**
     * {@inheritdoc}
     */
    public function setSort(int $liveGoodsId, int $sort): bool
    {
        return EellyClient::request('live/goods', __FUNCTION__, true, $sort);
    }

    /**
     * @return self
     */
    public static function getInstance(): self
    {
        static $instance;
        if (null === $instance) {
            $instance = new self();
        }

        return $instance;
    }
}