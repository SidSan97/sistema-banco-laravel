<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transacoes extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome_remetente',
        'num_conta_rem',
        'valor_transferencia',
        'id_correntista ',
        'nome_destinatario',
        'num_conta_dest',
    ];
}
