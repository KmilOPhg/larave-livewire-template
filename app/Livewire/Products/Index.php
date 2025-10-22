<?php

namespace App\Livewire\Products;

use AllowDynamicProperties;
use App\Models\Product;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;
use Livewire\WithPagination;

/**
 * Class Index
 * @package App\Livewire\Products
 * @property Collection $products
 *
 * Componente Livewire para mostrar una lista de productos.
 */
class Index extends Component
{
    use WithPagination;

    public function eliminarProducto(Product $product)
    {
        try {
            $product->delete();

            session()->flash('success', 'Producto eliminado correctamente.');
            return $this->redirectRoute('products.index', navigate: true);
        } catch (\Exception $e) {
            session()->flash('error', 'Error al eliminar producto: ' . $e->getMessage());
            return null;
        }
    }

    public function render()
    {
        return view('livewire.products.index', [
            'products' => Product::paginate(10)
        ]);
    }
}
