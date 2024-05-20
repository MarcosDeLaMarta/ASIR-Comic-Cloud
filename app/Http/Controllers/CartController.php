<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DetallesPedido;
use App\Models\Comic;
use App\Models\Pedido;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;


class CartController extends Controller
{
    public function addToCart(Request $request, $id)
    {
        $comic = Comic::find($id);

        if (!$comic) {
            return redirect()->back()->with('error', 'El cómic no existe.');
        }

        $cantidad = $request->input('cantidad', 1);

        $cart = session()->get('cart', []); // Obtener el carrito de la sesión como un array asociativo

        // Verifica si el cómic ya está en el carrito
        if (isset($cart[$id])) {
            // Si el cómic ya está en el carrito, aumenta la cantidad
            $cart[$id]['cantidad'] += $cantidad;
        } else {
            // Si el cómic no está en el carrito, añádelo
            $cart[$id] = [
                'comic' => $comic,
                'cantidad' => $cantidad,
            ];
        }

        // Guarda los detalles del carrito en la sesión
        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'El cómic se ha agregado al carrito.');
    }


    public function verCarrito()
    {
        // Obtener el carrito de la sesión
        $cart = session()->get('cart', []);

        // Convertir el array en una colección
        $cartCollection = new Collection($cart);
        
        return view('carrito', ['cart' => $cartCollection]);
    }

    public function eliminarDelCarrito($idProducto)
    {
        // Obtener el carrito de la sesión
        $cart = session()->get('cart', []);
    
        // Verificar si el producto está en el carrito
        if (isset($cart[$idProducto])) {
            // Eliminar el producto del carrito
            unset($cart[$idProducto]);
    
            // Actualizar el carrito en la sesión
            session()->put('cart', $cart);
    
            return redirect()->back()->with('success', 'Producto eliminado del carrito');
        }
    
        // Si el producto no está en el carrito, redirigir con un mensaje de error
        return redirect()->back()->with('error', 'El producto no está en el carrito');
    }
    

    public function vaciarCarrito()
    {
        session()->forget('cart');

        return redirect()->route('carrito')->with('success', 'El carrito se ha vaciado.');
    }

    public function realizarPedido(Request $request)
    {
        $cart = session()->get('cart', []);
        $userId = Auth::id();

        if (empty($cart)) {
            return redirect()->route('carrito')->with('error', 'No hay productos en tu cesta.');
        }

        $pedido = Pedido::create([
            'id_usuario' => $userId,
            'fecha_pedido' => now(),
            'estado' => 'Pendiente',
        ]);

        foreach ($cart as $detalle) {
            DetallesPedido::create([
                'id_pedido' => $pedido->id_pedido,
                'id_comic' => $detalle['comic']->id_comic,
                'cantidad' => $detalle['cantidad'],
            ]);
        }

        session()->forget('cart');

        return redirect()->route('comics')->with('success', 'El pedido ha sido realizado correctamente.');
    }

    public function actualizarCantidad(Request $request, $idProducto)
    {
        $cantidad = $request->input('cantidad');

        if ($cantidad < 1) {
            return response()->json(['success' => false, 'message' => 'La cantidad debe ser al menos 1.']);
        }

        $cart = session()->get('cart', []);

        if (isset($cart[$idProducto])) {
            $cart[$idProducto]['cantidad'] = $cantidad;
            session()->put('cart', $cart);
        }

        
    }
}
