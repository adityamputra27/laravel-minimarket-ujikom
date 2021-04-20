<?php

namespace App\Services;

class Response
{
    public static function validationError($error)
    {
        return response()->json([
            'status' => false,
            'errors' => $error
        ]);
    }
    public static function success($status)
    {
        return response()->json([
            'status' => $status
        ], 200);
    }
}
