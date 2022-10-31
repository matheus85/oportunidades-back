<?php

namespace App\Repositories;

use App\Models\Oportunidade;
use Illuminate\Database\Eloquent\Collection;

interface OportunidadeRepositoryInterface
{
    public function all(): Collection;
    public function save(array $input): Oportunidade;
    public function getOportunidadeById(int $id): Oportunidade;
    public function atualizarOportunidade(array $input, int $id): Oportunidade;
    public function delete(int $id): bool;
}
