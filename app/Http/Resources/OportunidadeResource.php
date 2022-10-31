<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OportunidadeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id'        => $this->id,
            'nome'      => $this->nome,
            'status_id' => $this->status_id,
            'descricao' => $this->descricao,
            'clientes'  => $this->clientes()->allRelatedIds()->toArray(),
        ];
    }
}
