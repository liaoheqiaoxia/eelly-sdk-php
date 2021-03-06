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

namespace Eelly\SDK\Service\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\Service\Service\CompanyInterface;
use Eelly\SDK\Service\DTO\CompanyDTO;
use Eelly\DTO\UidDTO;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class Company implements CompanyInterface
{
    /**
     * 获取一条店铺企业认证记录.
     *
     * @param int $storeId 店铺ID
     *
     * @throws \Eelly\SDK\Service\Exception\CompanyException
     *
     * @return CompanyDTO
     * @requestExample({"storeId":1})
     * @returnExample({"storeId":1,"sbId":1,"name":"\u5e97\u94fa1","license":"440981198806232871","mobile":"13427587735","company":"sixdec","number":"12345678899999","businessLicense":"[\"https:\\\/\\\/img03.eelly.com\\\/G04\\\/M00\\\/00\\\/98\\\/small_118_poYBAFjWXYaIWdWkAAJU9MtwDJgAAA7dgEx54sAAlUM236.jpg\",\"https:\\\/\\\/img03.eelly.com\\\/G02\\\/M00\\\/00\\\/BD\\\/small_118_ooYBAFjWXYqICR1yAAJWitxTD2AAABXRwMJp64AAlai106.jpg\"]","companyPhoto":"[\"https:\\\/\\\/img03.eelly.com\\\/G04\\\/M00\\\/00\\\/98\\\/small_118_poYBAFjWXYaIWdWkAAJU9MtwDJgAAA7dgEx54sAAlUM236.jpg\",\"https:\\\/\\\/img03.eelly.com\\\/G02\\\/M00\\\/00\\\/BD\\\/small_118_ooYBAFjWXYqICR1yAAJWitxTD2AAABXRwMJp64AAlai106.jpg\"]","status":1,"created_time":1458093605})
     *
     * @author wujunhua<wujunhua@eelly.net>
     *
     * @since 2017-09-05
     */
    public function getCompany(int $storeId): CompanyDTO
    {
        return EellyClient::request('service/company', __FUNCTION__, true, $storeId);
    }

    /**
     * 获取一条店铺企业认证记录.
     *
     * @param int $storeId 店铺ID
     *
     * @throws \Eelly\SDK\Service\Exception\CompanyException
     *
     * @return CompanyDTO
     * @requestExample({"storeId":1})
     * @returnExample({"storeId":1,"sbId":1,"name":"\u5e97\u94fa1","license":"440981198806232871","mobile":"13427587735","company":"sixdec","number":"12345678899999","businessLicense":"[\"https:\\\/\\\/img03.eelly.com\\\/G04\\\/M00\\\/00\\\/98\\\/small_118_poYBAFjWXYaIWdWkAAJU9MtwDJgAAA7dgEx54sAAlUM236.jpg\",\"https:\\\/\\\/img03.eelly.com\\\/G02\\\/M00\\\/00\\\/BD\\\/small_118_ooYBAFjWXYqICR1yAAJWitxTD2AAABXRwMJp64AAlai106.jpg\"]","companyPhoto":"[\"https:\\\/\\\/img03.eelly.com\\\/G04\\\/M00\\\/00\\\/98\\\/small_118_poYBAFjWXYaIWdWkAAJU9MtwDJgAAA7dgEx54sAAlUM236.jpg\",\"https:\\\/\\\/img03.eelly.com\\\/G02\\\/M00\\\/00\\\/BD\\\/small_118_ooYBAFjWXYqICR1yAAJWitxTD2AAABXRwMJp64AAlai106.jpg\"]","status":1,"created_time":1458093605})
     *
     * @author wujunhua<wujunhua@eelly.net>
     *
     * @since 2017-09-05
     */
    public function getCompanyAsync(int $storeId)
    {
        return EellyClient::request('service/company', __FUNCTION__, false, $storeId);
    }

    /**
     * 新增店铺企业认证数据.
     *
     * @param array  $data                    认证数据
     * @param int    $data['storeId']         店铺id
     * @param int    $data['sbId']            服务购买记录ID
     * @param string $data['name']            真实姓名
     * @param string $data['license']         身份证号码
     * @param string $data['mobile']          手机号
     * @param string $data['company']         企业名称
     * @param string $data['number']          工商注册号
     * @param string $data['businessLicense'] 营业执照图片地址，最多5张
     * @param string $data['companyPhoto']    企业实拍图片地址，最多5张
     * @param UidDTO $user                    登录用户对象
     *
     * @throws \Eelly\SDK\Service\Exception\CompanyException
     *
     * @return bool 新增结果
     * @requestExample({"data":{"storeId":1,"name":"\u5e97\u94fa1","license":"440981198806232871","mobile":"13427587735","company":"sixdec","number":"12345678899999","businessLicense":"[\"https:\\\/\\\/img03.eelly.com\\\/G04\\\/M00\\\/00\\\/98\\\/small_118_poYBAFjWXYaIWdWkAAJU9MtwDJgAAA7dgEx54sAAlUM236.jpg\",\"https:\\\/\\\/img03.eelly.com\\\/G02\\\/M00\\\/00\\\/BD\\\/small_118_ooYBAFjWXYqICR1yAAJWitxTD2AAABXRwMJp64AAlai106.jpg\"]","companyPhoto":"[\"https:\\\/\\\/img03.eelly.com\\\/G04\\\/M00\\\/00\\\/98\\\/small_118_poYBAFjWXYaIWdWkAAJU9MtwDJgAAA7dgEx54sAAlUM236.jpg\",\"https:\\\/\\\/img03.eelly.com\\\/G02\\\/M00\\\/00\\\/BD\\\/small_118_ooYBAFjWXYqICR1yAAJWitxTD2AAABXRwMJp64AAlai106.jpg\"]"}})
     * @returnExample(true)
     *
     * @author wujunhua<wujunhua@eelly.net>
     *
     * @since 2017-09-05
     */
    public function addCompany(array $data, UidDTO $user = null): bool
    {
        return EellyClient::request('service/company', __FUNCTION__, true, $data, $user);
    }

    /**
     * 新增店铺企业认证数据.
     *
     * @param array  $data                    认证数据
     * @param int    $data['storeId']         店铺id
     * @param int    $data['sbId']            服务购买记录ID
     * @param string $data['name']            真实姓名
     * @param string $data['license']         身份证号码
     * @param string $data['mobile']          手机号
     * @param string $data['company']         企业名称
     * @param string $data['number']          工商注册号
     * @param string $data['businessLicense'] 营业执照图片地址，最多5张
     * @param string $data['companyPhoto']    企业实拍图片地址，最多5张
     * @param UidDTO $user                    登录用户对象
     *
     * @throws \Eelly\SDK\Service\Exception\CompanyException
     *
     * @return bool 新增结果
     * @requestExample({"data":{"storeId":1,"name":"\u5e97\u94fa1","license":"440981198806232871","mobile":"13427587735","company":"sixdec","number":"12345678899999","businessLicense":"[\"https:\\\/\\\/img03.eelly.com\\\/G04\\\/M00\\\/00\\\/98\\\/small_118_poYBAFjWXYaIWdWkAAJU9MtwDJgAAA7dgEx54sAAlUM236.jpg\",\"https:\\\/\\\/img03.eelly.com\\\/G02\\\/M00\\\/00\\\/BD\\\/small_118_ooYBAFjWXYqICR1yAAJWitxTD2AAABXRwMJp64AAlai106.jpg\"]","companyPhoto":"[\"https:\\\/\\\/img03.eelly.com\\\/G04\\\/M00\\\/00\\\/98\\\/small_118_poYBAFjWXYaIWdWkAAJU9MtwDJgAAA7dgEx54sAAlUM236.jpg\",\"https:\\\/\\\/img03.eelly.com\\\/G02\\\/M00\\\/00\\\/BD\\\/small_118_ooYBAFjWXYqICR1yAAJWitxTD2AAABXRwMJp64AAlai106.jpg\"]"}})
     * @returnExample(true)
     *
     * @author wujunhua<wujunhua@eelly.net>
     *
     * @since 2017-09-05
     */
    public function addCompanyAsync(array $data, UidDTO $user = null)
    {
        return EellyClient::request('service/company', __FUNCTION__, false, $data, $user);
    }

    /**
     * 修改店铺企业认证数据.
     * 用于用户修改认证信息.
     *
     * @param array  $data                    认证数据
     * @param int    $data['storeId']         店铺id
     * @param int    $data['sbId']            服务购买记录ID
     * @param string $data['name']            真实姓名
     * @param string $data['license']         身份证号码
     * @param string $data['mobile']          手机号
     * @param string $data['company']         企业名称
     * @param string $data['number']          工商注册号
     * @param string $data['businessLicense'] 营业执照图片地址，最多5张
     * @param string $data['companyPhoto']    企业实拍图片地址，最多5张
     * @param int    $data['status']          处理状态：0 未处理 1 审核通过 2 审核失败 3 认证过期
     * @param UidDTO $user                    登录用户对象
     *
     * @throws \Eelly\SDK\Service\Exception\CompanyException
     *
     * @return bool 修改结果
     * @requestExample({"data":{"storeId":1,"name":"\u5e97\u94fa1","license":"440981198806232871","mobile":"13427587735","company":"sixdec","number":"12345678899999","businessLicense":"[\"https:\\\/\\\/img03.eelly.com\\\/G04\\\/M00\\\/00\\\/98\\\/small_118_poYBAFjWXYaIWdWkAAJU9MtwDJgAAA7dgEx54sAAlUM236.jpg\",\"https:\\\/\\\/img03.eelly.com\\\/G02\\\/M00\\\/00\\\/BD\\\/small_118_ooYBAFjWXYqICR1yAAJWitxTD2AAABXRwMJp64AAlai106.jpg\"]","companyPhoto":"[\"https:\\\/\\\/img03.eelly.com\\\/G04\\\/M00\\\/00\\\/98\\\/small_118_poYBAFjWXYaIWdWkAAJU9MtwDJgAAA7dgEx54sAAlUM236.jpg\",\"https:\\\/\\\/img03.eelly.com\\\/G02\\\/M00\\\/00\\\/BD\\\/small_118_ooYBAFjWXYqICR1yAAJWitxTD2AAABXRwMJp64AAlai106.jpg\"]","status":1}})
     * @returnExample(true)
     *
     * @author wujunhua<wujunhua@eelly.net>
     *
     * @since 2017-09-05
     */
    public function updateCompany(array $data, UidDTO $user = null): bool
    {
        return EellyClient::request('service/company', __FUNCTION__, true, $data, $user);
    }

    /**
     * 修改店铺企业认证数据.
     * 用于用户修改认证信息.
     *
     * @param array  $data                    认证数据
     * @param int    $data['storeId']         店铺id
     * @param int    $data['sbId']            服务购买记录ID
     * @param string $data['name']            真实姓名
     * @param string $data['license']         身份证号码
     * @param string $data['mobile']          手机号
     * @param string $data['company']         企业名称
     * @param string $data['number']          工商注册号
     * @param string $data['businessLicense'] 营业执照图片地址，最多5张
     * @param string $data['companyPhoto']    企业实拍图片地址，最多5张
     * @param int    $data['status']          处理状态：0 未处理 1 审核通过 2 审核失败 3 认证过期
     * @param UidDTO $user                    登录用户对象
     *
     * @throws \Eelly\SDK\Service\Exception\CompanyException
     *
     * @return bool 修改结果
     * @requestExample({"data":{"storeId":1,"name":"\u5e97\u94fa1","license":"440981198806232871","mobile":"13427587735","company":"sixdec","number":"12345678899999","businessLicense":"[\"https:\\\/\\\/img03.eelly.com\\\/G04\\\/M00\\\/00\\\/98\\\/small_118_poYBAFjWXYaIWdWkAAJU9MtwDJgAAA7dgEx54sAAlUM236.jpg\",\"https:\\\/\\\/img03.eelly.com\\\/G02\\\/M00\\\/00\\\/BD\\\/small_118_ooYBAFjWXYqICR1yAAJWitxTD2AAABXRwMJp64AAlai106.jpg\"]","companyPhoto":"[\"https:\\\/\\\/img03.eelly.com\\\/G04\\\/M00\\\/00\\\/98\\\/small_118_poYBAFjWXYaIWdWkAAJU9MtwDJgAAA7dgEx54sAAlUM236.jpg\",\"https:\\\/\\\/img03.eelly.com\\\/G02\\\/M00\\\/00\\\/BD\\\/small_118_ooYBAFjWXYqICR1yAAJWitxTD2AAABXRwMJp64AAlai106.jpg\"]","status":1}})
     * @returnExample(true)
     *
     * @author wujunhua<wujunhua@eelly.net>
     *
     * @since 2017-09-05
     */
    public function updateCompanyAsync(array $data, UidDTO $user = null)
    {
        return EellyClient::request('service/company', __FUNCTION__, false, $data, $user);
    }

    /**
     * 审核品店铺企业认证.
     * 用于管理员审核认证信息.
     *
     * @param int    $storeId 店铺ID
     * @param int    $status  处理状态：0 未处理 1 审核通过 2 审核失败 3 认证过期
     * @param UidDTO $user    登录用户对象
     *
     * @throws \Eelly\SDK\Service\Exception\CompanyException
     *
     * @return bool 审核结果
     * @requestExample({"storeId":1})
     * @returnExample(true)
     *
     * @author wujunhua<wujunhua@eelly.net>
     *
     * @since 2017-09-05
     */
    public function checkCompany(int $storeId, int $status, UidDTO $user = null): bool
    {
        return EellyClient::request('service/company', __FUNCTION__, true, $storeId, $status, $user);
    }

    /**
     * 审核品店铺企业认证.
     * 用于管理员审核认证信息.
     *
     * @param int    $storeId 店铺ID
     * @param int    $status  处理状态：0 未处理 1 审核通过 2 审核失败 3 认证过期
     * @param UidDTO $user    登录用户对象
     *
     * @throws \Eelly\SDK\Service\Exception\CompanyException
     *
     * @return bool 审核结果
     * @requestExample({"storeId":1})
     * @returnExample(true)
     *
     * @author wujunhua<wujunhua@eelly.net>
     *
     * @since 2017-09-05
     */
    public function checkCompanyAsync(int $storeId, int $status, UidDTO $user = null)
    {
        return EellyClient::request('service/company', __FUNCTION__, false, $storeId, $status, $user);
    }

    /**
     * 获取企业认证简介.
     *
     * @param int $storeId  店铺id
     *
     * @return array
     * @requestExample({"storeId":1})
     * @returnExample({"authName":"企业身份真实性认证","authRank":"中级认证","auditTime":0,"expireTime":0,"imagesArr":[]})
     *
     * @author zhangzeqiang<zhangzeqiang@eelly.net>
     * @since  2017年11月28日
     */
    public function getCompanyBase(int $storeId): array
    {
        return EellyClient::request('service/company', __FUNCTION__, true, $storeId);
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