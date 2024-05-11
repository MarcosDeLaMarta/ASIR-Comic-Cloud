<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DetallesPedido;
use App\Models\Comic;
use Illuminate\Support\Collection;


class CartController extends Controller
{
    public function addToCart(Request $request, $id)
    {
        $comic = Comic::find($id);

        if (!$comic) {
            return redirect()->back()->with('error', 'El cómic no existe.');
        }

        $cantidad = $request->input('cantidad', 1);

        $cart = session()->get('cart', collect()); // Obtener el carrito de la sesión como una colección o una nueva colección si está vacía

        // Verifica si el cómic ya está en el carrito
        $existingItem = $cart->firstWhere('comic.id_comic', $id);
        if ($existingItem) {
            // Si el cómic ya está en el carrito, aumenta la cantidad
            $existingItem['cantidad'] += $cantidad;
        } else {
            // Si el cómic no está en el carrito, añádelo
            $cart->add([
                'comic' => $comic,
                'cantidad' => $cantidad,
            ]);
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
}
