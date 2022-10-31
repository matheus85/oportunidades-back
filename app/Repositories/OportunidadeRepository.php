<?php

namespace App\Repositories;

use App\Models\Oportunidade;
use App\Repositories\OportunidadeRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;
use Exception;

class OportunidadeRepository implements OportunidadeRepositoryInterface
{
    public function __construct(private Oportunidade $oportunidade)
    {
    }

    public function all(): Collection
    {
        return $this->oportunidade->get();
    }

    public function save(array $input): Oportunidade
    {
        \Log::info($input);
        $oportunidade = $this->oportunidade->create($input);
        \Log::info($oportunidade);

        if (!empty($input['clientes'])) {
            $oportunidade->clientes()->sync($input['clientes']);
        }

        return $oportunidade;
    }

    public function getOportunidadeById(int $id): Oportunidade
    {
        $oportunidade = $this->oportunidade->find($id);

        if (empty($oportunidade)) {
            throw new Exception('Not found', 404);
        }

        return $oportunidade;
    }

    public function atualizarOportunidade(array $input, int $id): Oportunidade
    {
        $oportunidade = $this->oportunidade->find($id);

        if (empty($oportunidade)) {
            throw new Exception('Not found', 404);
        }

        $oportunidade->fill($input)->save();

        if (!empty($input['clientes'])) {
            $oportunidade->clientes()->sync($input['clientes']);
        }

        $oportunidade->refresh();

        return $oportunidade;
    }

    public function delete(int $id): bool
    {
        $oportunidade = $this->oportunidade->find($id);

        if (empty($oportunidade)) {
            throw new Exception('Not found', 404);
        }

        $oportunidade->delete();

        return true;
    }
}
