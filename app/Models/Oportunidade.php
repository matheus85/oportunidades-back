<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oportunidade extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'descricao',
        'status_id'
    ];

    protected $table = 'oportunidades';

    public function clientes()
    {
        return $this->belongsToMany(
            'App\Models\Oportunidade',
            'oportunidade_clientes',
            'user_id',
            'oportunidade_id'
        );
    }

    public function status()
    {
        return $this->hasOne('App\Models\Status', 'id', 'status_id');
    }
}
