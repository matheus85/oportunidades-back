<?php

namespace App\Traits;

use Illuminate\Http\Response;

trait ResponseTrait
{
    public function responseError(string $message, int $code)
    {
        if (!array_key_exists($code, Response::$statusTexts)) {
            $code = 500;
        }

        return response()->json(
            $message,
            $code
        );
    }

    public function responseSuccess($data, int $code = 200)
    {
        return response()->json(
            $data,
            $code
        );
    }
}
