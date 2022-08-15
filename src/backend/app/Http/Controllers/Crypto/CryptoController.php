<?php

namespace App\Http\Controllers\Crypto;

use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use App\Http\Resources\CryptoResource;
use Illuminate\Http\Request;
use WisdomDiala\Cryptocap\Facades\Cryptocap;

class CryptoController extends BaseController
{
    /**
     * @OA\Get(
     *     path="/api/crypto",
     *     tags={"Crypto"},
     *     summary="getAssets",
     *     description="Multiple status values can be provided with comma separated string",
     *     operationId="index",
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid status value"
     *     )
     * ),
     */
    public function index()
    {
        $data = Cryptocap::getAssets();

        return $this->sendResponse($data, 'getAssets');
    }
    /**
     * @OA\Get(
     *     path="/api/crypto/limit={limit}",
     *     tags={"Crypto"},
     *     summary="getAssetsWithLimit",
     *     description="Multiple status values can be provided with comma separated string",
     *     operationId="limit",
     *     @OA\Parameter(
     *         name="limit",
     *         in="path",
     *         required=true,
     *         @OA\Schema(
     *             type="integer"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid status value"
     *     )
     * ),
     */

    public function limit($limit)
    {
        $data = Cryptocap::getAssetsWithLimit($limit);

        return $this->sendResponse($data, 'getAssetsWithLimit');
    }

    /**
     * @OA\Get(
     *     path="/api/crypto/{id}/limit={limit}",
     *     tags={"Crypto"},
     *     summary="getSingleAsset",
     *     description="Multiple status values can be provided with comma separated string",
     *     operationId="assetMarket",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     *     @OA\Parameter(
     *         name="limit",
     *         in="path",
     *         required=true,
     *         @OA\Schema(
     *             type="integer"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid status value"
     *     )
     * ),
     */
    public function assetMarket($id, $limit)
    {
        $data = Cryptocap::getAssetMarket($id, $limit);

        return $this->sendResponse($data, 'getAssetMarket');
    }

    /**
     * @OA\Get(
     *     path="/api/crypto/{id}",
     *     tags={"Crypto"},
     *     summary="getSingleAsset",
     *     description="Multiple status values can be provided with comma separated string",
     *     operationId="show",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid status value"
     *     )
     * ),
     */
    public function show($id)
    {
        $data = Cryptocap::getSingleAsset($id);

        return $this->sendResponse($data, 'getSingleAsset');
    }

    /**
     * @OA\Get(
     *     path="/api/crypto/{id}/time={time}",
     *     tags={"Crypto"},
     *     summary="getAssetHistory",
     *     description="Multiple status values can be provided with comma separated string",
     *     operationId="assetHistory",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     *     @OA\Parameter(
     *         name="time",
     *         in="path",
     *         required=true,
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid status value"
     *     )
     * ),
     */

    public function assetHistory($id, $time)
    {
        $data = Cryptocap::getAssetHistory($id, $time);

        return $this->sendResponse($data, 'getAssetHistory');
    }

    public function rate()
    {
        $data = Cryptocap::getRates();

        return $this->sendResponse($data, 'getRates');
    }

    public function showRate($id)
    {
        $data = Cryptocap::getSingleRate($id);

        return $this->sendResponse($data, 'getSingleRate');
    }

    public function exchange()
    {
        $data = Cryptocap::getExchanges();

        return $this->sendResponse($data, 'getExchanges');
    }

    public function showExchange($id)
    {
        $data = Cryptocap::getSingleExchanges($id);

        return $this->sendResponse($data, 'getSingleExchanges');
    }

    public function market()
    {
        $data = Cryptocap::getMarkets();

        return $this->sendResponse($data, 'getMarkets');
    }
}
