<?php

namespace App\Traits;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

trait ApiResponse {
    /**
     * Build a success response
     * @param string|array $data
     * @param int $code
     * @return JsonResponse
    */
    public function successResponse($data, $code = Response::HTTP_OK){
        return response()->json(['data' => $data], $code);
    }

    /**
     * Build am error response
     * @param string $message
     * @param int $code
     * @return JsonResponse
    */
    public function errorResponse($message, $code = Response::HTTP_OK){
        return response()->json(['error' => $message, 'code' => $code], $code);
    }
}