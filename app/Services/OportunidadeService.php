<?php

namespace App\Services;

use App\Models\Oportunidade;
use App\Services\OportunidadeServiceInterface;
use App\Repositories\OportunidadeRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class OportunidadeService implements OportunidadeServiceInterface
{
    public function __construct(private OportunidadeRepositoryInterface $oportunidadeRepository)
    {
    }

    public function all(): Collection
    {
        return $this->oportunidadeRepository->all();
    }

    public function save(array $input): Oportunidade
    {
        return $this->oportunidadeRepository->save($input);
    }

    public function getOportunidadeById(int $id): Oportunidade
    {
        return $this->oportunidadeRepository->getOportunidadeById($id);
    }

    public function atualizarOportunidade(array $input, int $id): Oportunidade
    {
        return $this->oportunidadeRepository->atualizarOportunidade($input, $id);
    }

    public function delete(int $id): bool
    {
        return $this->oportunidadeRepository->delete($id);
    }
}
