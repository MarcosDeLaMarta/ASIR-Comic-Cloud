<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_pedido';

    protected $fillable = [
        'id_usuario',
        'fecha_pedido',
        'estado',
    ];

    public function detallesPedido()
    {
        return $this->hasMany(DetallesPedido::class, 'id_pedido');
    }

    public function usuario()
    {
        return $this->belongsTo(User::class, 'id_usuario');
    }
}
