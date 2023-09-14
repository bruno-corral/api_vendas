<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venda extends Model
{
    protected $fillable = [
        'valor_venda',
        'data_venda',
        'vendedor_id'
    ];

    public $timestamps = false;

    public $hidden = [
        'created_at', 'updated_at'
    ];

    public function vendedores()
    {
        return $this->belongsTo(Vendedor::class);
    }

    use HasFactory;
}
