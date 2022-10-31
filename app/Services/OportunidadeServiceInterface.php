<?php

namespace App\Services;

use App\Models\Oportunidade;
use Illuminate\Database\Eloquent\Collection;

interface OportunidadeServiceInterface
{
    public function all(): Collection;
    public function save(array $input): Oportunidade;
    public function delete(int $id): bool;
    public function getOportunidadeById(int $id): Oportunidade;
    public function atualizarOportunidade(array $input, int $id): Oportunidade;
}
