<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsuarioModel extends Model
{
    use HasFactory;

    protected $table = "mensagem";

    public $timestamps=false;
    protected $fillable =['nome','email','telefone','assunto','mensagem'];

    protected $primaryKey = 'id';
}