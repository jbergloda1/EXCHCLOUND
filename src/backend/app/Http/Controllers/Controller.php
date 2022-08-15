<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

/**
 * @OA\OpenApi(
 *     @OA\Info(
 *         description="This is a sample Userstore server.  You can find out more about Swagger at [http://swagger.io](http://swagger.io) or on [irc.freenode.net, #swagger](http://swagger.io/irc/).",
 *         version="1.0",
 *         title="EXCHCLOUND Api Version 1.0",
 *         description="EXCHCLOUND API Swagger",
 *          @OA\Contact(
 *              email="byocao@gmail.com"
 *          ),
 *          @OA\License(
 *              name="Apache 2.0",
 *              url="http://www.apache.org/licenses/LICENSE-2.0.html"
 *          )
 *      )
 *  )
 * 
 *  @OA\Server(
 *      url="http://127.0.0.1:8000/",
 *      description="Development Environment"
 *  )
 * @OA\Server(
 *      url="http://127.0.0.1:9000/",
 *      description="Staging  Environment"
 * )
 * 
 */
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
