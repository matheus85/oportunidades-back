<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthRequest;
use App\Http\Resources\AuthResource;
use Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    /**
     * @OA\Post(
     *     path="/api/login",
     *     tags={"Login"},
     *     summary="Autorização",
     *     @OA\Response(
     *         response=401,
     *         description="Falha na validação dos dados"
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="OK"
     *     ),
     *     @OA\RequestBody(
     *         @OA\MediaType(
     *             mediaType="application/x-www-form-urlencoded",
     *             @OA\Schema(
     *                 type="object",
     *                 required={"email", "password"},
     *                 @OA\Property(property="email", type="string"),
     *                 @OA\Property(property="password", type="string"),
     *             )
     *         )
     *     )
     * )
     */
    public function login(AuthRequest $request)
    {
        $input = $request->all();

        if (
            !Auth::attempt([
            'email'    => $input['email'],
            'password' => $input['password']])
        ) {
            return $this->responseError('Unauthorized', 401);
        }

        return new AuthResource(auth()->user());
    }

    public function logout(Request $request)
    {
        $request->user()->token()->revoke();

        return $this->responseSuccess('Ok');
    }
}
