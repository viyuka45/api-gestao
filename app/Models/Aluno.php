<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Aluno extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tb_aluno';

    protected $fillable = [
        'nome', 'email', 'data_nascimento'
    ];

    protected $dates = ['dt_nascimento'];

    public function matriculas()
    {
        return $this->hasMany(Matricula::class);
    }

    public function cursos()
    {
        return $this->belongsToMany(Curso::class, 'tb_matricula', 'id_aluno', 'id_curso');
    }
}
