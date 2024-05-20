<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedido;
use App\Models\DetallesPedido;

class PedidoController extends Controller
{
    public function index()
    {
        // Obtener todos los pedidos con sus detalles
        $pedidos = Pedido::with('detallesPedido.comic', 'usuario')->get();
        return view('pedidos', compact('pedidos'));
    }

    public function update(Request $request, $id)
    {
        // Validar el estado
        $request->validate([
            'estado' => 'required|string|max:50',
        ]);

        // Encontrar el pedido y actualizar el estado
        $pedido = Pedido::findOrFail($id);
        $pedido->estado = $request->estado;
        $pedido->save();

        return redirect()->route('pedidos.index')->with('success', 'Estado del pedido actualizado correctamente.');
    }

    public function destroy($id)
    {
        // Encontrar el pedido y eliminarlo junto con sus detalles
        $pedido = Pedido::findOrFail($id);
        $pedido->detallesPedido()->delete();
        $pedido->delete();

        return redirect()->route('pedidos.index')->with('success', 'Pedido eliminado correctamente.');
    }
}
