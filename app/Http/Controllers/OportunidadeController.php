<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use App\Http\Requests\OportunidadeRequest;
use App\Http\Resources\OportunidadeResource;
use App\Services\OportunidadeServiceInterface;

class OportunidadeController extends Controller
{
    public function __construct(private OportunidadeServiceInterface $oportunidadeService)
    {
    }

    /**
     * @OA\Get(
     *     path="/api/oportunidades",
     *     tags={"Oportunidades"},
     *     summary="Listar oportunidades",
     *     security={{"bearer": {}}},
     *     @OA\Response(
     *         response=200,
     *         description="OK",
     *     )
     * )
     */
    public function index()
    {
        try {
            $oportunidades = $this->oportunidadeService->all();
        } catch (Exception $e) {
            return $this->responseError($e->getMessage(), $e->getCode());
        }

        return OportunidadeResource::collection($oportunidades);
    }

    /**
     * @OA\Post(
     *     path="/api/oportunidades",
     *     tags={"Oportunidades"},
     *     summary="Cadastrar oportunidades",
     *     security={{"bearer": {}}},
     *     @OA\Response(
     *         response=422,
     *         description="Falha na validação dos dados"
     *     ),
     *     @OA\Response(
     *         response=201,
     *         description="Usuário criado com sucesso"
     *     ),
     *     @OA\RequestBody(
     *         @OA\MediaType(
     *             mediaType="application/x-www-form-urlencoded",
     *             @OA\Schema(
     *                 type="object",
     *                 required={"nome", "descricao"},
     *                 @OA\Property(property="nome", type="string"),
     *                 @OA\Property(property="descricao", type="string"),
     *             )
     *         )
     *     )
     * )
     *
     * @param UsuarioRequest $request
     * @return UsuarioResource
     */
    public function store(OportunidadeRequest $request)
    {
        try {
            $oportunidade = $this->oportunidadeService->save($request->all());
        } catch (Exception $e) {
            return $this->responseError($e->getMessage(), $e->getCode());
        }

        return new OportunidadeResource($oportunidade);
    }

    public function update(OportunidadeRequest $request, $id)
    {
        try {
            $oportunidade = $this->oportunidadeService->atualizarOportunidade($request->all(), $id);
        } catch (Exception $e) {
            return $this->responseError($e->getMessage(), $e->getCode());
        }

        return new OportunidadeResource($oportunidade);
    }

    /**
     * @OA\Get(
     *     path="/api/oportunidades/{id}",
     *     tags={"Oportunidades"},
     *     summary="Busca a oportunidade pelo id",
     *     security={{"bearer": {}}},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="Id da oportunidade",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="OK"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Usuário não encontrado"
     *     ),
     * )
     *
     * @return UsuarioResource
     */
    public function show($id)
    {
        try {
            $oportunidade = $this->oportunidadeService->getOportunidadeById($id);
        } catch (Exception $e) {
            return $this->responseError($e->getMessage(), $e->getCode());
        }

        return new OportunidadeResource($oportunidade);
    }

    public function destroy($id)
    {
        try {
            $result = $this->oportunidadeService->delete($id);
        } catch (Exception $e) {
            return $this->responseError($e->getMessage(), $e->getCode());
        }

        return $this->responseSuccess($result);
    }
}
