<?php

namespace easyAmazonAdv\SponsoredDisplay\ProductAds;

use easyAmazonAdv\Kernel\BaseClient;

/**
 * Class Client.
 *
 * @author  baihe <b_aihe@163.com>
 * @date    2019-11-12 17:08
 */
class Client extends BaseClient
{
    /**
     * getProductAd.
     *
     * @param int $adId
     *
     * @return array
     *
     * @author  baihe <b_aihe@163.com>
     * @date    2019-11-14 00:47
     */
    public function getProductAd(int $adId)
    {
        return $this->httpGet('/sd/productAds/'.$adId, [], false);
    }

    /**
     * getProductAdEx.
     *
     * @param int $adId
     *
     * @return array
     *
     * @author  baihe <b_aihe@163.com>
     * @date    2019-11-14 00:47
     */
    public function getProductAdEx(int $adId)
    {
        return $this->httpGet('/sd/productAds/extended/'.$adId, [], false);
    }

    /**
     * createProductAds.
     *
     * @param array $products
     *
     * @return array
     *
     * @author  baihe <b_aihe@163.com>
     * @date    2019-11-14 00:47
     */
    public function createProductAds(array $products)
    {
        return $this->httpPost('/sd/productAds', $products, [], false);
    }

    /**
     * updateProductAds.
     *
     * @param array $products
     *
     * @return array
     *
     * @author  baihe <b_aihe@163.com>
     * @date    2019-11-14 00:47
     */
    public function updateProductAds(array $products)
    {
        return $this->httpPut('/sd/productAds', $products, [], false);
    }

    /**
     * archiveProductAd.
     *
     * @param int $adId
     *
     * @return array
     *
     * @author  baihe <b_aihe@163.com>
     * @date    2019-11-14 00:47
     */
    public function archiveProductAd(int $adId)
    {
        return $this->httpDelete('/sd/productAds/'.$adId, [], [], false);
    }

    /**
     * listProductAds.
     *
     * @param array $params
     *
     * @return array
     *
     * @author  baihe <b_aihe@163.com>
     * @date    2019-11-14 00:47
     */
    public function listProductAds(array $params = [])
    {
        return $this->httpGet('/sd/productAds', $params, false);
    }

    /**
     * listProductAdsEx.
     *
     * @param array $params
     *
     * @return array
     *
     * @author  baihe <b_aihe@163.com>
     * @date    2019-11-14 00:47
     */
    public function listProductAdsEx(array $params)
    {
        return $this->httpGet('/sd/productAds/extended', $params, false);
    }
}
