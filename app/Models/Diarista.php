<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diarista extends Model
{
    use HasFactory;

    // Defini os campos que podem ser gravados
    protected $fillable = [
        'nome_completo',
        'cpf',
        'email',
        'telefone',
        'logradouro',
        'numero',
        'bairro',
        'cidade',
        'complemento',
        'cep',
        'estado',
        'codigo_ibge',
        'foto_usuario'
    ];

    // Defini os campos que serão usados na serialização
    protected $visible = ['nome_completo', 'cidade', 'foto_usuario', 'reputacao'];

    // Adiciona campo na serialização
    protected $appends = ['reputacao'];

    // Monta a URL da imagem
    public function getFotoUsuarioAttribute(string $valor)
    {
        return config('app.url') . '/' . $valor;
    }

    // Retorna a reputação
    public function getReputacaoAttribute($valor)
    {
        return mt_rand(1, 5);
    }

    // Busca diaristas por código ibge
    static public function buscaPorCodigoIbge(int $codigoIbge)
    {
        return self::where('codigo_ibge', $codigoIbge)->limit(6)->get();
    }

    // Retorna a quantidade de diaristas
    static public function quantidadePorCodigoIbge(int $codigoIbge)
    {
        $quantidade = self::where('codigo_ibge', $codigoIbge)->count();

        return $quantidade > 6 ? $quantidade - 6 : 0;
    }
}
