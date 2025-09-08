<?php

namespace App\Helpers;

use Illuminate\Http\JsonResponse;

class ApiResponse
{
    public static function success(
        string $message,
        mixed $data = [],
        int $code = StatusCodes::HTTP_OK,
        array $meta = []
    ): JsonResponse {
        return response()->json([
            'status' => StatusCodes::SUCCESS,
            'code' => $code,
            'message' => $message,
            'data' => $data,
            'errors' => [],
            'meta' => $meta
        ], $code);
    }

    public static function error(
        string $message,
        array $errors = [],
        int $code = StatusCodes::HTTP_BAD_REQUEST,
        mixed $data = [],
        array $meta = []
    ): JsonResponse {
        // هنا ممكن تضيف logging للـ errors
        return response()->json([
            'status' => StatusCodes::ERROR,
            'code' => $code,
            'message' => $message,
            'data' => $data,
            'errors' => $errors,
            'meta' => $meta
        ], $code);
    }

    public static function partialSuccess(
        string $message,
        mixed $data = [],
        array $errors = [],
        int $code = StatusCodes::HTTP_OK,
        array $meta = []
    ): JsonResponse {
        return response()->json([
            'status' => StatusCodes::PARTIAL_SUCCESS,
            'code' => $code,
            'message' => $message,
            'data' => $data,
            'errors' => $errors,
            'meta' => $meta
        ], $code);
    }
}
