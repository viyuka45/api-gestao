<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matricula extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_aluno', 'id_curso'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Alunos()
    {
        return $this->belongsTo(Aluno::class,'id_aluno','id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function Cursos()
    {
        return $this->hasMany(Curso::class,'id_curso','id');
    }
}
