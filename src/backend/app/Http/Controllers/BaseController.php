<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function sendResponse($result, $message)
    {
        $response = [
            'success' => true,
            'data'    => $result,
            'message' => $message,
        ];

        return response()->json($response, 200);
    }

    public function sendError($error, $errorMessages = [], $code = 404)
    {
        $response = [
            'success' => false,
            'code' => $code,
            'message' => $error,
        ];

        if (!empty($errorMessages)) {
            $response['data'] = $errorMessages;
        }

        return response()->json($response, $code);
    }

    public function sendToken($token, $date)
    {
        $response = [
            'code' => 200,
            'access_token' => $token,
            'token_type' => 'Bearer',
            'expires_at' => $date
        ];
        return response()->json($response, 200);
    }

    public function checkAuth($credentials)
    {
        $response = [
            'code' => 401,
            'message' => 'Wrong email or password',
            'data' => $credentials,
        ];
        return response()->json($response, 401);
    }
}
