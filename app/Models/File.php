<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;
    public function agendamento()
    {
        return $this->belongsTo(Agendamento::class);
    }
    
    public static function statusOptions(){
        return [
            'Em Elaboração',
            'Em Avaliação',
            'Aprovado',
        ];
    }
}
